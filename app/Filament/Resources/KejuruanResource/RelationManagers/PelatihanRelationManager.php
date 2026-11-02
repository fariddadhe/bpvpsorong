<?php

namespace App\Filament\Resources\KejuruanResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;

class PelatihanRelationManager extends RelationManager
{
    protected static string $relationship = 'pelatihan';

     public function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            TextInput::make('nama')->required(),
            Select::make('kategori_id')
                ->relationship('kategori', 'nama')
                ->label('Kategori')
                ->searchable()
                ->preload()
                ->nullable(),
            TextInput::make('durasi'),
            Textarea::make('deskripsi'),
            FileUpload::make('gambar')->image()->directory('pelatihan-images'),
        ]);
    }
    
     public function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->searchable(),
                TextColumn::make('kategori.nama')->label('Kategori'),
                TextColumn::make('durasi'),
                ImageColumn::make('gambar')->disk('public'),
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PelatihanResource\Pages;
use App\Filament\Resources\PelatihanResource\RelationManagers;
use App\Models\Pelatihan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\ViewAction;

class PelatihanResource extends Resource
{
    protected static ?string $model = Pelatihan::class;

    protected static ?string $navigationLabel = 'Pelatihan';

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';


    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('kejuruan_id')
                ->relationship('kejuruan', 'nama')
                ->required()
                ->label('Kejuruan')
                ->searchable(),  // Menambahkan fitur pencarian
            Select::make('kategori_id')
                ->relationship('kategori', 'nama')
                ->label('Kategori')
                ->searchable()
                ->preload()
                ->nullable(),
            TextInput::make('nama')->required(),
            TextInput::make('durasi'),
            Textarea::make('deskripsi'),
            FileUpload::make('gambar')->image()->directory('pelatihan-images'),
        ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->searchable()->label('Pelatihan')->sortable(),
                TextColumn::make('kejuruan.nama')->label('Kejuruan')->sortable()->searchable(),
                TextColumn::make('kategori.nama')->label('Kategori')->sortable()->searchable(),
                TextColumn::make('durasi'),
                ImageColumn::make('gambar')->disk('public')->size(70),
            ])
            ->actions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->recordAction(null)
            ->recordUrl(fn($record) => PelatihanResource::getUrl('view', ['record' => $record]));
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPelatihans::route('/'),
            'create' => Pages\CreatePelatihan::route('/create'),
            'edit' => Pages\EditPelatihan::route('/{record}/edit'),
            'view' => Pages\ViewPelatihan::route('/{record}'),
        ];
    }
}

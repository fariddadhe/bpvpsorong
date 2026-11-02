<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KejuruanResource\Pages;
use App\Filament\Resources\KejuruanResource\RelationManagers;
use App\Filament\Resources\KejuruanResource\RelationManagers\PelatihanRelationManager;
use App\Models\Kejuruan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\ViewAction;


class KejuruanResource extends Resource
{
    protected static ?string $model = Kejuruan::class;

    protected static ?string $navigationLabel = 'Kejuruan';

    protected static ?string $navigationIcon = 'heroicon-o-cog';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('nama')->required(),
            Textarea::make('deskripsi'),
            FileUpload::make('gambar')->image()->directory('kejuruan-images'),
            TextInput::make('jumlah_lulusan')->label('Jumlah Lulusan')->numeric()->required(),
        ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->searchable(),
                TextColumn::make('jumlah_lulusan'),
                TextColumn::make('deskripsi')
                    ->wrap(), // biar kalau agak panjang tetap melipat, bukan memanjang

                ImageColumn::make('gambar')
                    ->disk('public')
                    ->label('Foto')
                    ->size(150) // ukuran lebih besar (default biasanya 40–60)
                    ->extraImgAttributes(['style' => 'cursor: zoom-in'])
                    ->openUrlInNewTab(), // klik gambar langsung buka gambar asli
                // TextColumn::make('created_at')->dateTime(),
            ])
            ->actions([
                ViewAction::make(), // Tombol View
                EditAction::make(), // Tombol Edit
                DeleteAction::make(), // Tombol Delete
            ])
            ->recordUrl(fn($record) => KejuruanResource::getUrl('view', ['record' => $record]))
            ->recordAction(null);
    }

    // public static function table(Table $table): Table
    // {
    //     return $table
    //         ->columns([
    //             TextColumn::make('nama')->searchable(),
    //             TextColumn::make('deskripsi')
    //                 ->wrap(), // biar kalau agak panjang tetap melipat, bukan memanjang

    //             ImageColumn::make('gambar')
    //                 ->disk('public')
    //                 ->label('Foto')
    //                 ->size(150) // ukuran lebih besar (default biasanya 40–60)
    //                 ->extraImgAttributes(['style' => 'cursor: zoom-in'])
    //                 ->openUrlInNewTab(), // klik gambar langsung buka gambar asli
    //             TextColumn::make('created_at')->dateTime(),
    //         ]);
    // }

    public static function getRelations(): array
    {
        return [
            PelatihanRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKejuruans::route('/'),
            'create' => Pages\CreateKejuruan::route('/create'),
            'edit' => Pages\EditKejuruan::route('/{record}/edit'),
            'view' => Pages\ViewKejuruan::route('/{record}'),
        ];
    }
}

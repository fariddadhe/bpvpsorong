<?php

namespace App\Filament\Resources\KejuruanResource\Pages;

use App\Filament\Resources\KejuruanResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Infolist;

class ViewKejuruan extends ViewRecord
{
    protected static string $resource = KejuruanResource::class;

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist->schema([
            ImageEntry::make('gambar')
                ->disk('public')
                ->label('Gambar')
                ->extraAttributes(['style' => 'max-width: 300px; border-radius: 12px;']),

            TextEntry::make('nama')
                ->label('Nama Kejuruan')
                ->size(TextEntry\TextEntrySize::Large),

            TextEntry::make('deskripsi')
                ->label('Deskripsi')
                ->markdown(),

            TextEntry::make('jumlah_lulusan')
                ->label('Jumlah Lulusan'),
        ]);
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

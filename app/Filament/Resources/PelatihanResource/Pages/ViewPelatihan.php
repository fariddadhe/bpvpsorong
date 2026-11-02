<?php

namespace App\Filament\Resources\PelatihanResource\Pages;

use App\Filament\Resources\PelatihanResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Actions;

class ViewPelatihan extends ViewRecord
{
    protected static string $resource = PelatihanResource::class;

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist->schema([
            ImageEntry::make('gambar')
                ->disk('public')
                ->label('')
                ->hiddenLabel()
                ->extraAttributes(['style' => 'max-width: 300px; border-radius: 12px;']),

            TextEntry::make('nama')
                ->label('Nama Pelatihan')
                ->size(TextEntry\TextEntrySize::Large),

            TextEntry::make('durasi')
                ->label('Durasi'),

            TextEntry::make('kejuruan.nama')
                ->label('Kejuruan'),

            TextEntry::make('kategori.nama')
                ->label('Kategori')
                ->placeholder('-'),

            TextEntry::make('deskripsi')
                ->label('Deskripsi')
                ->markdown(),
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

<?php

namespace App\Filament\Resources\KejuruanResource\Pages;

use App\Filament\Resources\KejuruanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKejuruans extends ListRecords
{
    protected static string $resource = KejuruanResource::class;

    protected static ?string $title = 'Kejuruan';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

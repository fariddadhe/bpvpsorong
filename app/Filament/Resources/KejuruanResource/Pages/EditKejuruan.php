<?php

namespace App\Filament\Resources\KejuruanResource\Pages;

use App\Filament\Resources\KejuruanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKejuruan extends EditRecord
{
    protected static string $resource = KejuruanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

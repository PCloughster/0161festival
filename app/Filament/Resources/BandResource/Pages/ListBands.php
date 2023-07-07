<?php

namespace App\Filament\Resources\BandResource\Pages;

use App\Filament\Resources\BandResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBands extends ListRecords
{
    protected static string $resource = BandResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\BandResource\Pages;

use App\Filament\Resources\BandResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBand extends ViewRecord
{
    protected static string $resource = BandResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

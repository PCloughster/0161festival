<?php

namespace App\Filament\Resources\BandResource\Pages;

use App\Filament\Resources\BandResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBand extends EditRecord
{
    protected static string $resource = BandResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

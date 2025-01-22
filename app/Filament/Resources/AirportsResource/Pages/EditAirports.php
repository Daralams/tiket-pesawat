<?php

namespace App\Filament\Resources\AirportsResource\Pages;

use App\Filament\Resources\AirportsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAirports extends EditRecord
{
    protected static string $resource = AirportsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

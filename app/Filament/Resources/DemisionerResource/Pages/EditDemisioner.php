<?php

namespace App\Filament\Resources\DemisionerResource\Pages;

use App\Filament\Resources\DemisionerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDemisioner extends EditRecord
{
    protected static string $resource = DemisionerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

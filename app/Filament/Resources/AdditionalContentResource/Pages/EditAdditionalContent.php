<?php

namespace App\Filament\Resources\AdditionalContentResource\Pages;

use App\Filament\Resources\AdditionalContentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdditionalContent extends EditRecord
{
    protected static string $resource = AdditionalContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

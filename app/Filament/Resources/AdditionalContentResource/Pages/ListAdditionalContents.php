<?php

namespace App\Filament\Resources\AdditionalContentResource\Pages;

use App\Filament\Resources\AdditionalContentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdditionalContents extends ListRecords
{
    protected static string $resource = AdditionalContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

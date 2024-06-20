<?php

namespace App\Filament\Resources\ThumbnailResource\Pages;

use App\Filament\Resources\ThumbnailResource;
use App\Models\Thumbnail;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditThumbnail extends EditRecord
{
    protected static string $resource = ThumbnailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(Thumbnail $record){
                    if($record->thumbnail_path){
                        Storage::disk('public')->delete($record->thumbnail_path);
                    }
                }
            ),
        ];
    }
}
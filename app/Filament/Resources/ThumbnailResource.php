<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ThumbnailResource\Pages;
use App\Filament\Resources\ThumbnailResource\RelationManagers;
use App\Models\Section;
use App\Models\Thumbnail;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class ThumbnailResource extends Resource
{
    protected static ?string $model = Thumbnail::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Forms\Components\Toggle::make('is_active')
                        ->required(),
                    Select::make('section_id')
                        ->label('Section')
                        ->options(Section::all()->pluck('title', 'id')->toArray())
                        ->required(),
                    Forms\Components\FileUpload::make('thumbnail_path')
                        ->required()->image()->disk('public')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('section.title')
                    ->label('Section Title')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\ImageColumn::make('thumbnail_path')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->after(
                        function (Collection $records){
                            foreach($records as $key => $value){
                                if($value->thumbnail_path){
                                    Storage::disk('public')->delete($value->thumbnail_path);
                                }
                            }
                        }),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListThumbnails::route('/'),
            'create' => Pages\CreateThumbnail::route('/create'),
            'edit' => Pages\EditThumbnail::route('/{record}/edit'),
        ];
    }
}
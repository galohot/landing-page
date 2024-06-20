<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdditionalContentResource\Pages;
use App\Filament\Resources\AdditionalContentResource\RelationManagers;
use App\Models\AdditionalContent;
use App\Models\Section;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdditionalContentResource extends Resource
{
    protected static ?string $model = AdditionalContent::class;

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
                    Forms\Components\RichEditor::make('additional_content')
                        ->required()
                        ->columnSpanFull(),
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
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListAdditionalContents::route('/'),
            'create' => Pages\CreateAdditionalContent::route('/create'),
            'edit' => Pages\EditAdditionalContent::route('/{record}/edit'),
        ];
    }
}
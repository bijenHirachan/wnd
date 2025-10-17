<?php

namespace App\Filament\Resources\FoodItems\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;

class FoodItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->label('Name')->required()->maxLength(255),
                Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->placeholder('Select a category')
                    ->columnSpanFull(),
                Textarea::make('description')->label('Description')->required(),
                TextInput::make('price')->label('Price')->required()->numeric()->minValue(0),
                FileUpload::make('image_url')->label('Image')->disk('public')->visibility('public')->image()->nullable(),
            ]);
    }
}

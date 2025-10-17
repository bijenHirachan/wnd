<?php

namespace App\Filament\Resources\Messages\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class MessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('email')
                    ->label('Email')
                    ->required()
                    ->email(),
                Textarea::make('body')
                    ->label('Message')
                    ->required()
                    ->minLength(10),
            ]);
    }
}

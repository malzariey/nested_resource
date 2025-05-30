<?php

namespace App\Filament\Resources\Users\Resources\UserItems\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
            ]);
    }
}

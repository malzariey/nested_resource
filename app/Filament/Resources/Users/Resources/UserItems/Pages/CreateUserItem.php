<?php

namespace App\Filament\Resources\Users\Resources\UserItems\Pages;

use App\Filament\Resources\Users\Resources\UserItems\UserItemResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUserItem extends CreateRecord
{
    protected static string $resource = UserItemResource::class;
}

<?php

namespace App\Filament\Resources\Users\Resources\UserItems\Pages;

use App\Filament\Resources\Users\Resources\UserItems\UserItemResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUserItem extends EditRecord
{
    protected static string $resource = UserItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\Users\Resources\UserItems\Pages;

use App\Filament\Resources\Users\Resources\UserItems\UserItemResource;
use App\Filament\Resources\Users\UserResource;
use BackedEnum;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRelatedRecords;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ManageUserItems extends ManageRelatedRecords
{
    protected static string $resource = UserItemResource::class;

    protected static string $relationship = 'userItems';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $relatedResource = UserResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
            ]);
    }
}

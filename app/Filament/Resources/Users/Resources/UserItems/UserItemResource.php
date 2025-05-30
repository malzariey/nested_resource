<?php

namespace App\Filament\Resources\Users\Resources\UserItems;

use App\Filament\Resources\Users\Resources\UserItems\Pages\CreateUserItem;
use App\Filament\Resources\Users\Resources\UserItems\Pages\EditUserItem;
use App\Filament\Resources\Users\Resources\UserItems\Pages\ManageUserItems;
use App\Filament\Resources\Users\Resources\UserItems\Schemas\UserItemForm;
use App\Filament\Resources\Users\Resources\UserItems\Tables\UserItemsTable;
use App\Filament\Resources\Users\UserResource;
use App\Models\UserItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class UserItemResource extends Resource
{
    protected static ?string $model = UserItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $parentResource = UserResource::class;

    public static function form(Schema $schema): Schema
    {
        return UserItemForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UserItemsTable::configure($table);
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
            'create' => CreateUserItem::route('/create'),
            'edit' => EditUserItem::route('/{record}/edit'),
            'userItems' => ManageUserItems::route('/'),
        ];
    }
}

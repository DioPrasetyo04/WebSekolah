<?php

namespace App\Filament\Resources\Roles\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RoleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->unique(ignoreRecord: true),
                \Filament\Forms\Components\Select::make('guard_name')
                    ->options(['web' => 'web'])
                    ->default('web')
                    ->required(),
            ]);
    }
}

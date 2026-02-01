<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AssignPermissionResource\Pages;
use BackedEnum;
use UnitEnum;
use Filament\Actions\EditAction;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use Spatie\Permission\Models\Role;

class AssignPermissionResource extends Resource
{
    protected static ?string $model = Role::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-lock-closed';

    // ✅ FIX Filament v5
    protected static string|UnitEnum|null $navigationGroup = 'Access Control';

    protected static ?string $navigationLabel = 'Assign Permission';
    protected static ?string $pluralLabel = 'Assign Permissions';
    protected static ?string $modelLabel = 'Assign Permission';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\Select::make('id')
                ->label('Role')
                ->options(Role::query()->pluck('name', 'id'))
                ->required()
                ->disabledOn('edit'),

            Forms\Components\Select::make('permissions')
                ->label('Permissions')
                ->multiple()
                ->relationship('permissions', 'name') // ✅ disarankan pakai "name" bawaan spatie
                ->preload()
                ->searchable()
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Role Name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('permissions_count')
                    ->counts('permissions')
                    ->label('Permissions Count'),

                Tables\Columns\TextColumn::make('permissions.name')
                    ->label('Permissions')
                    ->badge()
                    ->limitList(3),
            ])
            ->actions([
                EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAssignPermissions::route('/'),
            'create' => Pages\CreateAssignPermission::route('/create'),
            'edit' => Pages\EditAssignPermission::route('/{record}/edit'),
        ];
    }
}

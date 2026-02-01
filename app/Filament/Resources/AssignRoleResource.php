<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AssignRoleResource\Pages;
use App\Models\User;
use BackedEnum;
use UnitEnum; // ✅ tambah ini
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Schemas\Components\Section;

class AssignRoleResource extends Resource
{
    protected static ?string $model = User::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-users';

    protected static ?string $slug = 'assign-roles';

    protected static ?string $navigationLabel = 'Assign Role';
    protected static ?string $pluralLabel = 'Assign Roles';
    protected static ?string $modelLabel = 'Assign Role';

    // ✅ sekarang aman
    protected static string|UnitEnum|null $navigationGroup = 'Access Control';

    public static function canViewAny(): bool
    {
        return true;
    }

    public static function canCreate(): bool
    {
        return true;
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Section::make('User Account')
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('email')
                        ->label('Email address')
                        ->email()
                        ->required()
                        ->unique(ignoreRecord: true)
                        ->maxLength(255),
                    Forms\Components\TextInput::make('password')
                        ->password()
                        ->dehydrateStateUsing(fn ($state) => \Illuminate\Support\Facades\Hash::make($state))
                        ->dehydrated(fn ($state) => filled($state))
                        ->required(fn (string $operation): bool => $operation === 'create'),
                ])->columns(2),

            Section::make('Role Assignment')
                ->schema([
                    Forms\Components\Select::make('roles')
                        ->label('Roles')
                        ->multiple()
                        ->relationship('roles', 'name')
                        ->preload()
                        ->searchable()
                        ->required(),
                ]),

            Section::make('Profile Details')
                ->schema([
                    Forms\Components\TextInput::make('no_telephone')
                        ->tel()
                        ->maxLength(20),
                    Forms\Components\FileUpload::make('photo')
                        ->image()
                        ->directory('users/photos')
                        ->avatar(),
                    Forms\Components\Toggle::make('is_active')
                        ->default(true)
                        ->required(),
                ])->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('User Name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('roles.name')
                    ->label('Roles')
                    ->badge()
                    ->limitList(3),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->actions([
                EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAssignRoles::route('/'),
            'create' => Pages\CreateAssignRole::route('/create'),
            'edit' => Pages\EditAssignRole::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources\AssignPermissionResource\Pages;

use App\Filament\Resources\AssignPermissionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAssignPermissions extends ListRecords
{
    protected static string $resource = AssignPermissionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\AssignPermissionResource\Pages;

use App\Filament\Resources\AssignPermissionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAssignPermission extends EditRecord
{
    protected static string $resource = AssignPermissionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

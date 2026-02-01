<?php

namespace App\Filament\Resources\AssignRoleResource\Pages;

use App\Filament\Resources\AssignRoleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAssignRole extends EditRecord
{
    protected static string $resource = AssignRoleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

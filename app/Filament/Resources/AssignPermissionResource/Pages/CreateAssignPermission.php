<?php

namespace App\Filament\Resources\AssignPermissionResource\Pages;

use App\Filament\Resources\AssignPermissionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAssignPermission extends CreateRecord
{
    protected static string $resource = AssignPermissionResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

<?php

namespace App\Filament\Resources\AssignRoleResource\Pages;

use App\Filament\Resources\AssignRoleResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAssignRole extends CreateRecord
{
    protected static string $resource = AssignRoleResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

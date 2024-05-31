<?php

namespace App\Filament\Resources\ProxyResource\Pages;

use App\Filament\Resources\ProxyResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProxy extends CreateRecord
{
    protected static string $resource = ProxyResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

<?php

namespace App\Filament\Resources\ExamsDetailsResource\Pages;

use App\Filament\Resources\ExamsDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateExamsDetails extends CreateRecord
{
    protected static string $resource = ExamsDetailsResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

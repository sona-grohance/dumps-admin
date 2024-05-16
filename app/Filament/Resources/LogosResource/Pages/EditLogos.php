<?php

namespace App\Filament\Resources\LogosResource\Pages;

use App\Filament\Resources\LogosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLogos extends EditRecord
{
    protected static string $resource = LogosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

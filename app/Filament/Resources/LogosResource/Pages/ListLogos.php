<?php

namespace App\Filament\Resources\LogosResource\Pages;

use App\Filament\Resources\LogosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLogos extends ListRecords
{
    protected static string $resource = LogosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

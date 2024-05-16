<?php

namespace App\Filament\Resources\ExamsDetailsResource\Pages;

use App\Filament\Resources\ExamsDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExamsDetails extends ListRecords
{
    protected static string $resource = ExamsDetailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

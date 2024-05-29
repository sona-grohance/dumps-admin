<?php

namespace App\Filament\Resources\ExamServiceResource\Pages;

use App\Filament\Resources\ExamServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExamServices extends ListRecords
{
    protected static string $resource = ExamServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

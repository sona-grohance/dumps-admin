<?php

namespace App\Filament\Resources\ExamPassingReportsResource\Pages;

use App\Filament\Resources\ExamPassingReportsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExamPassingReports extends ListRecords
{
    protected static string $resource = ExamPassingReportsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

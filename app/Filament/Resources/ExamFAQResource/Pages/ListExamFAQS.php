<?php

namespace App\Filament\Resources\ExamFAQResource\Pages;

use App\Filament\Resources\ExamFAQResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExamFAQS extends ListRecords
{
    protected static string $resource = ExamFAQResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

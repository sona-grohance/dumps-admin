<?php

namespace App\Filament\Resources\ExamPassingReportsResource\Pages;

use App\Filament\Resources\ExamPassingReportsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateExamPassingReports extends CreateRecord
{
    protected static string $resource = ExamPassingReportsResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

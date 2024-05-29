<?php

namespace App\Filament\Resources\ExamFAQResource\Pages;

use App\Filament\Resources\ExamFAQResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateExamFAQ extends CreateRecord
{
    protected static string $resource = ExamFAQResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

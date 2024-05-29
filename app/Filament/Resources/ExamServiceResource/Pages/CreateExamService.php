<?php

namespace App\Filament\Resources\ExamServiceResource\Pages;

use App\Filament\Resources\ExamServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateExamService extends CreateRecord
{
    protected static string $resource = ExamServiceResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

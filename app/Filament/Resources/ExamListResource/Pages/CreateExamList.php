<?php

namespace App\Filament\Resources\ExamListResource\Pages;

use App\Filament\Resources\ExamListResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateExamList extends CreateRecord
{
    protected static string $resource = ExamListResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

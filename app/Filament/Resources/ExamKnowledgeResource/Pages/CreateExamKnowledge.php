<?php

namespace App\Filament\Resources\ExamKnowledgeResource\Pages;

use App\Filament\Resources\ExamKnowledgeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateExamKnowledge extends CreateRecord
{
    protected static string $resource = ExamKnowledgeResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

<?php

namespace App\Filament\Resources\ExamKnowledgeResource\Pages;

use App\Filament\Resources\ExamKnowledgeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExamKnowledge extends ListRecords
{
    protected static string $resource = ExamKnowledgeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

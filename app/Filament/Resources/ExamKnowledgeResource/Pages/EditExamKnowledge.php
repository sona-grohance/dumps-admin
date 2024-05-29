<?php

namespace App\Filament\Resources\ExamKnowledgeResource\Pages;

use App\Filament\Resources\ExamKnowledgeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamKnowledge extends EditRecord
{
    protected static string $resource = ExamKnowledgeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

<?php

namespace App\Filament\Resources\ExamSuccessStoryResource\Pages;

use App\Filament\Resources\ExamSuccessStoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamSuccessStory extends EditRecord
{
    protected static string $resource = ExamSuccessStoryResource::class;

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

<?php

namespace App\Filament\Resources\ExamSuccessStoryResource\Pages;

use App\Filament\Resources\ExamSuccessStoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateExamSuccessStory extends CreateRecord
{
    protected static string $resource = ExamSuccessStoryResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

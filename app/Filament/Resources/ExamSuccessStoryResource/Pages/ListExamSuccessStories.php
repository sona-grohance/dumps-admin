<?php

namespace App\Filament\Resources\ExamSuccessStoryResource\Pages;

use App\Filament\Resources\ExamSuccessStoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExamSuccessStories extends ListRecords
{
    protected static string $resource = ExamSuccessStoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

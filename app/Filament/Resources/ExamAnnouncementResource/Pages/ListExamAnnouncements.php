<?php

namespace App\Filament\Resources\ExamAnnouncementResource\Pages;

use App\Filament\Resources\ExamAnnouncementResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExamAnnouncements extends ListRecords
{
    protected static string $resource = ExamAnnouncementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

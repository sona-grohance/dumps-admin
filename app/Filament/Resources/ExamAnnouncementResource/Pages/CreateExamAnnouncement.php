<?php

namespace App\Filament\Resources\ExamAnnouncementResource\Pages;

use App\Filament\Resources\ExamAnnouncementResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateExamAnnouncement extends CreateRecord
{
    protected static string $resource = ExamAnnouncementResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

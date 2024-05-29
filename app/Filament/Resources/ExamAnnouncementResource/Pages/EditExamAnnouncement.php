<?php

namespace App\Filament\Resources\ExamAnnouncementResource\Pages;

use App\Filament\Resources\ExamAnnouncementResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamAnnouncement extends EditRecord
{
    protected static string $resource = ExamAnnouncementResource::class;

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

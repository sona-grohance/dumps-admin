<?php

namespace App\Filament\Resources\ExamPassingReportsResource\Pages;

use App\Filament\Resources\ExamPassingReportsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamPassingReports extends EditRecord
{
    protected static string $resource = ExamPassingReportsResource::class;

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

<?php

namespace App\Filament\Resources\ExamFAQResource\Pages;

use App\Filament\Resources\ExamFAQResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamFAQ extends EditRecord
{
    protected static string $resource = ExamFAQResource::class;

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

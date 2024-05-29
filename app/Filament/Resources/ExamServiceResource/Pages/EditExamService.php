<?php

namespace App\Filament\Resources\ExamServiceResource\Pages;

use App\Filament\Resources\ExamServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamService extends EditRecord
{
    protected static string $resource = ExamServiceResource::class;

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

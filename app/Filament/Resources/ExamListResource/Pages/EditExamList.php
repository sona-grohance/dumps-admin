<?php

namespace App\Filament\Resources\ExamListResource\Pages;

use App\Filament\Resources\ExamListResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamList extends EditRecord
{
    protected static string $resource = ExamListResource::class;

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

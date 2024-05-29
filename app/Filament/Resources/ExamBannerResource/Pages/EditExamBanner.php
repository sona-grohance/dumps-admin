<?php

namespace App\Filament\Resources\ExamBannerResource\Pages;

use App\Filament\Resources\ExamBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamBanner extends EditRecord
{
    protected static string $resource = ExamBannerResource::class;

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

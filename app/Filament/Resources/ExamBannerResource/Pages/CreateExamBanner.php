<?php

namespace App\Filament\Resources\ExamBannerResource\Pages;

use App\Filament\Resources\ExamBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateExamBanner extends CreateRecord
{
    protected static string $resource = ExamBannerResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

<?php

namespace App\Filament\Resources\ExamBannerResource\Pages;

use App\Filament\Resources\ExamBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExamBanners extends ListRecords
{
    protected static string $resource = ExamBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

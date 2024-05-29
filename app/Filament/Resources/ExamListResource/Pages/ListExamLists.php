<?php

namespace App\Filament\Resources\ExamListResource\Pages;

use App\Filament\Resources\ExamListResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExamLists extends ListRecords
{
    protected static string $resource = ExamListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

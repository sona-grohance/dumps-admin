<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class ExamWidget extends Widget
{
    protected static string $view = 'filament.widgets.exam-widget';
    protected function getViewData(): array
    {
        return [
            'links' => [
                [
                    'label' => 'View Exam Details',
                    'url' => url('http://127.0.0.1:8000/admin/exams-details'),
                ],
            ],
        ];
    }
}

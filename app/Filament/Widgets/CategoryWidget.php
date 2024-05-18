<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class CategoryWidget extends Widget
{
    protected static string $view = 'filament.widgets.category-widget';
    protected function getViewData(): array
    {
        return [
            'links' => [
                [
                    'label' => 'View Category',
                    'url' => url('http://127.0.0.1:8000/admin/categories'),
                ],
            ],
        ];
    }
}

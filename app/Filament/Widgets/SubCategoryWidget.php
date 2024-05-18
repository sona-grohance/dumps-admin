<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class SubCategoryWidget extends Widget
{
    protected static string $view = 'filament.widgets.sub-category-widget';

   
    protected function getViewData(): array
    {
        return [
            'links' => [
                [
                    'label' => 'View Sub Category',
                    'url' => url('http://127.0.0.1:8000/admin/subcategories'),
                ],
            ],
        ];
    }
}

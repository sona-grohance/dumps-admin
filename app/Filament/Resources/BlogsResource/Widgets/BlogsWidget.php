<?php

namespace App\Filament\Resources\BlogsResource\Widgets;

use Filament\Widgets\Widget;

class BlogsWidget extends Widget
{
    protected static string $view = 'filament.resources.blogs-resource.widgets.blogs-widget';
    protected function getViewData(): array
    {
        return [
            'links' => [
                [
                    'label' => 'View Blogs',
                    'url' => url('http://127.0.0.1:8000/admin/blogs'),
                ],
            ],
        ];
    }
}

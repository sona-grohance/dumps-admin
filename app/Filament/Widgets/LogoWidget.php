<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class LogoWidget extends Widget
{
    protected static string $view = 'filament.widgets.logo-widget';
    protected function getViewData(): array
    {
        return [
            'links' => [
                [
                    'label' => 'View Logos',
                    'url' => url('http://127.0.0.1:8000/admin/logos'),
                ],
            ],
        ];
    }
}

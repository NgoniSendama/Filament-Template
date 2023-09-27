<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use App\Models\Contact;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Messages', Contact::count()),
            Card::make('Blogs', Blog::count()),
        ];
    }
}

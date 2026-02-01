<?php

namespace App\Livewire;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', \App\Models\User::count())
                ->description('Registered users')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('success'),
            Stat::make('Total Posts', \App\Models\Post::count())
                ->description('Blog posts')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('primary'),
            Stat::make('Total Categories', \App\Models\Category::count())
                ->description('Active categories')
                ->descriptionIcon('heroicon-m-tag')
                ->color('warning'),
        ];
    }
}

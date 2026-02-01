<?php

namespace App\Livewire;

use Filament\Widgets\ChartWidget;

class PostsChart extends ChartWidget
{
    protected ?string $heading = 'Posts Chart';

    protected function getData(): array
    {
        $data = \App\Models\Post::selectRaw('count(*) as count, MONTH(created_at) as month')
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->get()
            ->pluck('count', 'month')
            ->toArray();

        // Fill missing months with 0
        $counts = [];
        $labels = [];
        for ($m = 1; $m <= 12; $m++) {
            $counts[] = $data[$m] ?? 0;
            $labels[] = date('M', mktime(0, 0, 0, $m, 1));
        }

        return [
            'datasets' => [
                [
                    'label' => 'Blog Posts (' . date('Y') . ')',
                    'data' => $counts,
                    'fill' => 'start',
                    'borderColor' => '#3b82f6',
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}

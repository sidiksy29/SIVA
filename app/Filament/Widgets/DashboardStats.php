<?php

namespace App\Filament\Widgets;

use App\Models\Customer;
use App\Models\AlatUkur;
use App\Models\ValidasiAlatUkur;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class DashboardStats extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Customers', Customer::count())
                ->description('Jumlah Customer')
                ->descriptionIcon('heroicon-o-users')
                ->color('primary'),
            Card::make('Total Alat Ukur', AlatUkur::count())
                ->description('Jumlah Alat Ukur')
                ->descriptionIcon('heroicon-o-cube')
                ->color('primary'),
            Card::make('Total Validasi', ValidasiAlatUkur::count())
                ->description('Jumlah Validasi')
                ->descriptionIcon('heroicon-o-check-circle')
                ->color('primary'),
        ];
    }
}

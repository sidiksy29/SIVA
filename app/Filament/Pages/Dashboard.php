<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
// Suggested code may be subject to a license. Learn more: ~LicenseLog:3832346515.
use App\Filament\Widgets\DashboardStats;
use Filament\Pages\Dashboard as BaseDashboard;


class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'filament.pages.dashboard';

    
    protected function getHeaderWidgets(): array
    {
        return [
// Suggested code may be subject to a license. Learn more: ~LicenseLog:143622061.
            DashboardStats::class,
        ];
    }

}

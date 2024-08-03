<?php

namespace App\Filament\Resources\ScheduleValidasiResource\Pages;

use App\Filament\Resources\ScheduleValidasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListScheduleValidasis extends ListRecords
{
    protected static string $resource = ScheduleValidasiResource::class;

    protected static ?string $title = 'Schedule Validasi';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

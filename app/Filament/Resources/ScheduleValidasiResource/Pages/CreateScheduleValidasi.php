<?php

namespace App\Filament\Resources\ScheduleValidasiResource\Pages;

use App\Filament\Resources\ScheduleValidasiResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateScheduleValidasi extends CreateRecord
{
    protected function getRedirectUrl(): string
    {
// Suggested code may be subject to a license. Learn more: ~LicenseLog:1863054692.
       return $this->getResource()::getUrl('index');

        
    }
    protected static string $resource = ScheduleValidasiResource::class;
}

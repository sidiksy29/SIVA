<?php

namespace App\Filament\Resources\ScheduleValidasiResource\Pages;

use App\Filament\Resources\ScheduleValidasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditScheduleValidasi extends EditRecord
{
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected static string $resource = ScheduleValidasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

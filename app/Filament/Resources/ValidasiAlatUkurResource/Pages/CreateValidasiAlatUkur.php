<?php

namespace App\Filament\Resources\ValidasiAlatUkurResource\Pages;

use App\Filament\Resources\ValidasiAlatUkurResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateValidasiAlatUkur extends CreateRecord
{
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected static string $resource = ValidasiAlatUkurResource::class;
}

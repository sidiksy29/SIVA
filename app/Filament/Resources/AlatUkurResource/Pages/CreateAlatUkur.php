<?php

namespace App\Filament\Resources\AlatUkurResource\Pages;

use App\Filament\Resources\AlatUkurResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAlatUkur extends CreateRecord
{
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected static string $resource = AlatUkurResource::class;
}

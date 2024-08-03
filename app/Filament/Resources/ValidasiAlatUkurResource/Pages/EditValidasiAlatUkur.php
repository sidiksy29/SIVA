<?php

namespace App\Filament\Resources\ValidasiAlatUkurResource\Pages;

use App\Filament\Resources\ValidasiAlatUkurResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditValidasiAlatUkur extends EditRecord
{
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected static string $resource = ValidasiAlatUkurResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

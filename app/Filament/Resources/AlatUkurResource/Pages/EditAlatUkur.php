<?php

namespace App\Filament\Resources\AlatUkurResource\Pages;

use App\Filament\Resources\AlatUkurResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAlatUkur extends EditRecord
{
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected static string $resource = AlatUkurResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

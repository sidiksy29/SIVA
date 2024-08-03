<?php

namespace App\Filament\Resources\ValidasiAlatUkurResource\Pages;

use App\Filament\Resources\ValidasiAlatUkurResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListValidasiAlatUkurs extends ListRecords
{
    protected static string $resource = ValidasiAlatUkurResource::class;

    protected static ?string $title = 'Validasi Alat Ukur';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

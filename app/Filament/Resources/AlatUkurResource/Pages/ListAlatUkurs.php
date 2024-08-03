<?php

namespace App\Filament\Resources\AlatUkurResource\Pages;

use App\Filament\Resources\AlatUkurResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlatUkurs extends ListRecords
{
    protected static string $resource = AlatUkurResource::class;

    protected static ?string $title = 'Alat Ukur';
    

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

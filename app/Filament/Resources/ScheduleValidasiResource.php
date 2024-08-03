<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ScheduleValidasiResource\Pages;
use App\Filament\Resources\ScheduleValidasiResource\RelationManagers;
use App\Models\ScheduleValidasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Carbon\Carbon;

class ScheduleValidasiResource extends Resource
{
    protected static ?string $model = ScheduleValidasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    protected static ?string $navigationLabel = 'Schedule Validasi'; 	

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
// Suggested code may be subject to a license. Learn more: ~LicenseLog:1659742594.
                    Forms\Components\Select::make('alat_ukur_id')
                        ->relationship('alatUkur', 'assy_number')
                        ->required(),
                    Forms\Components\DatePicker::make('validation_date')
                        ->required()
// Suggested code may be subject to a license. Learn more: ~LicenseLog:300792306.
                        ->date()
                        ->default(Carbon::now()),
                    Forms\Components\DatePicker::make('revalidation_date')
// Suggested code may be subject to a license. Learn more: ~LicenseLog:367648565.
                        ->required()
                        ->default(Carbon::now()->addMonths(3)),

                      
                        
                        
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('alatUkur.assy_number')->label('Assy Number'),
                Tables\Columns\TextColumn::make('alatUkur.assy_name')->label('Assy Name'),
                Tables\Columns\TextColumn::make('alatUkur.registrasi_number')->label('Registrasi Number'),

                Tables\Columns\TextColumn::make('validation_date')->date(),
                Tables\Columns\TextColumn::make('revalidation_date')->date(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListScheduleValidasis::route('/'),
            'create' => Pages\CreateScheduleValidasi::route('/create'),
            'edit' => Pages\EditScheduleValidasi::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlatUkurResource\Pages;
use App\Filament\Resources\AlatUkurResource\RelationManagers;
use App\Models\AlatUkur;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AlatUkurResource extends Resource
{
    protected static ?string $model = AlatUkur::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';

    protected static ?string $navigationLabel = 'Alat Ukur';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('assy_number')->required(),
                Forms\Components\TextInput::make('assy_name')->required(),
                Forms\Components\Select::make('customer_id')->relationship('customer', 'name')->required(),
                Forms\Components\TextInput::make('registrasi_number')->required()->unique(),
                Forms\Components\DatePicker::make('release_date')->required(),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('assy_number'),
                Tables\Columns\TextColumn::make('assy_name'),
                Tables\Columns\TextColumn::make('customer.name'),
                Tables\Columns\TextColumn::make('registrasi_number'),
// Suggested code may be subject to a license. Learn more: ~LicenseLog:2082300309.
                Tables\Columns\TextColumn::make('release_date')->date(),

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
            'index' => Pages\ListAlatUkurs::route('/'),
            'create' => Pages\CreateAlatUkur::route('/create'),
            'edit' => Pages\EditAlatUkur::route('/{record}/edit'),
        ];
    }
}

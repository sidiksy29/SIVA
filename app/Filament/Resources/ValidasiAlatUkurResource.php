<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ValidasiAlatUkurResource\Pages;
use App\Filament\Resources\ValidasiAlatUkurResource\RelationManagers;
use App\Models\ValidasiAlatUkur;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ValidasiAlatUkurResource extends Resource
{
    protected static ?string $model = ValidasiAlatUkur::class;

    protected static ?string $navigationIcon = 'heroicon-o-check-circle';

    protected static ?string $navigationLabel = 'Validasi Alat Ukur'; 

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\Select::make('alat_ukur_id')
                    ->relationship('alatUkur', 'assy_number')
                    ->required(),
                Forms\Components\DatePicker::make('validation_date')->required(),
                Forms\Components\FileUpload::make('upload_file_validation')
                    ->required()
                    ->disk('public')
                    ->directory('uploads/validasi')
                    ->visibility('public'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('alatUkur.assy_number')->label('Assy Number'),
                Tables\Columns\TextColumn::make('alatUkur.assy_name')->label('Assy Name'),
                Tables\Columns\TextColumn::make('alatUkur.customer.name'),
                Tables\Columns\TextColumn::make('validation_date')->date(),
                Tables\Columns\TextColumn::make('upload_file_validation')
                    ->url(fn ($record) => asset('storage/'.$record->upload_file_validation))
                    ->label('File Validation'),
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
            'index' => Pages\ListValidasiAlatUkurs::route('/'),
            'create' => Pages\CreateValidasiAlatUkur::route('/create'),
            'edit' => Pages\EditValidasiAlatUkur::route('/{record}/edit'),
        ];
    }
}

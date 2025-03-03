<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DemisionerResource\Pages;
use App\Filament\Resources\DemisionerResource\RelationManagers;
use App\Models\Demisioner;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DemisionerResource extends Resource
{
    protected static ?string $model = Demisioner::class;
    protected static ?string $navigationGroup = 'Members';

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->length(9)->required()->columnSpan(2),
                FileUpload::make('image')->image()->disk('public')->directory('demisioners')->required()->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->label('Angkatan'),
                ImageColumn::make('image')->defaultImageUrl(url('images/dummy/demisioners/dummy-demisioner.png')),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListDemisioners::route('/'),
//            'create' => Pages\CreateDemisioner::route('/create'),
//            'edit' => Pages\EditDemisioner::route('/{record}/edit'),
        ];
    }
}

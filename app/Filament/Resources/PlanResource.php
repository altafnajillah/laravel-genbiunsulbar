<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlanResource\Pages;
use App\Filament\Resources\PlanResource\RelationManagers;
use App\Models\Plan;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PlanResource extends Resource
{
    protected static ?string $model = Plan::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->required()->columnSpan(2),
            Forms\Components\DatePicker::make('held_at')->required()->columnSpan(2),
            Forms\Components\Repeater::make('galleries')
                ->relationship()
                ->schema([
                    Forms\Components\Radio::make('type')
                        ->options([
                            'image' => 'Image',
                            'video' => 'Video',
                        ])
                        ->inline()
                        ->reactive()
                        ->required(),

                    Forms\Components\FileUpload::make('image')
                        ->image()
                        ->directory('galleries')
                        ->visibility('public')
                        ->required()
                        ->visible(fn (callable $get) => $get('type') === 'image'),

                    Forms\Components\TextInput::make('video')
                        ->url()
                        ->required()
                        ->visible(fn (callable $get) => $get('type') === 'video')
                        ->placeholder('Masukkan link video YouTube'),
                ])->columnSpan(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable(),
                TextColumn::make('held_at')->sortable()->searchable()->formatStateUsing(fn($state) => Carbon::parse($state)->translatedFormat('j F Y')),
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
            'index' => Pages\ListPlans::route('/'),
            'create' => Pages\CreatePlan::route('/create'),
            'edit' => Pages\EditPlan::route('/{record}/edit'),
        ];
    }
}

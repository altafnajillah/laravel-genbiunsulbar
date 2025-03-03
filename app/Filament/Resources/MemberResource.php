<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MemberResource\Pages;
use App\Filament\Resources\MemberResource\RelationManagers;
use App\Models\Member;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;
    protected static ?string $navigationGroup = 'Members';
    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required()->columnSpan(2),
                Forms\Components\TextInput::make('nim')->required()->label('NIM'),
                Forms\Components\TextInput::make('prodi')->required(),
                Forms\Components\Select::make('departemen')
                    ->required()
                    ->options([
                        0 => 'Inti',
                        1 => 'Pendidikan',
                        2 => 'Publikasi dan Sosialisasi',
                        3 => 'Kewirausahaan',
                        4 => 'Lingkungan Hidup',
                        5 => 'Pengabdian Masyarakat'
                    ]),
                Forms\Components\Select::make('position')
                    ->label('Jabatan')
                    ->required()
                    ->options([
                        0 => 'Ketua',
                        1 => 'Sekretaris',
                        3 => 'Bendahara',
                        4 => 'Anggota'
                    ]),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('members')
                    ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('nim')->searchable()->sortable()->label('NIM'),
                Tables\Columns\TextColumn::make('prodi')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('departemen')->searchable()->sortable()
                    ->formatStateUsing(fn($state) => $state == 0 ? "Inti" :
                        ($state == 1 ? "Pendidikan" :
                            ($state == 2 ? "Publikasi dan Sosialisasi" :
                                ($state == 3 ? "Kewirausahaan" :
                                    ($state == 4 ? "Lingkungan Hidup" : "Pengabdian Masyarakat")
                                )
                            )
                        )
                    ),
                Tables\Columns\TextColumn::make('position')->searchable()->sortable()->label('Jabatan')
                    ->formatStateUsing(fn($state) => $state == 0 ? "Ketua" :
                        ($state == 1 ? "Sekretaris" :
                            ($state == 2 ? "Bendahara" : "Anggota")
                        )
                    ),
                Tables\Columns\ImageColumn::make('image')
                    ->defaultImageUrl(url('/storage/members/dummy-avatar.jpg'))
                    ->square(),
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
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }
}

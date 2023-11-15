<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PropertyResource\Pages;
use App\Models\Property;
use App\Models\RoomType;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PropertyResource extends Resource
{
    protected static ?string $model = Property::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Tabs::make('Label')
                    ->tabs([
                        Tabs\Tab::make('Property')
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->label('Name of Property'),

                                Forms\Components\TextInput::make('city')
                                    ->label('City'),

                                FileUpload::make('image')
                                    ->label('Upload Image')
                                    ->preserveFilenames(),
                            ]),
                        Tabs\Tab::make('Rooms by Type')
                            ->schema([
                                Forms\Components\Repeater::make('rooms')
                                    ->relationship()
                                    ->defaultItems(0)
                                    ->schema([
                                        Select::make('room_type_id')
                                            ->label('Room')
                                            ->options(RoomType::all()->pluck('name', 'id' )),

                                        Forms\Components\TextInput::make('number_of_rooms')
                                            ->label('How many rooms do you have of this type?'),

                                        Forms\Components\Repeater::make('prices')
                                            ->relationship()
                                            ->defaultItems(0)
                                            ->schema([
                                                DatePicker::make('start_at'),
                                                DatePicker::make('end_at'),
                                                Forms\Components\TextInput::make('price'),
                                            ])->columns(3),
                                    ]),
                            ]),
                    ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),

                Tables\Columns\TextColumn::make('name')
                    ->label('Name of Property')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('city')
                    ->label('City')
                    ->sortable()
                    ->searchable(),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProperties::route('/'),
            'create' => Pages\CreateProperty::route('/create'),
            'edit' => Pages\EditProperty::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BandResource\Pages;
use App\Filament\Resources\BandResource\RelationManagers;
use App\Models\Band;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BandResource extends Resource
{
    protected static ?string $model = Band::class;
    protected $guarded = [];  

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('headliner')
                    ->required(),
                Forms\Components\FileUpload::make('photo')
                    ->preserveFilenames()
                    ->image()
                    ->required()
                    ->directory('images/bandphotos/')
                    ->visibility('public'),
                Forms\Components\Select::make('day')
                    ->required()
                    ->options([
                        'thursday' => 'Thursday',
                        'friday' => 'Friday',
                        'saturday' => 'Saturday',
                        'sunday' => 'Sunday',
                    ]),
                Forms\Components\TextInput::make('year')
                    ->required(),
                Forms\Components\TextInput::make('youtube')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('twitter')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('instagram')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('facebook')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('bandcamp')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('bio')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\IconColumn::make('headliner')
                    ->boolean(),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('photo'),
                Tables\Columns\TextColumn::make('day'),
                Tables\Columns\TextColumn::make('year'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListBands::route('/'),
            'create' => Pages\CreateBand::route('/create'),
            'view' => Pages\ViewBand::route('/{record}'),
            'edit' => Pages\EditBand::route('/{record}/edit'),
        ];
    }    
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryActualiteResource\Pages;
use App\Filament\Resources\CategoryActualiteResource\RelationManagers;
use App\Filament\Resources\CategoryActualiteResource\RelationManagers\ActualitesRelationManager;
use App\Models\CategoryActualite;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Closure;
use Illuminate\Support\Str;

use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;


class CategoryActualiteResource extends Resource
{
    protected static ?string $model = CategoryActualite::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationGroup = 'Actualités'  ; 

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('titre')
                    ->required()
                    ->maxLength(2048)
                    ->reactive()
                    ->afterStateUpdated(function (\Filament\Forms\Get $get, \Filament\Forms\Set $set, ?string $state) {
                        if (! $get('is_slug_changed_manually') && filled($state)) {
                            $set('slug', Str::slug($state));
                        }
                    }),

                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(2048)
                    ->afterStateUpdated(function (\Filament\Forms\Set $set) {
                        $set('is_slug_changed_manually', true);
                    })
                    ->required(),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('titre'),
                //Tables\Columns\TextColumn::make('slug'),
                /*Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),*/
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->groupedBulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageCategoryActualites::route('/'),
        ];
    }    

    public static function getRealtions(){
       // return [ActualitesRelationManager::class];
    }
}

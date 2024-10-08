<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryPodcastResource\RelationManagers\EpisodesRelationManager;
use App\Filament\Resources\PodcastResource\Pages;
use App\Filament\Resources\PodcastResource\RelationManagers;
use App\Models\Podcast;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Tables\Columns\BooleanColumn;
use Closure;
use Illuminate\Support\Str;

use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;


class PodcastResource extends Resource
{
    protected static ?string $model = Podcast::class;

    protected static ?string $navigationIcon = 'heroicon-o-microphone';

    protected static ?string $navigationGroup = 'Podcast';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                ->schema([
                    Forms\Components\Grid::make(2)
                    ->  schema([
                
               TinyEditor::make('titre')
                ->profile('titre')
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
                }), ]),

            
                TinyEditor::make('description')
                ->profile('corps')
                ->required(),
            Forms\Components\Toggle::make('active')
                ->required(),
            Forms\Components\DatePicker::make('date_publication')
                ->required(),
                TinyEditor::make('Proprietaire')
            ->profile('titre')
                ->required(),

            ])->columnSpan(8),
    
            Forms\Components\Card::make()
            ->schema([
                Forms\Components\FileUpload::make('cover'),
                Forms\Components\Select::make('categories')
                ->multiple()
                ->relationship('categories','titre')
                ->required(),
            ])->columnSpan(4),

])->columns(12);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('titre')->searchable(),
                //Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('cover'),
                //Tables\Columns\TextColumn::make('description'),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                //Tables\Columns\TextColumn::make('date_publication')
                  //  ->dateTime(),
                Tables\Columns\TextColumn::make('Proprietaire')->searchable(),
                //Tables\Columns\TextColumn::make('created_at')
                  //  ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->groupedBulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
      //      EpisodesRelationManager::class
        ];
    }
    
    public static function getPages(): array
    {
        return [
           
            'index' => Pages\ListPodcasts::route('/'),
            /*'create' => Pages\CreatePodcast::route('/create'),
            'view' => Pages\ViewPodcast::route('/{record}'),
            'edit' => Pages\EditPodcast::route('/{record}/edit'),*/
        ];
    }    
}

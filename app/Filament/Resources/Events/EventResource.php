<?php

namespace App\Filament\Resources\Events;

use App\Filament\Forms\Components\CmsGrid;
use App\Filament\Forms\Fields\MediablePicker;
use App\Filament\Forms\Schemas\ContentBlocks;
use App\Filament\Forms\Schemas\TitleSlug;
use App\Filament\Resources\Events\EventResource\Pages;
use App\Filament\Resources\Events\EventResource\RelationManagers;
use App\Models\Event;
use App\Models\EventCategory;
use Awcodes\Curator\Components\Tables\CuratorColumn;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use FilamentTiptapEditor\Enums\TiptapOutput;
use FilamentTiptapEditor\TiptapEditor;
use RalphJSmit\Filament\SEO\SEO;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = null;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            CmsGrid::make([
                Forms\Components\Tabs::make('Tabs')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('General')
                            ->schema([
                                TitleSlug::make(static::$model)
                                    ->columnSpanFull(),
                                Forms\Components\Textarea::make('summary')
                                    ->rows(3)
                                    ->required(),
                                TiptapEditor::make('content')
                                    ->profile('default')
                                    ->maxWidth('full')
                                    ->output(TiptapOutput::Json)
                                    ->columnSpanFull(),
                                Forms\Components\Builder::make('content_blocks')
                                    ->addActionLabel('Add Content Block')
                                    ->labelBetweenItems('Insert Content Block')
                                    ->label(false)
                                    ->collapsible()
                                    ->collapsed()
                                    ->blockNumbers(false)
                                    ->columnSpanFull()
                                    ->blocks(ContentBlocks::make())
                                    ->collapsible()
                                    ->collapsed(true),
                            ]),
                        Forms\Components\Tabs\Tab::make('Featured Image')
                            ->schema([
                                MediablePicker::make("featuredImage", "featured")
                                    ->label(false)
                                    ->columnSpanFull(),
                            ]),
                        Forms\Components\Tabs\Tab::make('SEO')
                            ->schema([
                                SEO::make(['title','description']),
                                MediablePicker::make("seoImage", "seo")->columnSpanFull(),
                            ]),
                    ])
            ],[
                Forms\Components\Section::make([
                    Forms\Components\Select::make('event_category_id')
                        ->label('Category')
                        ->options(EventCategory::all()->pluck('title','id')),
                    Forms\Components\DatePicker::make('date')
                        ->default(Carbon::now())
                        ->required(),
                    Forms\Components\TimePicker::make('start_time')
                        ->label('Start Time')
                        ->seconds(false)
                        ->live(),
                    Forms\Components\TimePicker::make('end_time')
                        ->label('End Time')
                        ->seconds(false)
                        ->visible(fn(Forms\Get $get) => $get('start_time')),
                    Forms\Components\Toggle::make('is_visible')
                        ->label('Visible')
                        ->default(true)
                        ->columnSpanFull(),
                ])
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('date','desc')
            ->columns([
                CuratorColumn::make('featuredImage.media')
                    ->label('Featured Image')
                    ->size(80),
                Tables\Columns\TextColumn::make('eventCategory.title')
                    ->label('Category')
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('start_time'),
                Tables\Columns\TextColumn::make('end_time'),
                Tables\Columns\IconColumn::make('is_visible')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => EventResource\Pages\ListEvents::route('/'),
            'create' => EventResource\Pages\CreateEvent::route('/create'),
            'edit' => EventResource\Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}

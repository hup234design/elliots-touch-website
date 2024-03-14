<?php

namespace App\Filament\Resources\Events;

use App\Filament\Forms\Schemas\TitleSlug;
use App\Filament\Resources\Events\EventCategoryResource\Pages;
use App\Filament\Resources\Events\EventCategoryResource\RelationManagers;
use App\Models\EventCategory;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EventCategoryResource extends Resource
{
    protected static ?string $model = EventCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TitleSlug::make(static::$model)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order','asc')
            ->reorderable('sort_order')
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('events_count')
                    ->label('Events')
                    ->counts('events'),
                TextColumn::make('created_at')->dateTime()->label('Created'),
                TextColumn::make('updated_at')->since()->label('Last Updated'),
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

    public static function getPages(): array
    {
        return [
            'index' => EventCategoryResource\Pages\ManageEventCategories::route('/'),
        ];
    }
}

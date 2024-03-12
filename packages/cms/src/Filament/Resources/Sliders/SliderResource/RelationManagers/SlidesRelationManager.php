<?php

namespace Hup234design\Cms\Filament\Resources\Sliders\SliderResource\RelationManagers;

use Awcodes\Curator\Components\Tables\CuratorColumn;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Resources\RelationManagers\RelationManager;
use Hup234design\Cms\Filament\Forms\Fields\MediablePicker;

class SlidesRelationManager extends RelationManager
{
    protected static string $relationship = 'slides';

    protected static ?string $recordTitleAttribute = 'heading';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('eyebrow')
                    ->nullable()
                    ->maxLength(255),
                TextInput::make('heading')
                    ->required()
                    ->maxLength(255),
                Textarea::make('text')
                    ->nullable()
                    ->rows(3),
                MediablePicker::make("headerImage", "header")
                    ->label(false)
                    ->columnSpanFull(),
            ])
            ->columns(1);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                CuratorColumn::make('headerImage.media')
                    ->label('Image')
                    ->size(80),
                TextColumn::make('eyebrow'),
                TextColumn::make('heading'),
                TextColumn::make('created_at')->dateTime()->label('Created'),
                TextColumn::make('updated_at')->since()->label('Last Updated'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                CreateAction::make()
                    ->slideOver(),
            ])
            ->actions([
                EditAction::make()
                    ->slideOver(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ])
            ->defaultSort('sort_order', 'ASC')
            ->reorderable('sort_order');
    }
}

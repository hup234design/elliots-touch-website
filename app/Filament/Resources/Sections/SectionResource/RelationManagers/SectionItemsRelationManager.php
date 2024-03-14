<?php

namespace App\Filament\Resources\Sections\SectionResource\RelationManagers;

use Awcodes\Curator\Components\Tables\CuratorColumn;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use FilamentTiptapEditor\Enums\TiptapOutput;
use FilamentTiptapEditor\TiptapEditor;
use App\Filament\Forms\Fields\MediablePicker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SectionItemsRelationManager extends RelationManager
{
    protected static string $relationship = 'sectionItems';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('subtitle')
                    ->maxLength(255),
                TiptapEditor::make('content')
                    ->profile('simple')
                    ->maxWidth('full')
                    ->output(TiptapOutput::Json)
                    ->columnSpanFull(),
                Forms\Components\Section::make('Featured Image')
                    ->schema([
                        MediablePicker::make("featuredImage", "featured")->columnSpanFull(),
                    ]),
                Forms\Components\Toggle::make('is_visible')
                    ->required(),
            ])
            ->columns(1);
    }

    public function table(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order', 'asc')
            ->reorderable('sort_order')
            ->recordTitleAttribute('title')
            ->columns([
                CuratorColumn::make('featuredImage.media')
                    ->label('Featured Image')
                    ->size(80),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('subtitle'),
                Tables\Columns\ToggleColumn::make('is_visible')
                    ->label('Visible'),
                TextColumn::make('created_at')->date()->label('Created'),
                TextColumn::make('updated_at')->since()->label('Last Updated'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->slideOver(),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->slideOver(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}

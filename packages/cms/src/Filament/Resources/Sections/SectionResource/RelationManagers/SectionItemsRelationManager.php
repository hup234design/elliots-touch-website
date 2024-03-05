<?php

namespace Hup234design\Cms\Filament\Resources\Sections\SectionResource\RelationManagers;

//use App\Filament\Forms\Fields\MediablePicker;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use FilamentTiptapEditor\Enums\TiptapOutput;
use FilamentTiptapEditor\TiptapEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SectionItemsRelationManager extends RelationManager
{
    protected static string $relationship = 'section_items';

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
//                Forms\Components\Section::make('Featured Image')
//                    ->schema([
//                        MediablePicker::make("featuredImage", "featured")->columnSpanFull(),
//                    ]),
                Forms\Components\Toggle::make('is_visible')
                    ->required(),
            ])
            ->columns(1);
    }

    public function table(Table $table): Table
    {
        return $table
            //->defaultSort('sort_order', 'asc')
            //->reorderable('sort_order')
            ->recordTitleAttribute('title')
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('subtitle'),
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

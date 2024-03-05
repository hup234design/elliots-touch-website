<?php

namespace Hup234design\Cms\Filament\Resources\Pages;

use Hup234design\Cms\Filament\Forms\Schemas\BuilderBlocks;
use Hup234design\Cms\Filament\Resources\Pages\PageResource\Pages;
use Hup234design\Cms\Filament\Resources\Pages\PageResource\RelationManagers;
use Hup234design\Cms\Models\Page;
use Filament\Forms;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use FilamentTiptapEditor\Enums\TiptapOutput;
use FilamentTiptapEditor\TiptapEditor;
use Hup234design\Cms\Filament\Forms\Schemas\TitleSlug;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Pboivin\FilamentPeek\Tables\Actions\ListPreviewAction;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TitleSlug::make(static::$model)
                    ->columnSpanFull(),

                TiptapEditor::make('content')
                    ->profile('default')
                    ->output(TiptapOutput::Json)
                    ->maxContentWidth('full')
                    ->columnSpanFull(),

                Forms\Components\Builder::make('content_blocks')
                    ->columnSpanFull()
                    ->blocks([
                        ...BuilderBlocks::make(),
                        //LatestPostsBlock::blockSchema(),
                        //UpcomingEventsBlock::blockSchema(),
                        //ListBlock::blockSchema(),
                        //CardsBlock::blockSchema(),
                    ])
                    ->collapsible()
                    ->collapsed(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID'),
                TextColumn::make('title'),
                TextColumn::make('slug'),
                TextColumn::make('created_at')->dateTime()->label('Created'),
                TextColumn::make('updated_at')->since()->label('Last Updated'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                ListPreviewAction::make()->color('success'),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}

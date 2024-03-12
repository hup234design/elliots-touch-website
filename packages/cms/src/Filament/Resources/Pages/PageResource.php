<?php

namespace Hup234design\Cms\Filament\Resources\Pages;

use Hup234design\Cms\Filament\ContentBlocks\LatestPostsBlock;
use Hup234design\Cms\Filament\ContentBlocks\UpcomingEventsBlock;
use Hup234design\Cms\Filament\Forms\Components\CmsGrid;
use Hup234design\Cms\Filament\Forms\Fields\MediablePicker;
use Hup234design\Cms\Filament\Forms\Schemas\ContentBlocks;
use Hup234design\Cms\Filament\Forms\Schemas\HeaderFields;
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
use RalphJSmit\Filament\SEO\SEO;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

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
                                    ->blockNumbers(false)
                                    ->columnSpanFull()
                                    ->blocks([
                                        ...ContentBlocks::make(),
                                        LatestPostsBlock::blockSchema(),
                                        UpcomingEventsBlock::blockSchema(),
                                    ])
                                    ->collapsible()
                                    ->collapsed(true),
                            ]),
                        Forms\Components\Tabs\Tab::make('Header')
                            ->schema(
                                HeaderFields::make())
                            ->columnSpanFull(),
                        Forms\Components\Tabs\Tab::make('SEO')
                            ->schema([
                                SEO::make(['title','description']),
                                MediablePicker::make("seoImage", "seo")->columnSpanFull(),
                            ]),
                    ])
            ],[
                Forms\Components\Section::make([
                    Forms\Components\Toggle::make('is_home')
                        ->label('Home Page')
                        ->default(false)
                        ->live()
                        ->columnSpanFull(),
                    Forms\Components\Toggle::make('is_visible')
                        ->label('Visible')
                        ->default(true)
                        ->columnSpanFull()
                        ->hidden(fn(Forms\Get $get) => $get('is_home')),
                    Forms\Components\Toggle::make('display_title')
                        ->label('Display Title')
                        ->default(true)
                        ->columnSpanFull()
                ])
            ]),
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

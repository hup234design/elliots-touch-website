<?php

namespace App\Filament\Resources\PageResource\RelationManagers;

use App\Filament\Forms\Components\CmsGrid;
use App\Filament\Forms\Fields\MediablePicker;
use App\Filament\Forms\Schemas\ContentBlocks;
use App\Filament\Forms\Schemas\HeaderFields;
use App\Filament\Forms\Schemas\TitleSlug;
use App\Livewire\LatestPostsBlock;
use App\Livewire\UpcomingEventsBlock;
use App\Models\Page;
use App\Models\SubPage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use FilamentTiptapEditor\Enums\TiptapOutput;
use FilamentTiptapEditor\TiptapEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use RalphJSmit\Filament\SEO\SEO;

class SubPagesRelationManager extends RelationManager
{
    protected static string $relationship = 'subPages';

    public static function canViewForRecord(Model $ownerRecord, string $pageClass): bool
    {
        return ! $ownerRecord->is_home;
    }

    public static function getBadge(Model $ownerRecord, string $pageClass): ?string
    {
        return $ownerRecord->subPages()->count();
    }

    public function form(Form $form): Form
    {
        return $form->schema([
                Forms\Components\Tabs::make('Tabs')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('General')
                            ->schema([
                                TitleSlug::make(SubPage::class)
                                    ->columnSpanFull(),
                                TiptapEditor::make('summary')
                                    ->profile('minimal')
                                    ->output(TiptapOutput::Html)
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
                        Forms\Components\Tabs\Tab::make('SEO')
                            ->schema([
                                SEO::make(['title','description']),
                                MediablePicker::make("seoImage", "seo")->columnSpanFull(),
                            ]),
                    ])
                    ->columnSpanFull()
        ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order','asc')
            ->reorderable('sort_order')
            ->recordTitleAttribute('title')
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('slug'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->slideOver()
                    ->modalWidth('7xl'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->slideOver()
                    ->modalWidth('7xl'),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}

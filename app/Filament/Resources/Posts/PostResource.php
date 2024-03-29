<?php

namespace App\Filament\Resources\Posts;

use Awcodes\Curator\Components\Tables\CuratorColumn;
use Carbon\Carbon;
use FilamentTiptapEditor\Enums\TiptapOutput;
use FilamentTiptapEditor\TiptapEditor;
use App\Livewire\LatestPostsBlock;
use App\Livewire\UpcomingEventsBlock;
use App\Filament\Forms\Components\CmsGrid;
use App\Filament\Forms\Fields\MediablePicker;
use App\Filament\Forms\Schemas\ContentBlocks;
use App\Filament\Forms\Schemas\HeaderFields;
use App\Filament\Resources\Posts\PostResource\Pages;
use App\Filament\Resources\Posts\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use App\Filament\Forms\Schemas\TitleSlug;
use App\Models\PostCategory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use RalphJSmit\Filament\SEO\SEO;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
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
                    Forms\Components\Select::make('post_category_id')
                        ->label('Category')
                        ->options(PostCategory::all()->pluck('title','id')),
                    Forms\Components\DateTimePicker::make('published_at')
                        ->label('Publish At')
                        ->seconds(false)
                        ->default(Carbon::now())
                        ->required(),
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
            ->defaultSort('published_at','desc')
            ->columns([
                CuratorColumn::make('featuredImage.media')
                    ->label('Featured Image')
                    ->size(80),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}

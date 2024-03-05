<?php

namespace Hup234design\Cms\Filament\Pages;

use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use FilamentTiptapEditor\Enums\TiptapOutput;
use FilamentTiptapEditor\TiptapEditor;
use Hup234design\Cms\Settings\PostsSettings;

class ManagePostsSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static string $settings = PostsSettings::class;

    protected static ?string $navigationGroup = "Settings";
    protected static ?string $navigationLabel = "Posts";
    protected static ?string $title = "Settings : Posts";

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Title')
                    ->required(),
                Forms\Components\TextInput::make('slug')
                    ->label('Slug')
                    ->required(),
                TiptapEditor::make('content')
                    ->profile('simple')
                    ->output(TiptapOutput::Html)
                    ->maxContentWidth('full')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('per_page')
                    ->label('Pagination Posts per Page')
                    ->integer()
                    ->minValue(5)
                    ->required(),
                CuratorPicker::make('header_image_id')
            ])
            ->columns(1);
    }
}

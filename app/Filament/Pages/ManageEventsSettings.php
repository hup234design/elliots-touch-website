<?php

namespace App\Filament\Pages;

use App\Settings\EventsSettings;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use FilamentTiptapEditor\Enums\TiptapOutput;
use FilamentTiptapEditor\TiptapEditor;

class ManageEventsSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    protected static string $settings = EventsSettings::class;

    protected static ?string $navigationGroup = "Settings";
    protected static ?string $navigationLabel = "Events";
    protected static ?string $title = "Settings : Events";

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
                    ->label('Pagination Events per Page')
                    ->integer()
                    ->minValue(5)
                    ->required(),
                CuratorPicker::make('header_image_id')
            ])
            ->columns(1);
    }
}

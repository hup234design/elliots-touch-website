<?php

namespace Hup234design\Cms\Filament\Pages;

use Hup234design\Cms\Settings\GeneralSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use RyanChandler\FilamentNavigation\Filament\Fields\NavigationSelect;

class ManageGeneralSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = GeneralSettings::class;

    protected static ?string $navigationGroup = "Settings";
    protected static ?string $navigationLabel = "General";
    protected static ?string $title = "Settings : General";

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('site_name')
                    ->label('Site Name')
                    ->default( config('app.name'))
                    ->required(),
                Forms\Components\Toggle::make('site_active')
                    ->label('Site Active')
                    ->default(true),
                NavigationSelect::make('primary_header_menu_id')
                    ->label('Primary Header Menu'),
                NavigationSelect::make('secondary_header_menu_id')
                    ->label('Secondary Header Menu')
                    ->helperText('This will only be used if configured in site theme'),
                NavigationSelect::make('primary_footer_menu_id')
                    ->label('Primary Footer Menu'),
                NavigationSelect::make('secondary_footer_menu_id')
                    ->label('Secondary Footer Menu')
                    ->helperText('This will only be used if configured in site theme'),
            ])
            ->columns(1);
    }
}

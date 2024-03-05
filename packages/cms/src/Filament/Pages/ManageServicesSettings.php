<?php

namespace Hup234design\Cms\Filament\Pages;

use Hup234design\Cms\Settings\ServicesSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageServicesSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static string $settings = ServicesSettings::class;

    protected static ?string $navigationGroup = "Settings";
    protected static ?string $navigationLabel = "Services";
    protected static ?string $title = "Settings : Services";

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Toggle::make('enabled')
                    ->label('Services Enabled')
                    ->default(true),
                Forms\Components\TextInput::make('title')
                    ->label('Title')
                    ->required(),
                Forms\Components\TextInput::make('slug')
                    ->label('Slug')
                    ->required(),
            ])
            ->columns(1);
    }
}

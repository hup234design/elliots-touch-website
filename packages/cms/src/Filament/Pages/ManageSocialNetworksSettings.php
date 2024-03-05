<?php

namespace Hup234design\Cms\Filament\Pages;

use Hup234design\Cms\Settings\SocialNetworksSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageSocialNetworksSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';

    protected static string $settings = SocialNetworksSettings::class;

    protected static ?string $navigationGroup = "Settings";
    protected static ?string $navigationLabel = "Social Networks";
    protected static ?string $title = "Settings : Social Networks";

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('facebook')
                    ->url(),
                Forms\Components\TextInput::make('twitter')
                    ->url(),
                Forms\Components\TextInput::make('instagram')
                    ->url(),
                Forms\Components\TextInput::make('pinterest')
                    ->url(),
                Forms\Components\TextInput::make('tiktok')
                    ->url(),
                Forms\Components\TextInput::make('linkedin')
                    ->url(),
                Forms\Components\TextInput::make('youtube')
                    ->url(),
            ])
            ->columns(1);
    }
}

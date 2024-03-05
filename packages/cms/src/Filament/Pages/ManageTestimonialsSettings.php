<?php

namespace Hup234design\Cms\Filament\Pages;

use Hup234design\Cms\Settings\TestimonialsSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageTestimonialsSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-hand-thumb-up';

    protected static string $settings = TestimonialsSettings::class;

    protected static ?string $navigationGroup = "Settings";
    protected static ?string $navigationLabel = "Testimonials";
    protected static ?string $title = "Settings : Testimonials";

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Toggle::make('enabled')
                    ->label('Testimonials Enabled')
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

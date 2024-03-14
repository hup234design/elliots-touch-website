<?php

namespace App\Filament\Pages;

use App\Filament\Support\Settings;
use Filament\Forms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use RyanChandler\FilamentNavigation\Filament\Fields\NavigationSelect;

class ManageSettings extends Page
{
    protected static ?string $title = 'Site Options';

    protected static ?string $navigationGroup = 'Settings';
    protected static ?string $navigationIcon= 'heroicon-o-cog';

    protected static string $view = 'filament.pages.settings';

    public $state = [];

//    public static function shouldRegisterNavigation(): bool
//    {
//        return auth()->user()->hasRole('admin');
//    }

    public function mount(Settings $settings)
    {
        $this->state = $settings->all();

        $requiredKeys = [
            "site_name" => config('app.name'),
            "posts_slug" => "posts",
            "posts_title" => "Posts",
            "events_slug" => "events",
            "events_title" => "Events",
            "primary_header_menu_id" => null,
            "secondary_header_menu_id" => null,
            "primary_footer_menu_id" => null,
            "secondary_footer_menu_id" => null,
            "social_facebook" => null,
            "social_twitter" => null,
            "social_linkedin" => null,
            "social_instagram" => null,
            "social_pinterest" => null,
            "social_youtube" => null,
            "social_tiktok" => null,
        ];

        foreach ($requiredKeys as $key=>$value) {
            if (!array_key_exists($key, $this->state)) {
                $this->state[$key] = $value;
            }
        }

        $this->form->fill($this->state);
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\Tabs::make('Settings')
                ->tabs([
                    Forms\Components\Tabs\Tab::make('General')
                        ->schema([
                            Forms\Components\Group::make()
                                ->schema([
                                    Forms\Components\TextInput::make('state.site_name')
                                        ->label('Site Name')
                                        ->required(),
                                ])
                        ]),
                    Forms\Components\Tabs\Tab::make('Events')
                        ->schema([
                            Forms\Components\Group::make([
                                Forms\Components\TextInput::make('state.events_title')
                                    ->label('Title')
                                    ->default('Events')
                                    ->required(),
                                Forms\Components\TextInput::make('state.events_slug')
                                    ->label('Slug')
                                    ->default('events')
                                    ->required(),
                            ])
                        ]),
                    Forms\Components\Tabs\Tab::make('Posts')
                        ->schema([
                            Forms\Components\Group::make([
                                Forms\Components\TextInput::make('state.posts_title')
                                    ->label('Title')
                                    ->default('Posts')
                                    ->required(),
                                Forms\Components\TextInput::make('state.posts_slug')
                                    ->label('Slug')
                                    ->default('posts')
                                    ->required(),
                            ])
                                ->columnSpan(2),
                        ])
                        ->columns(3),
                    Forms\Components\Tabs\Tab::make('Navigation')
                        ->schema([
                            NavigationSelect::make('state.primary_header_menu_id')
                                ->label('Primary Header Menu')
                                ->required(),
                            NavigationSelect::make('state.secondary_header_menu_id')
                                ->label('Secondary Header Menu')
                                ->helperText('This will only be used if configured in site theme'),
                            NavigationSelect::make('state.primary_footer_menu_id')
                                ->label('Primary Footer Menu')
                                ->required(),
                            NavigationSelect::make('state.secondary_footer_menu_id')
                                ->label('Secondary Footer Menu')
                                ->helperText('This will only be used if configured in site theme'),
                        ]),
                    Forms\Components\Tabs\Tab::make('Social Media URLs')
                        ->schema([
                            Forms\Components\TextInput::make('state.social_facebook')
                                ->label('Facebook')
                                ->url()
                                ->inlineLabel()
                                ->maxWidth('2xl'),
                            Forms\Components\TextInput::make('state.social_twitter')
                                ->label('Twitter')
                                ->url()
                                ->inlineLabel()
                                ->maxWidth('2xl'),
                            Forms\Components\TextInput::make('state.social_linkedin')
                                ->label('LinkedIn')
                                ->url()
                                ->inlineLabel()
                                ->maxWidth('2xl'),
                            Forms\Components\TextInput::make('state.social_instagram')
                                ->label('Instagram')
                                ->url()
                                ->inlineLabel()
                                ->maxWidth('2xl'),
                            Forms\Components\TextInput::make('state.social_pinterest')
                                ->label('Pinterest')
                                ->url()
                                ->inlineLabel()
                                ->maxWidth('2xl'),
                            Forms\Components\TextInput::make('state.social_youtube')
                                ->label('YouTube')
                                ->url()
                                ->inlineLabel()
                                ->maxWidth('2xl'),
                            Forms\Components\TextInput::make('state.social_tiktok')
                                ->label('TikTok')
                                ->url()
                                ->inlineLabel()
                                ->maxWidth('2xl'),
                        ])
                    ,
                ])
                ->columnSpan(2)
        ];
    }

    public function submit(Settings $settings): void
    {
        $this->validate();
        $settings->put($this->state);

        Notification::make()
            ->title('Settings Saved successfully')
            ->success()
            ->send();
    }
}

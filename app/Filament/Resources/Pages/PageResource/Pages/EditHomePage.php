<?php

namespace App\Filament\Resources\Pages\PageResource\Pages;

use App\Filament\Resources\Pages\PageResource;
use App\Models\HomePage;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\Page;
use Filament\Actions;

class EditHomePage extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string $resource = PageResource::class;

    protected static string $view = 'filament.resources.page-resource.pages.home-page';

    public ?array $data = [];

    public HomePage $page;

    public function mount(): void
    {
        $this->page = HomePage::first() ?? HomePage::make();
        $this->form->fill($this->page->toArray());
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required(),
                Section::make('Images')
                    ->schema([
                        CuratorPicker::make('hero_image_left_media_id')
                            ->label('Left Image'),
                        CuratorPicker::make('hero_image_center_media_id')
                            ->label('Center Image')
                            ->columnSpan(3),
                        CuratorPicker::make('hero_image_right_media_id')
                            ->label('Right Image'),
                    ])
                    ->columns(5),
                Group::make()
                    ->columns(2)
                    ->schema([
                        Section::make('Introduction')
                            ->columnSpan(1)
                            ->schema([
                                TextInput::make('introduction_heading'),
                                Textarea::make('introduction')
                                    ->rows(8)
                            ]),
                        Section::make('Links')
                            ->columnSpan(1)
                            ->schema([

                            ])
                        ])
            ])
            ->statePath('data');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('Back to Pages')
                ->icon('heroicon-m-arrow-uturn-left')
                ->outlined(true)
                ->url('/admin/pages/pages')
        ];
    }

    public function save(): void
    {
        if ($this->page->id) {
            // If a record exists, update it
            $this->page->update($this->form->getState());
        } else {
            // If no record exists, create a new one
            HomePage::create($this->form->getState());
        }

        Notification::make()
            ->title('Home Page saved successfully')
            ->success()
            ->send();
    }
}

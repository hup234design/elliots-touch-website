<?php

namespace App\Livewire;

use App\Filament\Forms\Schemas\ContentBlockTemplate;

use App\Models\Section;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Livewire\Component;

class SectionBlock extends Component
{
    public function mount($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.section-block', [
            'section' => Section::with('sectionItems')->find($this->data['section_id'])
        ]);
    }

    public static function blockSchema()
    {
        return ContentBlockTemplate::make('section', [
            Select::make('section_id')
                ->label('Section To Include')
                ->options(Section::all()->pluck('title','id'))
                ->required(),
            Radio::make('layout')
                ->options([
                    'imageOverlay' => 'Image Overlay Grid',
                    'cardGrid' => 'Cards Grid',
                    'mediaObject' => 'Media Object List',
                ])
                ->descriptions([
                    'imageOverlay' => 'Title will be shown over image. Hover to reveal subtitle and summary',
                    'cardGrid' => 'Image will be above title, subtitle and summary.',
                    'mediaObject' => 'Image will be to left with title, subtitle and summary to the right.',
                ])
                ->required()
        ]);
    }
}

<?php

namespace App\Livewire;

use App\Filament\Forms\Schemas\ContentBlockTemplate;
use FilamentTiptapEditor\Enums\TiptapOutput;
use FilamentTiptapEditor\TiptapEditor;
use Livewire\Component;

class EditorBlock extends Component
{
    public function mount($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.editor-block');
    }

    public static function blockSchema()
    {
        return ContentBlockTemplate::make('editor', [
                TiptapEditor::make('content')
                    ->profile('default')
                    ->maxWidth('full')
                    ->output(TiptapOutput::Json)
                    ->columnSpanFull(),
            ]);
    }
}

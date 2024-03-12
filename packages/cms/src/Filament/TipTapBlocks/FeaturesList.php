<?php

namespace Hup234design\Cms\Filament\TipTapBlocks;

use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\TableRepeater\Components\TableRepeater;
use Awcodes\TableRepeater\Header;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use FilamentTiptapEditor\TiptapBlock;

class FeaturesList extends TiptapBlock
{
    public string $preview = 'cms::tiptap-blocks.previews.features-list';

    public string $rendered = 'cms::tiptap-blocks.rendered.features-list';

    public string $width = 'full';

    public bool $slideOver = true;

    public function getFormSchema(): array
    {
        return [
            TableRepeater::make('features')
                ->headers([
                    Header::make('feature'),
                ])
                ->schema([
                    TextInput::make('text')
                    ->required()
                ])
                ->columnSpan('full')
        ];
    }
}

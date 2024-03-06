<?php

namespace Hup234design\Cms\Filament\ContentBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class ContentBlockTemplate
{
    static public function make($name, $schema=[])
    {
        return Block::make($name)
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('Content')
                            ->schema($schema)
                            ->visible(count($schema) > 0),
                        Tabs\Tab::make('Header')
                            ->schema([
                                Toggle::make('include_header')
                                    ->label('Include Header')
                                    ->inlineLabel()
                                    ->default(false)
                                    ->onColor('success'),
                                TextInput::make('header_eyebrow')
                                    ->label('Eyebrow')
                                    ->inlineLabel(),
                                Textarea::make('header_title')
                                    ->label('Title')
                                    ->inlineLabel()
                                    ->rows(2),
                                Textarea::make('header_text')
                                    ->label('Text')
                                    ->inlineLabel()
                                    ->rows(2)
                            ]),
                        Tabs\Tab::make('Options')
                            ->schema([
                                // ...
                            ]),
                    ])
            ]);
    }
}

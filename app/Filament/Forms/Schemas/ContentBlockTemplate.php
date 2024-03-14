<?php

namespace App\Filament\Forms\Schemas;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Get;

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
                                    ->onColor('success')
                                    ->live(),
                                Group::make()
                                    ->schema([
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
                                            ->rows(2),
                                    ])
                                    ->visible(fn(Get $get) => $get('include_header'))
                            ]),
                        Tabs\Tab::make('Options')
                            ->schema([
                                Select::make('block_style')
                                    ->inlineLabel()
                                    ->placeholder('Default')
                                    ->options([
                                        'light' => 'Light',
                                        'dark' => 'Dark',
                                        'brand' => 'Brand',
                                        'brand-light' => 'Brand (Light)',
                                        'brand-dark' => 'Brand (Dark)',
                                    ])
                                    ->live(),
                                Radio::make('block_boxed')
                                    ->inline()
                                    ->boolean()
                                    ->default(false)
                                    ->visible(fn(Get $get) => $get('block_style'))
                            ]),
                    ])
            ]);
    }
}

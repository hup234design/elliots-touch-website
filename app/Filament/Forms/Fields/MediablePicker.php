<?php

namespace App\Filament\Forms\Fields;

use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms;
use App\Filament\Forms\Components\MediablePreview;

class MediablePicker
{
    public function __construct(
        public string $relationship,
        public string $type
    ) {}

    public static function make(string $relationship, string $type): Forms\Components\Group
    {
        return Forms\Components\Group::make()
            ->relationship($relationship)
            ->columns(3)
            ->schema([
                Forms\Components\Group::make([
                    Forms\Components\Hidden::make('type')
                        ->default($type),
                    CuratorPicker::make('media_id')
                        ->live()
                        ->label('Image'),
                    Forms\Components\Select::make('curation')
                        ->placeholder('No Curation')
                        ->options(fn(Forms\Get $get) => collect(collect($get('media_id'))->first()['curations'] ?? [])
                            ->mapWithKeys(function ($item) {
                                return [$item["curation"]["key"] => $item["curation"]["key"]];
                            }))
                        ->live()
                        ->default(function () use ($type) {
                            return in_array($type, ['header', 'seo']) ? $type : null;
                        })
                        ->visible(fn(Forms\Get $get) => $get('media_id')),
                ]),
                \App\Filament\Forms\Components\MediablePreview::make('preview')
                    ->media(fn(Forms\Get $get) => $get('media_id'))
                    ->curation(fn(Forms\Get $get) => $get('curation'))
                    ->columnSpan(2)
                    ->visible(fn(Forms\Get $get) => $get('media_id'))
            ]);
    }
}

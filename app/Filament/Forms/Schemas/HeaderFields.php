<?php

namespace App\Filament\Forms\Schemas;

use App\Livewire\HeroBlock;
use App\Livewire\LatestPostsBlock;
use App\Livewire\UpcomingEventsBlock;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use App\Filament\Forms\Fields\MediablePicker;

class HeaderFields
{
    public static function make($home=false): array
    {
        return [
            Forms\Components\Group::make()
                ->relationship('header')
                ->schema([
                    Forms\Components\Builder::make('header_blocks')
                        ->addActionLabel('Add Header Block')
                        ->labelBetweenItems('Insert Content Block')
                        ->label(false)
                        ->collapsible()
                        ->blockNumbers(false)
                        ->columnSpanFull()
                        ->blocks([
                            HeroBlock::blockSchema(),
                        ])
                        ->collapsible()
                        ->collapsed(false),
                ]),
                    //TextInput::make('eyebrow')
                    //    ->hidden($home),
                    //TextInput::make('heading'),
                    //Textarea::make('text')
                    //    ->rows(3),
//                ]),
            //MediablePicker::make("headerImage", "header")
            //    ->columnSpanFull(),
        ];
    }
}

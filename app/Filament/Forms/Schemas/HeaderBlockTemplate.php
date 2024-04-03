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

class HeaderBlockTemplate
{
    static public function make($name, $schema=[])
    {
        return Block::make($name)
            ->schema($schema);
    }
}

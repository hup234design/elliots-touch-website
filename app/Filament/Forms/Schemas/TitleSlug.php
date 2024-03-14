<?php

namespace App\Filament\Forms\Schemas;

use Filament\Forms\Components\Group;
use Filament\Forms\Components\TextInput;
use Filament\Forms;
use Illuminate\Support\Str;

class TitleSlug
{
    public static function make($model): Group
    {
        return Group::make()
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),
                TextInput::make('slug')
                    ->required()
                    ->unique($model, 'slug', ignoreRecord: true)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, Forms\Set $set) => $set('slug', Str::slug($state))),
            ])
            ->columns(2);
    }
}

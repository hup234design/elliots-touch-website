<?php

namespace App\Filament\Forms\Schemas;

use App\Livewire\EditorBlock;
use App\Livewire\GalleryBlock;
use App\Livewire\GoogleMapBlock;
use App\Livewire\ImageBlock;
use App\Livewire\SectionBlock;
use App\Livewire\TeamMembersBlock;
use App\Livewire\TestimonialsBlock;
use App\Livewire\VideoBlock;

class ContentBlocks
{

    public static function make() : array
    {

        $customBlocks = array_map(function ($className) {
            return $className::blockSchema();
        }, config('cms.content_blocks', []));

        return array_merge([
            EditorBlock::blockSchema(),
            VideoBlock::blockSchema(),
            GalleryBlock::blockSchema(),
            SectionBlock::blockSchema(),
            TestimonialsBlock::blockSchema(),
            ImageBlock::blockSchema(),
            TeamMembersBlock::blockSchema(),
            GoogleMapBlock::blockSchema(),
            // other statically defined blocks can go here
        ], $customBlocks);
    }
}

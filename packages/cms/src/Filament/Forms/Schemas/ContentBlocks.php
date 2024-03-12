<?php

namespace Hup234design\Cms\Filament\Forms\Schemas;

use Hup234design\Cms\Filament\ContentBlocks\EditorBlock;
use Hup234design\Cms\Filament\ContentBlocks\GalleryBlock;
use Hup234design\Cms\Filament\ContentBlocks\ImageBlock;
use Hup234design\Cms\Filament\ContentBlocks\SectionBlock;
use Hup234design\Cms\Filament\ContentBlocks\TestimonialsBlock;
use Hup234design\Cms\Filament\ContentBlocks\VideoBlock;

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
            // other statically defined blocks can go here
        ], $customBlocks);
    }
}

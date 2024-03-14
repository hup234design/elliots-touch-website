<?php

namespace App\Filament\TipTapBlocks;

use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use FilamentTiptapEditor\TiptapBlock;

class GalleryBlock extends TiptapBlock
{
    public string $preview = 'tiptap-blocks.previews.gallery';

    public string $rendered = 'tiptap-blocks.rendered.gallery';

    public string $width = 'xl';

    public bool $slideOver = true;

    public function getFormSchema(): array
    {
        return [
            CuratorPicker::make('images')
            //->label(string $customLabel)
            //->buttonLabel(string | Htmlable | Closure $buttonLabel)
            //->color('primary|secondary|success|danger') // defaults to primary
            //->outlined(true|false) // defaults to true
            //->size('sm|md|lg') // defaults to md
            //->constrained(true|false) // defaults to false (forces image to fit inside the preview area)
            ->lazyLoad() // defaults to true
            ->listDisplay() // defaults to true
            //->tenantAware(bool | Closure $condition) // defaults to true
            //->defaultPanelSort(string | Closure $direction) // defaults to 'desc'
            // see https://filamentphp.com/docs/2.x/forms/fields#file-upload for more information about the following methods
            ->preserveFilenames()
            //->maxWidth()
            //->minSize()
            //->maxSize()
            //->rules()
            //->acceptedFileTypes()
            //->disk()
            //->visibility()
            //->directory()
            //->imageCropAspectRatio()
            //->imageResizeTargetWidth()
            //->imageResizeTargetHeight()
            ->multiple() // required if using a relationship with multiple media
            //->relationship(string $relationshipName, string 'titleColumnName')
            //->orderColumn('order') // only necessary to rename the order column if using a rel
        ];
    }
}

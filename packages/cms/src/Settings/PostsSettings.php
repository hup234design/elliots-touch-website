<?php

namespace Hup234design\Cms\Settings;

use Spatie\LaravelSettings\Settings;

class PostsSettings extends Settings
{
    public string $title;
    public string $slug;
    public ?string $content;
    public int $per_page;
    public ?int $header_image_id;

    public static function group(): string
    {
        return 'posts';
    }
}

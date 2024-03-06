<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class EventsSettings extends Settings
{
    public string $title;
    public string $slug;
    public ?string $content;
    public int $per_page;
    public ?int $header_image_id;

    public static function group(): string
    {
        return 'events';
    }
}

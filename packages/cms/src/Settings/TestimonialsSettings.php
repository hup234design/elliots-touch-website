<?php

namespace Hup234design\Cms\Settings;

use Spatie\LaravelSettings\Settings;

class TestimonialsSettings extends Settings
{
    public bool $enabled;
    public string $title;
    public string $slug;

    public static function group(): string
    {
        return 'testimonials';
    }
}

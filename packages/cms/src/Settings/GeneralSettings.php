<?php

namespace Hup234design\Cms\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public ?string $site_name;
    public bool $site_active;
    public ?int $primary_header_menu_id;
    public ?int $secondary_header_menu_id;
    public ?int $primary_footer_menu_id;
    public ?int $secondary_footer_menu_id;

    public static function group(): string
    {
        return 'general';
    }
}

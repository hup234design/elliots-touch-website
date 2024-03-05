<?php

namespace Hup234design\Cms\Settings;

use Spatie\LaravelSettings\Settings;

class SocialNetworksSettings extends Settings
{
    public ?string $facebook;
    public ?string $twitter;
    public ?string $instagram;
    public ?string $pinterest;
    public ?string $tiktok;
    public ?string $linkedin;
    public ?string $youtube;

    public static function group(): string
    {
        return 'social_networks';
    }
}

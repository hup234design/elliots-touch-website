<?php

use Illuminate\Support\Facades\View;

// helpers.php

if (!function_exists('cmsSetting')) {
    function cmsSetting($key = null, $default = null)
    {
        if ($key === null) {
            return app(\App\Filament\Support\Settings::class);
        }
        return app(\App\Filament\Support\Settings::class)->get($key, $default);
    }
}

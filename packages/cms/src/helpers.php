<?php

use Illuminate\Support\Facades\View;

// helpers.php

if (!function_exists('cmsSetting')) {
    function cmsSetting($key = null, $default = null)
    {
        if ($key === null) {
            return app(\Hup234design\Cms\CmsSettings::class);
        }
        return app(\Hup234design\Cms\CmsSettings::class)->get($key, $default);
    }
}

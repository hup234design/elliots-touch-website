<?php

namespace Hup234design\Cms\Concerns;

use Hup234design\Cms\Models\Headerable;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasHeader
{
    public function header(): MorphOne
    {
        return $this->morphOne(Headerable::class, 'headerable');
    }
}

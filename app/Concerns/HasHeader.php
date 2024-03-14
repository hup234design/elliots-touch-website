<?php

namespace App\Concerns;

use App\Models\Headerable;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasHeader
{
    public function header(): MorphOne
    {
        return $this->morphOne(Headerable::class, 'headerable');
    }
}

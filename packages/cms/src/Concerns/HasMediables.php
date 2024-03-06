<?php

namespace Hup234design\Cms\Concerns;

use Hup234design\Cms\Models\Mediable;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasMediables
{
    public function featuredImage(): MorphOne
    {
        return $this->morphOne(Mediable::class, 'mediable')
            ->where('type', 'featured');
    }

    public function headerImage(): MorphOne
    {
        return $this->morphOne(Mediable::class, 'mediable')
            ->where('type', 'header');
    }

    public function seoImage(): MorphOne
    {
        return $this->morphOne(Mediable::class, 'mediable')
            ->where('type', 'seo');
    }
}

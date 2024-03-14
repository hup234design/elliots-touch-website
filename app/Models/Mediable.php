<?php

namespace App\Models;

use Awcodes\Curator\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Mediable extends Model
{
    protected $guarded = ['preview'];

    public function mediable(): MorphTo
    {
        return $this->morphTo();
    }

    public function media(): BelongsTo
    {
        return $this->belongsTo(Media::class);
    }
}

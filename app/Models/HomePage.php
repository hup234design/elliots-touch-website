<?php

namespace App\Models;

use Awcodes\Curator\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HomePage extends Model
{
    protected $guarded = [];

    public function heroImageLeft(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'hero_image_left_media_id');
    }

    public function heroImageCenter(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'hero_image_center_media_id');
    }

    public function heroImageRight(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'hero_image_right_media_id');
    }
}

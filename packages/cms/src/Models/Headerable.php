<?php

namespace Hup234design\Cms\Models;

use Awcodes\Curator\Models\Media;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Headerable extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'links' => 'array'
    ];

    public function headerable(): MorphTo
    {
        return $this->morphTo();
    }
}

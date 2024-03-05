<?php

namespace Hup234design\Cms\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    protected $guarded = [];

    protected $casts = [
        'content' => 'array',
        'content_blocks' => 'array',
        'is_visible' => 'boolean'
    ];

    public function serviceCategory() : BelongsTo
    {
        return $this->belongsTo(ServiceCategory::class);
    }

    public function scopeVisible($query)
    {
        return $query->where('is_visible', true);
    }

    protected static function booted()
    {
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('sort_order', 'asc');
        });
    }
}

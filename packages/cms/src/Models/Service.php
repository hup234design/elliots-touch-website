<?php

namespace Hup234design\Cms\Models;

use Carbon\Carbon;
use Hup234design\Cms\Concerns\HasHeader;
use Hup234design\Cms\Concerns\HasMediables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Service extends Model implements Sortable
{
    use SortableTrait;
    use SoftDeletes;
    use HasSEO;
    use HasHeader;
    use HasMediables;

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

<?php

namespace Hup234design\Cms\Models;

use Hup234design\Cms\Concerns\HasMediables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Slide extends Model implements Sortable
{
    use SortableTrait;
    use HasMediables;

    protected $guarded = [];

    protected $casts = [
        'links' => 'array'
    ];

    public function slider() : BelongsTo
    {
        return $this->belongsTo(Slider::class);
    }

    protected static function boot()
    {
        parent::boot();

        // Order by home page and then by sort order
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('sort_order', 'asc');
        });
    }
}

<?php

namespace App\Models;

//use App\Concerns\HasMediables;
use App\Concerns\HasMediables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class SectionItem extends Model implements Sortable
{
    use SoftDeletes;
    use SortableTrait;
    use HasMediables;

    protected $guarded = [];

    protected $casts = [
        'content' => 'array',
        'is_visible' => 'boolean'
    ];

    public function section() : BelongsTo
    {
        return $this->belongsTo(Section::class);
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

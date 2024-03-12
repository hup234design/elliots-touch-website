<?php

namespace Hup234design\Cms\Models;

use Hup234design\Cms\Concerns\HasHeader;
use Hup234design\Cms\Concerns\HasMediables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Page extends Model implements Sortable
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
        'is_visible' => 'boolean',
        'display_title' => 'boolean'
    ];

    public function scopeVisible($query)
    {
        return $query->where('is_visible', true);
    }

    protected static function booted()
    {
        // when saved update home page flag on all other pages
        static::saved(function ($model) {
            if ($model->is_home) {
                $model->updateQuietly(['is_visible' => true]);
                \Hup234design\Cms\Models\Page::whereNot('id', $model->id)->where('is_home', true)->update(['is_home' => false]);
            }
        });

        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('is_home', 'desc')
                ->orderBy('sort_order', 'asc');
        });
    }
}

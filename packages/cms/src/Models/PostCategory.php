<?php

namespace Hup234design\Cms\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class PostCategory extends Model implements Sortable
{
    use SortableTrait;
    use SoftDeletes;

    protected $guarded = [];

    public function posts() : HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function published_posts() : HasMany
    {
        return $this->hasMany(Post::class)->published();
    }

    protected static function booted()
    {
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('sort_order', 'asc');
        });
    }
}

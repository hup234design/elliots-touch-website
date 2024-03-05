<?php

namespace Hup234design\Cms\Models;

use Hup234design\Cms\Models\PostCategory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $casts = [
        'content' => 'array',
        'content_blocks' => 'array',
        'published_at' => 'datetime',
        'is_visible' => 'boolean'
    ];

    public function postCategory() : BelongsTo
    {
        return $this->belongsTo(PostCategory::class);
    }

    public function scopeVisible($query)
    {
        return $query->where('is_visible', true);
    }

    public function scopePublished($query)
    {
        return $query->visible()->where('published_at', '<=', Carbon::now());
    }

    protected static function booted()
    {
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('published_at', 'desc');
        });
    }
}

<?php

namespace App\Models;

use App\Concerns\HasHeader;
use App\Concerns\HasMediables;
use App\Models\PostCategory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use RalphJSmit\Laravel\SEO\Support\HasSEO;

class Post extends Model
{
    use SoftDeletes;
    use HasSEO;
    use HasHeader;
    use HasMediables;

    protected $guarded = [];

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

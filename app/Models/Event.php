<?php

namespace App\Models;

use Carbon\Carbon;
use Hup234design\Cms\Concerns\HasHeader;
use Hup234design\Cms\Concerns\HasMediables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use RalphJSmit\Laravel\SEO\Support\HasSEO;

class Event extends Model
{
    use SoftDeletes;
    use HasSEO;
    use HasHeader;
    use HasMediables;

    protected $guarded = [];

    protected $casts = [
        'content' => 'array',
        'content_blocks' => 'array',
        'date' => 'date',
        'is_visible' => 'boolean'
    ];

    public function eventCategory() : BelongsTo
    {
        return $this->belongsTo(EventCategory::class);
    }

    public function scopeVisible($query)
    {
        return $query->where('is_visible', true);
    }

    public function scopeUpcoming($query)
    {
        return $query->visible()->whereDate('date', '>=', Carbon::now());
    }

    public function scopePrevious($query)
    {
        return $query->visible()->whereDate('date', '<', Carbon::now());
    }

    protected static function booted()
    {
        static::addGlobalScope('order', function (Builder $builder) {
            $builder
                ->orderBy('date', 'asc')
                ->orderBy('start_time', 'asc');
        });
    }
}

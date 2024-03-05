<?php

namespace Hup234design\Cms\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'is_visible' => 'boolean'
    ];

    public function scopeVisible($query)
    {
        return $query->where('is_visible', true);
    }

    protected static function booted()
    {
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('received_at', 'desc');
        });
    }
}

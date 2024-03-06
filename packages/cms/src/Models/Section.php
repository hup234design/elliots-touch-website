<?php

namespace Hup234design\Cms\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Section extends Model
{
    protected $guarded = [];

    public function sectionItems() : HasMany
    {
        return $this->hasMany(SectionItem::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{

    use NodeTrait;

    protected $fillable = [
        'name', 'slug', 'icon', 'description'
    ];

    /**
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     vb * @return HasMany
     */
    public function listings(): HasMany
    {
        return $this->hasMany(Listing::class);
    }



}

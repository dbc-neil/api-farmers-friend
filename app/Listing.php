<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Listing extends Model
{

    protected $fillable = [
        'id',
        'title',
        'key',
        'body',
        'category_id',
        'user_id',
        'url',
        'price',
        'created_at',
        'expire_at'
    ];

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @param $query
     * @param Category $category
     * @return mixed
     */
    public function scopeFromCategory($query, Category $category)
    {
        return $query->where('category_id', $category->id);
    }





}

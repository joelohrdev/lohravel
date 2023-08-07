<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use RalphJSmit\Laravel\SEO\Support\HasSEO;

class Post extends Model
{
    use HasSEO;
    protected $fillable = [
        'title',
        'slug',
        'body',
        'published_at',
        'status',
    ];

    protected $casts = [
        'published_at' => 'date',
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}

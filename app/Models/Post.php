<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class Post extends Model
{
    use HasSEO;

    public function getDynamicSEOData(): SEOData
    {
        return new SEOData(
            title: $this->title,
            description: $this->excerpt,
        );
    }

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

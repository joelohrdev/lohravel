<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;

class Post extends Model
{
    use HasSEO;
    protected $fillable = [
        'title',
        'body',
        'published_at',
        'status',
    ];
}

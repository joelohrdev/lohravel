<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class ArticleIndex extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.article-index', [
            'articles' => Post::where('status', 'published')->paginate(5),
        ]);
    }
}

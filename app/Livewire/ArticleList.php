<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleList extends Component
{
    public $perPage = 5;

    public function loadMore()
    {
        $this->perPage += 5;
    }
 
    public function render()
    {
        $articles = Article::paginate($this->perPage);
 
        return view('livewire.article-list', [
            'articles' => $articles
        ]);
    }
}

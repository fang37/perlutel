<?php

namespace Modules\Sympoza\Http\Livewire\Article\User;

use Livewire\Component;
use Modules\Sympoza\Entities\Author;
use Modules\Sympoza\Entities\Article;
use Auth;
use EmptyIterator;

class Home extends Component
{
    //protected $listeners = ['articleHomeRefresh' => '$refresh'];
    protected $listeners = ['getArticle' => 'getArticle'];
    
    public function render()
    {
        $author = Author::all();
        $articles = Article::all();
        //dd($articles);

        return view('sympoza::livewire.article.user.home', compact('author', 'articles'));
    }

    public function create()
    {
        return view('sympoza::livewire.article.user.create', compact('author'));
    }

    public function getArticle($id)
    {
        $article = Article::where('id', $id)->first();
        $this->emit('editArticle', $article);
        //dd($article->title);
        //return view('sympoza::livewire.article.user.edit', compact('articles'));
        //return redirect('sympoza/article-submission/edit', ['article'=>$article]);
        //return redirect()->route('sympoza/article-submission/edit' )->with( [ 'articles' => $articles ] );
    }
}

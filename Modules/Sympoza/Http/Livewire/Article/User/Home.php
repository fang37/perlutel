<?php

namespace Modules\Sympoza\Http\Livewire\Article\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Modules\Sympoza\Entities\Author;
use Modules\Sympoza\Entities\Article;
use EmptyIterator;

class Home extends Component
{
    public $author_id;
    
    //protected $listeners = ['articleHomeRefresh' => '$refresh'];
    protected $listeners = ['getArticle' => 'getArticle'];

    public function render()
    {
        $this->author_id = Auth::id();
        $articles = Article::where('author_id', $this->author_id)->get();
        $author = Author::all();
        //$articles = Article::all();
        //dd($articles);

        return view('sympoza::livewire.article.user.home', compact('author', 'articles'));
    }

    public function create()
    {
        return view('sympoza::livewire.article.user.create', compact('author'));
    }

    public function download($link)
    {
        return Storage::download($link);
    }

    public function getArticle($id)
    {
        $article = Article::where('id', $id)->first();
        $this->emit("editArticle", $article);
        //dd($article);
        //dd($article->title);
        //return view('sympoza::livewire.article.user.edit', compact('articles'));
        //return redirect('sympoza/article-submission/edit', ['article'=>$article]);
        //return redirect()->route('sympoza/article-submission/edit' )->with( [ 'articles' => $articles ] );
    }
}

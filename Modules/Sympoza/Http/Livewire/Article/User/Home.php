<?php

namespace Modules\Sympoza\Http\Livewire\Article\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Livewire\Component;
use Modules\Sympoza\Entities\Author;
use Modules\Sympoza\Entities\Article;
use EmptyIterator;

class Home extends Component
{
    public $author_id;
    public $delete_id = '';
    
    //protected $listeners = ['articleHomeRefresh' => '$refresh'];
    public function render()
    {
        $this->author_id = Auth::id();
        $articles = Article::where('author_id', $this->author_id)->get();
        $author = Author::all();

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

    public function deleteId($id)
    {
        $this->delete_id = $id;
    }

    public function delete()
    {
        $article = Article::where('id', $this->delete_id)->first();

        if($article) {
            $article->delete();
        }

        //flash message
        session()->flash('message', 'Submission Berhasil Dihapus.');

        //redirect
        // return redirect()->route('post.index');
    }
}

<?php

namespace Modules\Sympoza\Http\Livewire\Article\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Modules\Sympoza\Entities\Author;
use Modules\Sympoza\Entities\Article;
use Modules\Sympoza\Entities\Users;

class Edit extends Component
{
    public $articleId;
    public $articles;
    public $author_id;
    public $title;
    public $abstract;
    public $keyword;
    public $author_desc;
    public $link;
    public $authorIndexs;

    use WithFileUploads;
    public $file;

    public function render()
    {   
        $author = Author::all();
        //$article = Article::where('id', $this->id)->first();
        //$article = Article::find($this->articleId);
        $article = Article::where('id', $this->articleId)->first();
        //dd($this->articles);
        //return view('sympoza::livewire.article.user.edit', compact('author', 'authorIndexs'));
        return view('sympoza::livewire.article.user.edit', compact('author', 'article'));
    }

    public function editArticle($article){
        dd("Shafira");
        //$emit('getArticle', $id);
        //$this->articles = $article;
    }

    public function mount(){
        $article = Article::where('id', $this->articleId)->first();
        $this->title = $article->title;
        $this->abstract = $article->abstract;
        $this->keyword = $article->keyword;
        $this->author_desc = $article->author_desc;
        $this->link = $article->link;
    }

    public function updatedFile()
    {
        $this->validate([
            'file' => 'file',
        ]);
        $this->link = "articles/{$this->title}.pdf";
    }

    public function editSubmission($id){ 
        $article = Article::where('id', $id)->first();
        $this->author_id = Auth::id();
        
        $this->validate([
            'title' => 'required',
            'abstract' => 'required',
            'keyword' => 'required',
        ]);
               
        Article::find($id)->update([ 
            'title' => $this->title,
            'abstract' => $this->abstract,
            'keyword' => $this->keyword,
            'link' => $this->link,
            ]);

        if($this->file) {
            $this->file->storeAs('articles',"{$this->title}.pdf");
        }

        $this->emit('success', 'The submission has been edited successfully');
        session()->flash('message', 'The submission has been edited successfully');
        return redirect()->to('/sympoza/article-submission');
        //$this->emit('articleCreateRefresh');
            //return redirect('/sympoza/article-submission/create')->with('status', 'Data berhasil ditambahkan');
            //$this->user_id = '';
        //$this->first_name = '';
        //$this->last_name = '';
    }
}


     


<?php

namespace Modules\Sympoza\Http\Livewire\Article\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Modules\Sympoza\Entities\Author;
use Modules\Sympoza\Entities\Article;

class Edit extends Component
{
    public $articleId;
    public $author_id;
    public $title;
    public $abstract;
    public $keyword;
    public $author_desc;
    public $link;
    public $authorIndexs;

    use WithFileUploads;
    public $file;
    public $oldLink;

    public function render()
    {   
        $author = Author::all();
        $article = Article::where('id', $this->articleId)->first();
        return view('sympoza::livewire.article.user.edit', compact('author', 'article'));
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
          
        if( is_null($this->file) ) {
            $this->oldLink = $this->link;
        }

        Article::find($id)->update([ 
            'title' => $this->title,
            'abstract' => $this->abstract,
            'keyword' => $this->keyword,
            ]);

        if($this->file) {
            $this->file->storeAs('articles',"{$this->title}.pdf");
            $this->link = "articles/{$this->title}.pdf";
        }
        else {
            $this->link = "articles/{$this->title}.pdf";
            Storage::move("{$this->oldLink}", "articles/$this->title.pdf");
        }

        Article::find($id)->update([ 
            'link' => $this->link,
            ]);

        $this->emit('success', 'The submission has been edited successfully');
        session()->flash('message', 'The submission has been edited successfully');
        return redirect()->to('/sympoza/article-submission');
    }
}


     


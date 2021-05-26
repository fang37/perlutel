<?php

namespace Modules\Sympoza\Http\Livewire\Article\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\Sympoza\Entities\Author;
use Modules\Sympoza\Entities\Article;
use Modules\Sympoza\Entities\Users;

class Edit extends Component
{
    public $articleId;
    public $article;
    public $articles;
    public $name = [];
    public $nim = [];
    public $email = [];
    public $faculty = [];
    public $author_id;
    public $title;
    public $abstract;
    public $keyword;
    public $author_desc;
    public $link;
    public $authorIndexs;

    protected $listeners = ['editArticle' => 'editArticle'];
    
    public function mount(){
        // $this->article = Article::find($this->articleId);

        //if($article) {
        //    $this->title = $article->title;
        //}
        // for($i=0; $i < $this->authorIndexs; $i++){
        //     $this->name[$i+1] = null;
        //     $this->nim[$i+1] = null;
        //     $this->email[$i+1] = null;
        //     $this->faculty[$i+1] = null;
        // } 
        $this->author_id = null;
        $this->abstract = null;
        $this->keyword = null;
        $this->author_desc = null;
    }

    public function render()
    {   
        $author = Author::all();
        //$article = Article::where('id', $this->id)->first();
        $article = Article::find($this->articleId);
        //dd($this->articles);
        $authorIndexs = $this->articleId;
        //return view('sympoza::livewire.article.user.edit', compact('author', 'authorIndexs'));
        return view('sympoza::livewire.article.user.edit', compact('author', 'article', 'authorIndexs'));
    }

    public function editArticle($id){
        dd($id);
        $emit('getArticle', $id);
        $this->articles = $article;
    }

    public function addAuthor(){
        $this->authorIndexs++;
        $this->emit('articleCreateRefersh');
        //dd($this->authorIndexs);
    }

    public function removeAuthor(){
        $this->authorIndexs--;
        $this->emit('articleCreateRefersh');
        //dd($this->authorIndexs);
    }
    
   

   

    // public function editSubmission($id){
    //     $article = article::where('id', $id)->first(); 

    //     $this->validate([
    //         'name.*' => 'required',
    //         'nim.*' => 'required|size:7',
    //         'email.*' => 'required',
    //         'faculty.*' => 'required',
    //         'title' => 'required',
    //         'abstract' => 'required',
    //         'keyword' => 'required',
    //     ]);
        
    //     for($i=0; $i < $this->authorIndexs; $i++){
    //         $dataAvailable = Author::where('nim', $this->nim)->first();
    //         if(!$dataAvailable){
    //             Author::create([
    //                 'name' => $this->name[$i+1],
    //                 'nim' => $this->nim[$i+1],
    //                 'email' => $this->email[$i+1],
    //                 'faculty' => $this->faculty[$i+1],
    //                 ]);
    //         }
    //     } 
               
    //     //$user = Users::where('sso_username', $this->nim)->first(); 
    //     $this->author_id = Auth::id();
    //     for($i=0; $i < $this->authorIndexs; $i++){
    //         if($this->author_desc == null){
    //             $this->author_desc = $this->name[$i+1] . "[{($i+1)}]";
    //         }
    //         else {
    //             $this->author_desc = $this->author_desc . ', ' . $this->name[$i+1] . "[{($i+1)}]";  
    //         };
            
    //     }
    //     Article::create([ 
    //         'author_id' => $this->author_id,
    //         'title' => $this->title,
    //         'abstract' => $this->abstract,
    //         'keyword' => $this->keyword,
    //         'author_desc' => $this->author_desc,
    //         ]);

    //     $this->emit('success', 'The user has been added successfully');
    //     return redirect('/sympoza/article-submission');
    //     //$this->emit('articleCreateRefresh');
    //         //return redirect('/sympoza/article-submission/create')->with('status', 'Data berhasil ditambahkan');
    //         //$this->user_id = '';
    //     //$this->first_name = '';
    //     //$this->last_name = '';
    // }
}


     


<?php

namespace Modules\Sympoza\Http\Livewire\Article\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Modules\Sympoza\Entities\Author;
use Modules\Sympoza\Entities\Article;
use Modules\Sympoza\Entities\Users;

class Create extends Component
{
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
    public $authorIndexs = 1;

    use WithFileUploads;
    public $file;

    //protected $listeners = ['addUserComponent' => 'addUser'];
    protected $listeners = ['articleCreateRefresh' => '$refresh'];
    
    public function updatedFile()
    {
        $this->validate([
            'file' => 'file',
        ]);
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
    
    public function render()
    {
        $author = Author::all();
        $article = Article::all();
        $authorIndexs = $this->authorIndexs;
        return view('sympoza::livewire.article.user.create', compact('author', 'article', 'authorIndexs'));
    }

    public function mount(){
        for($i=0; $i < $this->authorIndexs; $i++){
            $this->name[$i+1] = null;
            $this->nim[$i+1] = null;
            $this->email[$i+1] = null;
            $this->faculty[$i+1] = null;
        } 
        $this->author_id = null;
        $this->title = null;
        $this->abstract = null;
        $this->keyword = null;
        $this->author_desc = null;
    }

    public function createSubmission(){
        $this->validate([
            'name.*' => 'required',
            'nim.*' => 'required|size:7',
            'email.*' => 'required',
            'faculty.*' => 'required',
            'title' => 'required',
            'abstract' => 'required',
            'keyword' => 'required',
            'file' => 'required',
        ]);
        
        for($i=0; $i < $this->authorIndexs; $i++){
            $dataAvailable = Author::where('nim', $this->nim[$i+1])->first();
            if(!$dataAvailable){
                Author::create([
                    'name' => $this->name[$i+1],
                    'nim' => $this->nim[$i+1],
                    'email' => $this->email[$i+1],
                    'faculty' => $this->faculty[$i+1],
                    ]);
            }
        } 
               
        //$user = Users::where('sso_username', $this->nim)->first(); 
        $this->author_id = Auth::id();
        for($i=0; $i < $this->authorIndexs; $i++){
            $auth_id = $i+1;
            if($this->author_desc == null){
                $this->author_desc = $this->name[$i+1] . "[{$auth_id}]";
            }
            else {
                $this->author_desc = $this->author_desc . ', ' . $this->name[$i+1] . "[{$auth_id}]";  
            };
            
        }
        
        $this->link = "articles/{$this->title}.pdf";

        Article::create([ 
            'author_id' => $this->author_id,
            'title' => $this->title,
            'abstract' => $this->abstract,
            'keyword' => $this->keyword,
            'author_desc' => $this->author_desc,
            'link' => $this->link,
            ]);

        $this->file->storeAs('articles',"{$this->title}.pdf");
        //$this->file->storeAs($this->link);

        $this->emit('success', 'The user has been added successfully');
        return redirect('/sympoza/article-submission');
        //$this->emit('articleCreateRefresh');
            //return redirect('/sympoza/article-submission/create')->with('status', 'Data berhasil ditambahkan');
            //$this->user_id = '';
        //$this->first_name = '';
        //$this->last_name = '';
    }
}


     


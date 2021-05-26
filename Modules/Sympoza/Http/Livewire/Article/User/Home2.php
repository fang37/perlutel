<?php

//namespace Modules\Sympoza\Http\Livewire\Article\User;

use Livewire\Component;
use Modules\Sympoza\Entities\AuthorProfile;
class Home extends Component
{
    public $author_id;
    public $first_name;
    public $last_name;
    public $email;
    public $organization;

    //protected $listeners = ['pageRefresh' => '$refresh'];
    protected $listeners = ['submitArticleComponent' => 'submitArticle'];
    public function render()
    {
        $profiles = AuthorProfile::all();

        return view('sympoza::livewire.article.user.home', compact('profiles'));
    }

    public function mount(){
        $this->author_id = null;
        $this->first_name = null;
        $this->last_name = null;
        $this->email = null;
        $this->organization = null;

    }

    public function submitArticle(){

        //dd($this->author_id, $this->email);
        $this->validate([
            'author_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'organization' => 'required',
        ]);

        AuthorProfile::create([
            'author_id' => $this->author_id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'organization' => $this->organization,
            
        ]);
        //$this->emit('success', 'The article has been submited successfully');
        //$this->emit('pageRefresh');
        $this->author_id = '12';
        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->organization = '';

}
}
<?php

namespace Modules\Sympoza\Http\Livewire\User\Admin;

use Livewire\Component;

use Modules\Sympoza\Entities\Profile;

class Add extends Component
{
    public $user_id;
    public $first_name;
    public $last_name;
    protected $listeners = ['addUserComponent' => 'addUser'];
    public function render()
    {
        return view('sympoza::livewire.user.admin.add');
    }

    public function mount(){
        $this->user_id = null;
        $this->first_name = null;
        $this->last_name = null;
    }

    public function addUser(){
        $this->user_id = '';
        $this->first_name = '';
        $this->last_name = '';
        //$this->emit('hideAll');
        $this->emit('emiterAddUserModal');
    }

    public function createUser(){
        //dd($this->first_name, $this->last_name);
        $this->validate([
            'user_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
        ]);

        $data = Profile::where('user_id', $this->user_id)->first();


        if($data){
            $this->emit('error', 'NIM sudah terdaftar');
        }else{
            Profile::create([
                'user_id' => $this->user_id,
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
            ]);
            $this->emit('success', 'The user has been added successfully');
            $this->emit('addUserAdminHomeRefresh');
            $this->user_id = '';
            $this->first_name = '';
            $this->last_name = '';
        }



    }
}

<?php

namespace Modules\Sympoza\Http\Livewire\User\Admin;

use Livewire\Component;

use Modules\Sympoza\Entities\Profile;

class Add extends Component
{
    public $first_name;
    public $last_name;
    protected $listeners = ['addUserComponent' => 'addUser'];
    public function render()
    {
        return view('sympoza::livewire.user.admin.add');
    }

    public function mount(){
        $this->first_name = null;
        $this->last_name = null;
    }

    public function addUser(){
        $this->first_name = '';
        $this->last_name = '';
        //$this->emit('hideAll');
        $this->emit('emiterAddUserModal');
    }

    public function createUser(){
        //dd($this->first_name, $this->last_name);
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ]);

        $data = Profile::where('first_name', $this->first_name)->orwhere('last_name', $this->last_name)->first();


        if($data){
            $this->emit('error', 'This name already in database');
        }else{
            Profile::create([
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
            ]);
            $this->emit('success', 'The user has been added successfully');
            $this->emit('addUserAdminHomeRefresh');
            $this->first_name = '';
            $this->last_name = '';
        }



    }
}

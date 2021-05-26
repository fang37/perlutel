<?php

namespace Modules\Sympoza\Http\Livewire\User\Admin;

use Livewire\Component;
use Modules\Sympoza\Entities\Profile;

class Edit extends Component
{
    public $user_id = null;
    public $first_name = null;
    public $last_name = null;
    public $userId = null;

    protected $listeners = ['editUserComponent' => 'editUser'];
    public function render()
    {
        return view('sympoza::livewire.user.admin.edit');
    }

    public function editUser($id){
        $this->userId = $id;
        $profile = Profile::where('id', $id)->first(); 
        $this->user_id = $profile->user_id;
        $this->first_name = $profile->first_name;
        $this->last_name = $profile->last_name;
        
        $this->emit('emiterEditUserModal');
    }
    public function updateUser($id){
        Profile::find($id)->update([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
        ]);
        $this->emit('success', 'The user has been edited successfully');
        $this->emit('addUserAdminHomeRefresh');
    }
}
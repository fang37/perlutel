<?php

namespace Modules\Sympoza\Http\Livewire\User\Admin;

use Livewire\Component;
use Modules\Sympoza\Entities\Profile;

class Edit extends Component
{
    protected $listeners = ['editUserComponent' => 'editUser'];
    public function render()
    {
        return view('sympoza::livewire.user.admin.edit');
    }

    public function editUser($id){

    }
}

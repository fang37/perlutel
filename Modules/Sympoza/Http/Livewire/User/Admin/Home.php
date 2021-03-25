<?php

namespace Modules\Sympoza\Http\Livewire\User\Admin;

use Livewire\Component;
use Modules\Sympoza\Entities\Profile;
class Home extends Component
{
    public function render()
    {
        $profiles = Profile::all();

        return view('sympoza::livewire.user.admin.home', compact('profiles'));
    }


}

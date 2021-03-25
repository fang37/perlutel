<?php

namespace Modules\Sympoza\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Auth;
class UserController extends Controller
{
   /**
    * index of user management
    */

    public function userManagement_Admin(){

        $user = Auth::user();

        if($user->hasRole('faculty')){
            return view('sympoza::livewire.user.admin.home_idx');
        }else{
            return redirect()->route('sympoza.sso-login');
        }

    }
}

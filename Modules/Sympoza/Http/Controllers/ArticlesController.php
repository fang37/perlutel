<?php

namespace Modules\Sympoza\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Auth;
class ArticlesController extends Controller
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

    public function articleSubmission_User(){

        $user = Auth::user();

        if($user->hasRole('faculty')){
            return view('sympoza::livewire.article.user.home_idx');
        }else{
            return redirect()->route('sympoza.sso-login');
        }

    }

    public function articleSubmission_Create(){

        $user = Auth::user();

        if($user->hasRole('faculty')){
            return view('sympoza::livewire.article.user.create_idx');
        }else{
            return redirect()->route('sympoza.sso-login');
        }

    }

    public function articleSubmission_Edit($articleId){
        //dd($articleId);
        $user = Auth::user();

        if($user->hasRole('faculty')){
            return view("sympoza::livewire.article.user.edit_idx", ['articleId' => $articleId]);
        }else{
            return redirect()->route('sympoza.sso-login');
        }

    }
    
}

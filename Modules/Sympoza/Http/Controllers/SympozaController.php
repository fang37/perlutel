<?php

namespace Modules\Sympoza\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;

use Auth;

class SympozaController extends Controller
{
    public function index(){
        return view('sympoza::index');
    }

    public function sso_Login(){
        
        if (strlen(cas()->user()) > 9){
            
            $user = User::where('sso_username', cas()->user())->first();

            if($user === null){
                $user = User::create([
                    'sso_username' => cas()->user(),
                ]);
                
                $user->attachRole('student');
            }
        }else{
            $user = User::where('sso_username', cas()->user())->first();

            if($user === null){
                $user = User::create([
                    'sso_username' => cas()->user(),
                ]);
                $user->attachRole('faculty');
            }
        }

        $user = User::where('sso_username', cas()->user())->firstOrFail();

        Auth::login($user);

        return redirect()->route('sympoza.home');
    }

    public function home(){

        $user = Auth::user();

        if($user->hasRole('student')){
            dd('student');
        }elseif($user->hasRole('faculty')){
            return view ('sympoza::faculty-home');
        }
    }

}

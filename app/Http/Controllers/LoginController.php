<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Unique;

class LoginController extends Controller
{
    public function create(){
        return \view('login.create');
    }


    public function store(){
      $cleanData=request()->validate([
        'email'=>['required','email',Rule::exists('users','email')],
        'password'=>['required']
],

    [
        'email.exists'=>"Your Email does not exit"
    ]


);

    if(auth()->attempt($cleanData)){
    return redirect('/')->with('message','Welcome' . auth()->user()->name);
    }
    else{
        return back()->withErrors([
            'password'=>'Password is incorrect']);

    }



    }
}

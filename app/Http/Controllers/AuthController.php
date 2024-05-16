<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(){
     $cleanData= request()->validate([
        'name'=>['required','max:15'],
        'email'=>['required'],
        'password'=>['required','min:8','max:20'],
        'username'=>['required']
      ]);

      // $cleanData['password']=bcrypt($cleanData['password']);

      // User::create($cleanData);
    $users=new User();
$users->name=$cleanData['name'];
$users->email=$cleanData['email'];
$users->password=$cleanData['password'];
$users->username=$cleanData['username'];
$users->save();

//login
auth()->login($users);

      return \redirect('/')->with('message','Welcome'.  $users->name);
    }
}

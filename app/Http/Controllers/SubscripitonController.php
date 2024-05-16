<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class SubscripitonController extends Controller
{
    public function toggle(Blog $blog){
        if($blog->isSubscribedBy(auth()->user())){
            $blog->subscribedUsers()->detach(auth()->id());
        }else{
            $blog->subscribedUsers()->attach(auth()->id());
        }
        return \back();
        }

       
    }


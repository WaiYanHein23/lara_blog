<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //blogs index
    public function index(){
        $filters=request(['search','category','user']);
   return view('blogs.index',[
    'blogs'=>Blog::with('category','user')
    ->filter($filters)
    ->latest()
    ->paginate(5)
    ->withQueryString(),
    'categories'=>Category::all()
   ]);
    }


    //blogs show
    public function show(Blog $blog){
        
        return view('blogs.show',[
            'blog'=>$blog
           ]);
    }

}

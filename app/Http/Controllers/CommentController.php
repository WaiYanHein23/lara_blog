<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Blog $blog){

       request()->validate([
        'body'=>['required']
    
       ]);
      $blog->comments()->create([
        'body'=>request('body'),
        'user_id'=>auth()->id()
      ]);
return back();
    }

    //comment edit
    public function edit(Comment $comment){
      return view('comments.edit',[
        'comment'=>$comment
      ]);

    }


    //comment update
    public function update(Comment $comment){
      request()->validate([
        'body'=>['required']
      ]);
$comment->body=request('body');
$comment->save();

return redirect()->route('#blogshow',$comment->blog->slug);

    }


//comment delete
    public function destroy(Comment $comment){
     $comment->delete();
     return back();
    }
}

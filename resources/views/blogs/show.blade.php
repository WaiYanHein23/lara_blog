<x-layout>
<h1><a href="/blogs/{{$blog->slug}}">{{$blog->title}}</a></h1>
 <p>{{$blog->body}}</p>

 <form action="/blogs/{{$blog->slug}}/handle-subscriptions" method="post">
  @csrf
 @if($blog->isSubscribedBy(auth()->user()))
<button class="btn btn-danger m-2" type="submit">UnSubscribe</button>
@else
<button class="btn btn-warning m-2" type="submit">Subscribe</button>
@endif
 </form>


 <div class="container">
  <div class="row">
    <div class="my-3">
      <form action="/blogs/{{$blog->slug}}" method="post">
        @csrf
      
      <textarea name="" id="" cols="30" name='body' rows="10" placeholder="comment here.."></textarea>
      <button class="btn btn-primary mt-3" type="submit">Comment</button>

      </form>
    </div>
    @foreach($blog->comments()->with('user')->orderby('id','desc')->get() as $comment)
  <h4>{{$comment->user->name}}  {{$comment->id}}</h4>
   <p>{{$comment->body}}</p>

   <div class="d-flex">
   <form action="">

<a href="/comments/{{$comment->id}}/edit" class="btn btn-warning mx-3">Edit</a>
</form>

<form action="/comments/{{$comment->id}}" method="post">
@csrf
@method('delete')

<button class="btn btn-danger" type="submit">Delete</button>
</form>
   </div>
   @endforeach
  </div>
 </div>
</x-layout>
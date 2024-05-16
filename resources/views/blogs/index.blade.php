<x-layout>
<div class="container">
   
   <h1 style='text-align: center';>Blog Website</h1>
   <x-categories />
   <form action="">
      <input type="text" name="search" value="{{request('search')}}" placeholder="search.." id="">
      <input type="hidden" name="category" value="{{request('category')}}" id="">
      <button type="submit">search</button>
   </form>


    @if($blogs->count())
   @foreach($blogs as $blog)
 <h1><a href="/blogs/{{$blog->slug}}">{{$blog->title}}</a></h1>
 <p>{{$blog->body}}</p>
 <small>category- <a href="/?category={{$blog->category->slug}}">{{$blog->category->name}}</a> </small>  ||
 username- <a href="/?user={{$blog->user->username}}"><small>{{$blog->user->name}}</small></a>
    @endforeach

   

    {{$blogs->links()}}
   @else
      <h1>Not Found</h1>
   @endif
</div>


</x-layout>
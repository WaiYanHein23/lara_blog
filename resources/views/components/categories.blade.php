
<div class="dropdown">
  <!-- <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu">
   @foreach($categories as $category)
   
   <li><a class="dropdown-item" href="/categories/{{$category->slug}}">{{$category->name}}</a></li>
   
   @endforeach
   </ul> -->
   <button name="" id="" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
@foreach($categories as $category)
<ul>
  <li><a href="/?category={{$category->slug}} {{request('search') ? '&search='.request('search'):''}}">{{$category->name}}</a></li>
</ul>
@endforeach

   </button>

</div>

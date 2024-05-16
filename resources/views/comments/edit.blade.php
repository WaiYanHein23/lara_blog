<x-layout>
 <div class="container">
  <div class="row">
    <div class="my-3">
      <form action="/comments/{{$comment->id}}/update" method="POST">
        @csrf
        @method('patch')
      
      <textarea name="" id="" cols="30" name='body' rows="10" placeholder="text here..">{{$comment->body}}</textarea>
      @error('body')
      <h3 class="text-danger">{{$message}}</h3>
      @enderror
      <button class="btn btn-primary mt-3" type="submit">Update</button>

      </form>
    </div>
  </div>
 </div>
</x-layout>
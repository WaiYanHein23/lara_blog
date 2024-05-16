<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="style.css" />
    </head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <body>
    
       <div class="justify-contents-center d-flex">
       <a href="/" class="nav-link">Home</a>
       <a href="" class="nav-link">Contact</a>

       @if(auth()->check())
       <form action="/logout" method="post">
        @csrf
       <button type="submit" class="btn btn-danger">Logout</button>
       </form>
        @else
        <a href="/login" class="nav-link">Login</a>
        <a href="/register" class="nav-link">Register</a>
       @endif
       </div>
    @if(session()->has('message'))
    <div class="alert alert-success" role="alert">
{{session()->get('message')}}
    </div>
    @endif
{{$slot}}

    </body>
</html>
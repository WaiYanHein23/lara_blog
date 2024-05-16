<x-layout />
<div class="container">
        <h1>Login Form</h1>
        <form action="" method="post">
            @csrf
<label for="">Email:</label>
<input type="email" name="email" value="{{old('email')}}" placeholder="Enter Your Email" id="">
@error('email')
<p class="text-danger">{{$message}}</p>
@enderror
<label for="">Password:</label>
<input type="password" name="password" value="{{old('password')}}" placeholder="Enter Your Password" id="">
@error('password')
<p class="text-danger">{{$message}}</p>
@enderror

<button type="submit">Login</button>

        </form>
</div>
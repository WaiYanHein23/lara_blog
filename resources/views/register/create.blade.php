<x-layout />
<div class="container">
        <h1>Register Form</h1>
        <form action="" method="post">
            @csrf
<label for="">Name:</label>
<input type="text" name="name" value="{{old('name')}}" placeholder="Enter Your Name"  id="">
@error('name')
<p class="text-danger">{{$message}}</p>
@enderror
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
<label for="">User Name:</label>
<input type="text" name="username" value="{{old('username')}}" placeholder="Enter Your UserName"  id="">
@error('username')
<p class="text-danger">{{$message}}</p>
@enderror

<button type="submit">Submit</button>

        </form>
</div>
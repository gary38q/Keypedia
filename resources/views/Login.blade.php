@extends('Layout_G')
@section('Title', "Login")

@section('Isi')

<center>
    <div class="container">
        <img src="{{ url('storage/image/Logo.PNG') }}">
        <strong><div class="h1">Login</div></strong>
        <hr>
        <form action="/Login-Proceed" method="POST" class="text-left">
            @csrf
            <div>
                Email
                <span><input type="email" name="email" class="form-control input-sm" 
                    placeholder="example@mail.com" id="email" value="{{ old('email') }}"></span>
                @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
                <br>
            <div>
                Password
                <span><input type="password" name="password" class="form-control input-sm" placeholder="Password" id="password"></span>
                @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            <br>
            <div>
                <input type="checkbox" name="Remember" id="Remember" value="ingat" class="Checklist"> Remember Me
            </div>
            <br>
            <button type="submit" class="btn-lg" style="width: 100%; background-color: #38b6ff;">Login</button>
        </form>
        <br>
    </div>
</center>

@stop
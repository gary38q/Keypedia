@extends('Layout_G')
@section('Title', "Register")

@section('Isi')

<center>
    <div class="container">
        <strong><div class="h1">Register</div></strong>
        <hr>
        <form action="{{ url('/Register-Proceed') }}" method="POST" class="text-left" enctype="multipart/form-data">
            @csrf
            <div>
                Username 
                <span><input name="username" type="text" placeholder="Enter Your Name" 
                    class="form-control input-sm" id="username" value="{{ old('username') }}" ></span>
                @error('username')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div>
                Email
                <span><input type="email" name="email" placeholder="Enter Your Email" 
                    class="form-control input-sm" id="email" value="{{ old('email') }}"></span>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div>
                Password
                <span><input type="password" name="password" placeholder="Enter Your Password" class="form-control input-sm" id="password"></span>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div>
                Confirm Password
                <span><input type="password" placeholder="Re-Enter Your Password" class="form-control input-sm" id="ConfirmPassword" name="ConfirmPassword"></span>
                @error('ConfirmPassword')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div>
                Address<br>
                <span><textarea name="Address" placeholder="Enter Your Address" 
                    class="form-control input-sm" id="Address" style="resize: none;" value="{{ old('Address') }}"></textarea></span>
                @error('Address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div>
                Gender<br>
                <span><input type="radio" name="Gender" id="RadioM" value="Male">Male 
                <input type="radio" name="Gender" id="RadioF" value="Female">Female</span><br>
                @error('Gender')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div>
                Date of Birth
                <span><input name="DateOfBirth" type="date" class="form-control input-sm" id="DateOfBirth" value="{{ old('DateOfBirth') }}"></span>
                @error('DateOfBirth')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <br>
        
            <br>
            <button type="submit" class="btn-lg" style="width: 100%; background-color: #38b6ff;">Register</button>
        </form><br>
    </center>

@stop
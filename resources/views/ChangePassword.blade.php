@extends('Layout_G')

@section('Title', "Change Password")

@section('Isi')

    <div class="container mt-5 border border-dark">
        <div class="h5 mt-3">
            Change Password
        </div>
        <hr>
        <form action="/ChangePass_Proceed" method="POST">
            @csrf
            <div>
                Your Password
                <span><input type="password" name="Your_password" class="form-control input-sm" placeholder="Your Password" id="Your_password"></span>
                @error('Your_password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>

            <br>

            <div>
                New Password
                <span><input type="password" name="New_password" class="form-control input-sm" placeholder="New Password" id="New_password"></span>
                @error('New_password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>

            <br>

            <div>
                New Confirm Password
                <span><input type="password" name="Confirm_password" class="form-control input-sm" placeholder="New Confirm Password" id="Confirm_password"></span>
                @error('Confirm_password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            <br>
            <button type="submit" class="btn-lg" style="width: 100%; background-color: #38b6ff;">Change Password</button>
        </form>
        <br>
    </div>

@stop
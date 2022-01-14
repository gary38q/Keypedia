<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message="Please Login to Continue Transaction";
            echo "<script type='text/javascript'>alert('$message');
            window.location.replace('/Login');
            </script>";
    }

    public function Before_Login(){
        if(Cookie::has('email')){
            $email = Cookie::get('email');
            $password = Cookie::get('pass');

            $D_email = decrypt($email);
            $D_pass = decrypt($password);
            $user = User::where('Email','=',$D_email)->first();
        if($user){
            if(Hash::check($D_pass, $user->Password)){
                
        session_start();
                $_SESSION['User'] = $user->User_Name;
                $_SESSION['id'] = $user->User_ID;
                $_SESSION['Role'] = $user->Role;

                $message="Login Success";
                echo "<script type='text/javascript'>alert('$message');
                window.location.replace('/Index');
                </script>";
                }
            }
        }
        else{
            return view('/Login');
        }
    }

    public function HapusSession(){
        session_start();
        session_destroy();
        return Redirect::route('Home');
    }

    public function Custom_Login(Request $request)
    {
        session_start();
        $valid = $request->validate([
            'email'         => 'required|email:dns',
            'password'      => 'required',
        ]);    

        $email = $valid['email'];
        $password = $valid['password'];
        $Remember = $request['Remember'];
        $user = User::where('Email','=',$email)->first();
        if($user){
            if(Hash::check($password, $user->Password)){
            $_SESSION['User'] = $user->User_Name;
            $_SESSION['id'] = $user->User_ID;
            $_SESSION['Role'] = $user->Role;

            if($Remember){
                Cookie::queue('email', encrypt($email), 10080);
                Cookie::queue('pass', encrypt($password), 10080);
            }

            
            
            $message="Login Success";
            echo "<script type='text/javascript'>alert('$message');
            window.location.replace('/');
            </script>";
            }
        }

            $message="Login Failed";
            echo "<script type='text/javascript'>alert('$message');
            window.location.replace('/Login');
            </script>";

        // dump($valid);
    }

    public function Custom_Register(Request $request)
    {
        $valid = $request->validate([
            'username'      => 'required|min:5',
            'email'         => 'required|email:dns|unique:users',
            'password'      => 'required|min:8',
            'ConfirmPassword'=> 'required|same:password',
            'Address'       => 'required|min:10',
            'Gender'        => 'required|in:Male,Female',
            'DateOfBirth'   => 'required'
        ]);    

        $User = new User();
        $User->User_Name = $valid['username'];
        $User->Email = $valid['email'];
        $User->Password = Hash::make($valid['password']);
        $User->Address = $valid['Address'];
        $User->Gender = $valid['Gender'];
        $User->HBD = $valid['DateOfBirth'];
        $User->Role = 'User';   
        $User->save();

        // dump($valid);
        $message="Register Success, Please Login";
        echo "<script type='text/javascript'>alert('$message');
        window.location.replace('/Login');
        </script>";
    }

    public function Changepass_Proceed(Request $request){
        session_start();
        $User = User::where('User_ID','=', $_SESSION['id'])->first();

        $valid = $request->validate([
            'Your_password' => 'required',
            'New_password' => 'required|min:8',
            'Confirm_password' => 'required|same:New_password'
        ]);

        $Y_pass = Hash::make($valid['New_password']);

        if (Hash::check($valid['Your_password'], $User->Password)){
            User::where('User_ID','=',$_SESSION['id'])->update(['Password' => $Y_pass]);
            session_destroy();

            $message="Password Changed, Please Login";
            echo "<script type='text/javascript'>alert('$message');
            window.location.replace('/');
            </script>";
        }

        $message="Wrong Password, Please Re Enter Password";
        echo "<script type='text/javascript'>alert('$message');
        history.back();
        </script>";

    }   

    public function Logout(){
        session_start();
        session_destroy();
        Cookie::queue(Cookie::forget('email'));
        Cookie::queue(Cookie::forget('pass'));

        $message="Logout Success";
        echo "<script type='text/javascript'>alert('$message');
        window.location.replace('/');
        </script>";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}

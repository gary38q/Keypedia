<?php

namespace App\Http\Controllers;

use App\Models\Keyboard;
use App\Models\Category;
use App\Http\Requests\StoreKeyboardRequest;
use App\Http\Requests\UpdateKeyboardRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeyboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $key = Keyboard::all();
        // return view('Index')->with('Key', $key);
    }

    public function Custom_keyboard($Key)
    {
        
        session_start();
        $_SESSION['Key'] = $Key;

        $Keyboard = Keyboard::join('categories','keyboards.Category_ID', '=', 'categories.Category_ID')
                    ->where('Category_Name', 'LIKE', $Key)->simplePaginate(8);

        if ($_SESSION['Role'] == "Admin"){
            return view('Admin/ViewKeyboard')->with('Keyboard',$Keyboard);
        }

        else if ($_SESSION['Role'] == "User"){
            return view('Customer/ViewKeyboard')->with('Keyboard',$Keyboard);
        }

        else {return view('Guest/ViewKeyboard')->with('Keyboard',$Keyboard);}
        

    }

    public function Hapus($Key){
        $Hapus = Keyboard::select('*')->where('Keyboard_ID','=',$Key);
        $Hapus->delete();
        $message="Keyboard Deleted";
        echo "<script type='text/javascript'>alert('$message');
        history.back();
        </script>";
    }

    public function ShowKeyboardD($Keys){
        session_start();
        $Detail = Keyboard::select('*')->where('Keyboard_ID','=',$Keys)->first();

        if ($_SESSION['Role'] == "Admin"){
            return view('Admin/KeyboardDetail')->with('Detail',$Detail);
        }

        else if ($_SESSION['Role'] == "User"){
            return view('Customer/KeyboardDetail')->with('Detail',$Detail);
        }

        else {return view('Guest/KeyboardDetail')->with('Detail',$Detail);}
        
    }

    public function UpdateKeyD($Key){
        $Detail = Keyboard::select('*')->where('Keyboard_ID','=',$Key)->first();
        $Cat = Category::all();

        return view('Admin/UpdateKeyboard',compact('Detail','Cat'));
    }

    public function UpdateKey(Request $request, $Key){

        $valid = $request->validate([
            'Category_ID' => 'required|not_in:0',
            'Keyboard_Name' => 'required|min:5',
            'Keyboard_Price' => 'required|min:1',
            'Description' => 'required|min:20'
        ]);

        if($request->file('Image_Link')){
            $valid['Image_Link'] = $request->Image_Link->store('image');
        }
           
        Keyboard::where('Keyboard_ID','=',$Key)->update($valid);
        
        $message="Update Keyboard Success";
            echo "<script type='text/javascript'>alert('$message');
            history.back();
            </script>";
    }

    public function AddKeyboardView(){
        $Cat = Category::all();

        return view('Admin.AddKeyboard',compact('Cat'));
    }

    public function AddKeyboard(Request $request){
        $valid = $request->validate([
            'Category' => 'required|not_in:0',
            'Keyboard_Name' => 'required|unique:keyboards|min:5',
            'KeyboardPrice' => 'required|min:1',
            'Description' => 'required|min:20',
            'Image' => 'required'
        ]);
       
        $valid['Image'] = $request->Image->store('image');

        $keyboard = new Keyboard();
        $keyboard->Category_ID = $valid['Category'];
        $keyboard->Keyboard_Name = $valid['Keyboard_Name'];
        $keyboard->Keyboard_Price = $valid['KeyboardPrice'];
        $keyboard->Description = $valid['Description'];
        $keyboard->Image_Link = $valid['Image'];
        $keyboard->save();

            $message="Add New Keyboard Success";
            echo "<script type='text/javascript'>alert('$message');
            window.location.replace('/Index');
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
     * @param  \App\Http\Requests\StoreKeyboardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKeyboardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keyboard  $keyboard
     * @return \Illuminate\Http\Response
     */
    public function show(Keyboard $keyboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keyboard  $keyboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Keyboard $keyboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKeyboardRequest  $request
     * @param  \App\Models\Keyboard  $keyboard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKeyboardRequest $request, Keyboard $keyboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keyboard  $keyboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keyboard $keyboard)
    {
        //
    }
}

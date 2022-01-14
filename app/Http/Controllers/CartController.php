<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\History;
use App\Models\HistoryDetail;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function AddCart(Request $request, $Key){

        session_start();

        if($request['Quantity'] == null){
            $request['Quantity'] = 1;
        }

        $Cart = new Cart();
        $Cart->User_ID = $_SESSION['id'];
        $Cart->Keyboard_ID = $Key;
        $Cart->Quantity = $request['Quantity'];
        $Cart->save();

        $message="Added to Cart";
            echo "<script type='text/javascript'>alert('$message');
            window.location.replace('/');
            </script>";
    }

    public function Cart_Display(){

        session_start();

        $kereta = Cart::join('keyboards', 'carts.Keyboard_ID', '=', 'keyboards.Keyboard_ID')
                    ->where('carts.User_ID','=', $_SESSION['id'])->get();

        return view('Customer/MyCart')->with('kereta',$kereta);
        
    }

    public function Cart_U(Request $request, $Key){
        if($request['Quantity'] == 0){
            $Hapus = Cart::select('*')->where('Cart_ID','=',$Key);
            $Hapus->delete();
        }
        else{
            Cart::where('Cart_ID','=',$Key)->update(['Quantity' => $request['Quantity']]);
        }

        return redirect()->back();
    }

    public function Checkout(){
        
        session_start();

        $History = new History();
        $History->User_ID = $_SESSION['id'];
        $History->save();

        $lastID = $History->id;
        return redirect()->route('InsertData',$lastID);
    }

    public function Checkout_D($Key){
        $cart = Cart::all();
        foreach($cart as $cart){    
            
            HistoryDetail::insert(['History_ID' => $Key,
            'Keyboard_ID' => $cart->Keyboard_ID,
            'Quantity' => $cart->Quantity]);
            Cart::where('Cart_ID','=',$cart->Cart_ID)->delete();
        }
        
        $message="Checkout Success";
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
     * @param  \App\Http\Requests\StoreCartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCartRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCartRequest  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}

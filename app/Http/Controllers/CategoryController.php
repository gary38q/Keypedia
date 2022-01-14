<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Cart;
use App\Models\HistoryDetail;
use App\Models\Keyboard;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        session_start();
        if(!isset($_SESSION['Role']) && empty($_SESSION['Role'])){
        $_SESSION['Role'] = '';
        }

        $Cat = Category::all();
        return view('Index',compact('Cat'));
    }

    public static function Cat_Nav(){
        $Cat = Category::all();
        // dd($Cat);
        return $Cat;
    }

    public function Manage()
    {

        session_start();
        if(!isset($_SESSION['Role']) && empty($_SESSION['Role'])){
        $_SESSION['Role'] = '';
        }

        $Cat = Category::all();
        return view('Admin/ManageCategory')->with('Cat', $Cat);
    }

    public function D_Cat($Key){
        $Hapus = Category::select('*')->where('Category_ID','=',$Key);
        $HapusPertama = Keyboard::select('*')->where('Category_ID','=',$Key);
        $HapusPalingPertama = Cart::select('*')
                                ->join('keyboards','carts.Keyboard_ID','=','keyboards.Keyboard_ID')
                                ->where('keyboards.Category_ID','=', $Key);
        $HapusBeneranPalingPertama= HistoryDetail::select('*')
                                ->join('keyboards','history_details.Keyboard_ID','=','keyboards.Keyboard_ID')
                                ->where('keyboards.Category_ID','=', $Key);                        
        $HapusBeneranPalingPertama->delete();
        $HapusPalingPertama->delete();         
        $HapusPertama->delete();
        $Hapus->delete();
        $message="Category Deleted";
        echo "<script type='text/javascript'>alert('$message');
        history.back();
        </script>";
    }

    public function U_CatD($Key){
        $Cat = Category::select('*')->where('Category_ID','=',$Key)->first();
        return view('Admin/UpdateCategory')->with('Cat',$Cat);
    }

    public function U_Cat(Request $request, $Key){
        
        $valid = $request->validate([
            'Category_Name' => 'required|unique:categories|min:5'
        ]);

        if($request->file('Category_Image')){
            $valid['Category_Image'] = $request->Category_Image->store('image');
        }

        Category::where('Category_ID','=',$Key)->update($valid);
        
        $message="Update Category Success";
            echo "<script type='text/javascript'>alert('$message');
            history.back();
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
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}

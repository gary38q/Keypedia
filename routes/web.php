<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KeyboardController;
use App\Http\Controllers\HistoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [CategoryController::class, 'Index'])->name('Home');

Route::get('/Index', [CategoryController::class, 'Index']);

Route::get('/Hapus-Session',[UserController::class, 'HapusSession']);

Route::get('/Login', [UserController::class, 'Before_Login']);

Route::get('/Register', function () {
    return view('Register');
});
Route::get('/ChangePass', function(){
    return view('ChangePassword');
});

Route::post('/ChangePass_Proceed', [UserController::class, 'Changepass_Proceed']);

Route::get('/AddKeyboard', [KeyboardController::class, 'AddKeyboardView']);

Route::post('/AddKeyboard-Proceed', [KeyboardController::class, 'AddKeyboard']);

Route::post('/Register-Proceed', [UserController::class, 'Custom_Register']);

Route::post('/Login-Proceed', [UserController::class, 'Custom_Login']);

Route::get('/GotoLogin', [UserController::class,'index']);

Route::get('/Logout', [UserController::class, 'Logout']);

Route::get('/History', [HistoryController::class, 'History_D']);

Route::get('/History/Detail/{id}', [HistoryController::class, 'History_Detail']);

Route::get('/MyCart', [CartController::class, 'Cart_Display']);

Route::post('/MyCart/Update/{id}', [CartController::class, 'Cart_U']);

Route::get('/MyCart/Checkout', [CartController::class, 'Checkout']);

Route::get('/MyCart/Checkout/Insert/{id}', [CartController::class, 'Checkout_D'])->name("InsertData");

Route::get('/ManageCat', [CategoryController::class, 'Manage']);

Route::get('/ManageCat/Delete/{id}', [CategoryController::class, 'D_Cat']);

Route::get('/ManageCat/Update/{id}', [CategoryController::class, 'U_CatD']);

Route::post('/ManageCat/Updating/{id}', [CategoryController::class, 'U_Cat']);

Route::get('/Category/{id}',[KeyboardController::class, 'Custom_keyboard']);

Route::get('/Category/Delete/{id}', [KeyboardController::class, 'Hapus']);

Route::get('/Category/Keyboard/{id}', [KeyboardController::class, 'ShowKeyboardD']);

Route::get('/Category/Keyboard/Update/{id}', [KeyboardController::class, 'UpdateKeyD']);

Route::post('/Category/Keyboard/Update/Proceed/{id}', [KeyboardController::class, 'UpdateKey']);

Route::post('/Category/Keyboard/AddCart/{id}', [CartController::class, 'AddCart']);
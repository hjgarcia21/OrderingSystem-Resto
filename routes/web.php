<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

route::get('/',[HomeController::class,'home']);

route::get('/dashboard',[HomeController::class,'login_home'])
->middleware(['auth', 'verified'])->name('dashboard');;
route::get('/myorders',[HomeController::class,'myorders'])
->middleware(['auth', 'verified'])->name('auth.admin');;


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);
route::get('view_category',[AdminController::class,'view_category'])->middleware(['auth','admin']);
route::post('add_category',[AdminController::class,'add_category'])->middleware(['auth','admin']);
route::get('delete_category/{id}',[AdminController::class,'delete_category'])->middleware(['auth','admin']);
route::get('edit_category/{id}',[AdminController::class,'edit_category'])->middleware(['auth','admin']);
route::post('update_category/{id}',[AdminController::class,'update_category'])->middleware(['auth','admin']);


route::get('add_food',[AdminController::class,'add_food'])->middleware(['auth','admin']);
route::post('upload_food',[AdminController::class,'upload_food'])->middleware(['auth','admin']);
route::get('view_food',[AdminController::class,'view_food'])->middleware(['auth','admin']);
route::get('delete_food/{id}',[AdminController::class,'delete_food'])->middleware(['auth','admin']);
route::get('update_food/{id}',[AdminController::class,'update_food'])->middleware(['auth','admin']);
route::post('edit_food/{id}',[AdminController::class,'edit_food'])->middleware(['auth','admin']);
route::get('food_search',[AdminController::class,'food_search'])->middleware(['auth','admin']);


//homefor products


route::get('add_cart/{id}',[HomeController::class, 'add_cart'])
->middleware(['auth', 'verified']);

route::get('mycart',[HomeController::class, 'mycart'])
->middleware(['auth', 'verified']);

route::get('delete_cart/{id}',[HomeController::class,'delete_cart'])->middleware(['auth','verified']);


//orders
route::post('confirm_order',[HomeController::class,'confirm_order'])->middleware(['auth','verified']);
route::get('view_order',[AdminController::class,'view_order'])->middleware(['auth','admin']);


//status confirmation

route::get('on_the_way/{id}',[AdminController::class,'on_the_way'])->middleware(['auth','admin']);

route::get('delivered/{id}',[AdminController::class,'delivered'])->middleware(['auth','admin']);

route::get('contactus',[HomeController::class, 'contactus']);
route::get('store',[HomeController::class, 'store']);
route::get('aboutus',[HomeController::class, 'aboutus']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminDashbordController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\CustomerController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::middleware('auth')->group(function(){

    Route::get('/table', function () {
        return view('table');
    
    });
    
    //admin dashbord
    Route::get('/admin',[AdminDashbordController::class,'admindashbord'])->name('admin.dashbord');
    
    
    
    //product route
    Route::prefix('product')->group(function () {
        Route::get('/index',[ProductController::class,'index'])->name('product_index');
        Route::get('/create',[ProductController::class,'create'])->name('product_create');
        Route::post('/store',[ProductController::class,'store'])->name('product_store');
        Route::get('/show/{id}',[ProductController::class,'show'])->name('product_show');
        Route::get('/edit/{id}',[ProductController::class,'edit'])->name('product_edit');
        Route::post('/update/{id}',[ProductController::class,'update'])->name('product_update');
        Route::get('/delete/{id}',[ProductController::class,'destroy'])->name('product_delete');
    });

    //customer

    Route::prefix('customer')->group(function () {
        Route::get('/index',[CustomerController::class,'index'])->name('customer.index');
        Route::get('/create',[CustomerController::class,'create'])->name('customer.create');
        Route::post('/store',[CustomerController::class,'store'])->name('customer.store');
        Route::get('/show/{id}',[CustomerController::class,'show'])->name('customer.show');
        Route::get('/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
        Route::post('/update/{id}',[CustomerController::class,'update'])->name('customer.update');
        Route::get('/delete/{id}',[CustomerController::class,'destroy'])->name('customer.delete');
    });
    
    
    
    //category route
    Route::prefix('category')->group(function () {
        Route::get('/index',[CategoryController::class,'index'])->name('category_index');
        Route::get('/create',[CategoryController::class,'create'])->name('category_create');
        Route::post('/store',[CategoryController::class,'store'])->name('category_store');
        Route::get('/show/{id}',[CategoryController::class,'show'])->name('category_show');
        Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('category_edit');
        Route::post('/update/{id}',[CategoryController::class,'update'])->name('category_update');
        Route::get('/delete/{id}',[CategoryController::class,'destroy'])->name('category_delete');
    
        Route::get('/category_export',[CategoryController::class,'export'])->name('category_export');
    
        //trashlist 
        Route::get('/trashlist',[CategoryController::class,'trashlist'])->name('category_trashlist');
        Route::get('/restore/{id}',[CategoryController::class,'restore'])->name('category_restore');
        Route::get('/deleterestore/{id}',[CategoryController::class,'delete'])->name('category_restore_delete');
    
        //pdf
        Route::get('/pdf',[PdfController::class,'categoryPdf'])->name('category_pdf');
    });
    
    //brand route
    Route::prefix('brand')->group(function () {
        Route::get('/index',[BrandController::class,'index'])->name('brand_index');
        Route::get('/create',[BrandController::class,'create'])->name('brand_create');
        Route::post('/store',[BrandController::class,'store'])->name('brand_store');
        Route::get('/show/{id}',[BrandController::class,'show'])->name('brand_show');
        Route::get('/edit/{id}',[BrandController::class,'edit'])->name('brand_edit');
        Route::post('/update/{id}',[BrandController::class,'update'])->name('brand_update');
        Route::get('/update/{id}',[BrandController::class,'destroy'])->name('brand_delete');
    });
    //color route
    Route::prefix('color')->group(function () {
        Route::get('/index',[ColorController::class,'index'])->name('color_index');
        Route::get('/create',[ColorController::class,'create'])->name('color_create');
        Route::post('/store',[ColorController::class,'store'])->name('color_store');
        Route::get('/show/{id}',[ColorController::class,'show'])->name('color_show');
        Route::get('/edit/{id}',[ColorController::class,'edit'])->name('color_edit');
        Route::post('/update/{id}',[ColorController::class,'update'])->name('color_update');
        Route::get('/update/{id}',[ColorController::class,'destroy'])->name('color_delete');
    });
});



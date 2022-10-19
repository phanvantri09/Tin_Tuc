<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImgController;
use App\Models\ImgModel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::group(['prefix'=>'admin'], function(){
    Route::get('/tong-quang',[ContentController::class,'tongquang'])->name("tongquang");
    Route::group(['prefix'=>'category'], function(){
        Route::get('list',[CategoryController::class,'getlist']);
        Route::get('add',[CategoryController::class,'getadd']);
        Route::post('add',[CategoryController::class,'postadd']);
        Route::get('edit/{id}',[CategoryController::class,'getedit']);
        Route::post('edit/{id}',[CategoryController::class,'postedit']);
        Route::get('delete/{id}',[CategoryController::class,'getdelete']);
    });
    Route::group(['prefix'=>'user'], function(){
        Route::get('list',[UserController::class,'getlist'])->name("listUsers");
        Route::get('add',[UserController::class,'getadd'])->name("addUsers");
        Route::post('add',[UserController::class,'postadd'])->name("addUsersPost");
        Route::get('edit/{id}',[UserController::class,'getedit'])->name("editUsers");
        Route::post('edit/{id}',[UserController::class,'postedit'])->name("editUsersPost");
        Route::get('delete/{id}',[UserController::class,'getdelete'])->name("deleteUsers");
    });
    Route::group(['prefix'=>'content'], function(){
        Route::get('list',[ContentController::class,'getlist']);
        Route::get('add',[ContentController::class,'getadd']);
        Route::post('add',[ContentController::class,'postadd']);
        Route::get('edit/{id}',[ContentController::class,'getedit']);
        Route::post('edit/{id}',[ContentController::class,'postedit']);
        Route::get('delete/{id}',[ContentController::class,'getdelete']);
    });
    Route::group(['prefix'=>'image'], function(){
        Route::get('list',[ImgController::class,'getlist']);
        Route::get('add',[ImgController::class,'getadd']);
        Route::post('add',[ImgController::class,'postadd']);
        Route::get('edit/{id}',[ImgController::class,'getedit']);
        Route::post('edit/{id}',[ImgController::class,'postedit']);
        Route::get('delete/{id}',[ImgController::class,'getdelete']);
    });
});

Route::get('/dang-nhap',[HomeController::class,'login'])->name("login");
Route::get('/dang-ky',[HomeController::class,'register'])->name("register");
Route::post('post-login',[HomeController::class,'postlogin'])->name("postlogin");
Route::post('post-register',[HomeController::class,'postregister'])->name("postregister");
Route::get('/dang-xuat',[HomeController::class,'logout'])->name("logout");
Route::group(['prefix'=>'trangchu'], function(){
    
    Route::get('/',[HomeController::class,'home'])->name("home");
    Route::get('/tim-kiem',[HomeController::class,'search'])->name("search");
    Route::get('/{title}/{id}',[HomeController::class,'content'])->name("content");
    Route::get('/loai-tin/the{id}loai/{name}',[HomeController::class,'tabcontent'])->name("tabcontent");
    Route::POST('/cmt',[HomeController::class,'cmt'])->name("cmt");
    Route::get('deletecmt/get/{id}',[HomeController::class,'deletecmt'])->name("deleteCmt");
    Route::POST('/editCmt/get/post/{id}',[HomeController::class,'editCmt'])->name("editCmt");
});
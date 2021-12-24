<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Back\ArticleController;
use App\Http\Controllers\Back\AdminPageController;
use App\Http\Controllers\Back\AuthController;
use App\Http\Controllers\Front\FrontController;


//BACK-END



Route::prefix('admin')->name('admin.')->middleware('isLogin')->group(function () {
    
    Route::get('login' ,[AuthController::class,'login'])->name('login');
    Route::post('login' ,[AuthController::class,'loginPost'])->name('login.post');

});
Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function () {
    

    Route::get('/' ,[AdminPageController::class,'index'])->name('dashboard');
    //CRUD
    Route::get('articles' ,[ArticleController::class,'articles'])->name('articles');
    Route::get('create' ,[ArticleController::class,'create'])->name('create');
    Route::post('create' ,[ArticleController::class,'createPost'])->name('create.post'); 
    Route::get('update/{id}' ,[ArticleController::class,'update'])->name('update');
    Route::post('update/{id}' ,[ArticleController::class,'updatePost'])->name('update.post'); 
    Route::get('delete/{id}',[ArticleController::class,'destroy'])->name('destroy');

    Route::get('articles',[ArticleController::class,'show'])->name('articles');



    Route::get('logout' ,[AuthController::class,'logout'])->name('logout');

});






//FRONT

Route::get('/',[ArticleController::class,'index'])->name('index');
Route::get('/article',[FrontController::class,'article'])->name('article');
Route::get('content/',[ArticleController::class,'contentView'])->name('content.view');





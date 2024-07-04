<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\TestController;
use Illuminate\Routing\RouteGroup;

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::resource('test', TestController::class);




//Route::group(['middleware'=> 'auth'],function(){
  Route::resource('/', PostController::class)->names([
    'index' => 'posts.index',
    'create' => 'posts.create',
    'store' => 'posts.store',
    'show' => 'posts.show',
  ]);
  
  Route::delete('/posts/{id}', 'App\Http\Controllers\PostController@destroy')->name('posts.destroy');
  Route::get('/posts/{id}', [PostController::class, 'show']);  
  Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
  Route::get('registration', [AuthController::class, 'registration'])->name('register');
  Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
  Route::get('dashboard', [AuthController::class, 'dashboard']); 
  Route::get('logout', [AuthController::class, 'logout'])->name('logout'); 
  Route::get('/posts', [PostController::class, 'index'])->name('auth');
  Route::get('/posts/{id}', [PostController::class, 'show']);
  Route::post('/posts', [PostController::class, 'store'])->name('auth');
  Route::resource('details', DetailController::class);
  Route::resource('test', TestController::class);

  
//});



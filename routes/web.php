<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Post;


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::resource('test', TestController::class);




//Route::group(['middleware'=> 'auth'],function(){
  Route::resource('/', PostController::class)->names([
    'index' => 'posts.index',
    'create' => 'posts.create',
    'store' => 'posts.store',
    'show' => 'posts.show',
  ]);
  
  Route::delete('/details/{id}', [DetailController::class, 'destroy'])->name('details.destroy');
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
  Route::get('/home', [PostController::class, 'index'])->name('home');
  Route::get('/posts', 'PostController@index')->name('post.index');
  Route::get('/description',[PostController::class,'description']);
  Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
  Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

  Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
  Route::get('/register', [RegisterController::class,'showRegistrationForm'])->name('register');
  
  Route::post('/register', [RegisterController::class,'register']);//->name('register.post');
  Route::resource('posts', PostController::class);
  Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
  Route::get('/posts/edit/{id}', [PostController::class, 'edit'])
    ->middleware('admin');

// Apply middleware to a group of routes
Route::middleware('admin')->group(function () {
    Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->middleware('auth');
    Route::delete('/posts/{id}', [PostController::class, 'destroy'])->middleware('auth');
});
  
 // Route::get('/dashboard', [DashboardController::class,'index')->middleware('auth');
  



  
//});



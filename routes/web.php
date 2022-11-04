<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Mail\TestMail;
//laravel-9.test =>welcome
//laravel-9.test/contacto => contac
//laravel-9.test/blog => blog
//laravel-9.test/acerca-de-mi => about

Route::view('/','welcome')->name('home');
Route::view('/contacto','contacto')->name('contacto');

Route::get('/blog',[PostController::class,'index'])->name('posts.index');
Route::get('/blog/create',[PostController::class,'create'])->name('posts.create');#usado para mandar info
Route::post('/blog',[PostController::class,'store'])->name('posts.store');#usado para almacenar
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('posts.destroy');

Route::get('/blog/{post}',[PostController::class,'show'])->name('posts.show');#usado para ver datos
Route::get('/blog{post}/edit',[PostController::class,'edit'])->name('posts.edit');#usado para ver l opcion de editar
Route::patch('/blog{post}',[PostController::class,'update'])->name('posts.update');
Route::view('/about','about')->name('about');

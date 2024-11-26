<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', HomeController::class, 'index');

Route::get('/post', [PostController::class, 'index']);
Route::get('/post/create', [PostController::class, 'create']);
Route::get('/post/{post}', [PostController::class, 'show']);

// "$post, es un contenido variable (Puede cambiar)"
// Route::get('/post/{post}', function($post){
// });

// Route::get('/post/{post}/{category?}', function($post, $category = null){

//     if($category){
//         return "Aquí se mostrará el post {$post} de la categoría {$category}";
//     }

//     return "Aquí se mostrará el post {$post}";
// });


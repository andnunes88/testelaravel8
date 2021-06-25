<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/posts', [PostController::Class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

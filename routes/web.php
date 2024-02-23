<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Jobsheet 2 - Praktikum 1*/

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'NIM : 2241720166 | Nama : Dyinastie Marchelina Puspitawening';
});

/* Jobsheet 2 - Praktikum 2*/

Route::get('user/{Dyinastie}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/post/{post1}/comments/{comment5}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

Route::get('/articles/{article4}', function ($id) {
    return 'Halaman artikel dengan ID ' . $id;
});

/* Jobsheet 2 - Praktikum 3*/

Route::get('/user/{name?}', function ($name = null) {
    return 'Nama saya ' . $name;
});

Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

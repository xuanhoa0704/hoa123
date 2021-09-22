<?php

use Illuminate\Support\Facades\Route;

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
    return view('admin.auth.login');
});
Route::get('/admin/login', function () {
    return view('admin.auth.login');
});
Route::get('/login', function () {
    return view('web.auth.login');
});
Route::get('/register', function () {
    return view('web.auth.regis');
});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/ecom', function () {
    return view('web.ecom');
});
Route::get('/admin/addticket', function () {
    return view('admin.addtic.addtic');
});
Route::get('/admin/detailtic', function () {
    return view('admin.addtic.detailaddtic');
});
Route::get('/admin/addbus', function () {
    return view('admin.addbus');
});
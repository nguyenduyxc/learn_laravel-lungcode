<?php

use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

// route kieu cu(lrv 7x)
Route::get('/blog', 'HomeController@index');

// route kieu 8x 
Route::get('blog2', [HomeController::class, 'index']);

Route::get('/test', function () {
    $name = 'Day la name';
    $arr = ['a', 'b', 'c'];
    return view('test', compact('name', 'arr'));
});


// category   
Route::get('/category', 'CategoryController@index')->name('category.index');
Route::get('/category/{id}', 'CategoryController@show')->name('category.show');

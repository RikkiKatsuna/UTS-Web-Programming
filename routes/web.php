<?php

use App\Http\Controllers\ItemController;
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
    return view('TopResellerHome');
});
Route::get("/", [ItemController::class, "showItems"]);

Route::get("/detailItem/{item:id}", [ItemController::class, "detailItem"]);

Route::get('/CategoryShirt', function () {
    return view('TopResellerCategoryShirt');
});
Route::get('/CategoryBag', function () {
    return view('TopResellerCategoryBag');
});
Route::get('/CategoryShoes', function () {
    return view('TopResellerCategoryShoes');
});
Route::get('/CategoryDress', function () {
    return view('TopResellerCategoryDress');
});
Route::get('/Top5Brands', function () {
    return view('TopResellerTop5Brands');
});
Route::get('/AboutUs', function () {
    return view('TopResellerAboutUs');
});

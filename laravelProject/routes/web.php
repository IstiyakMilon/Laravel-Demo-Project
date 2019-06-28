<?php

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

// Route::get('pricefilter/{max}/{min?}', function($max, $min=0){
//     echo 'Price is '.'Max= '.$max.' Min= '.$min; 
// });

// Route::get('sayHello/{age}','Hellocontroller@index')->where(['age'=>"[0-9]+"]);

// Route::get('sayhello', function () {
//     return view('hello');
// })->middleware('test');

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('hello', 'Hellocontroller@index');
Route::get('/contact', 'ContactController@index');
Route::post('/contactform', 'ContactController@store')->name('contactstore');

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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('about',['as'=>'about','uses'=> 'aboutController@showText']);
Route::get('simple_array', function(){
	return view('simple_array');
});
Route::get('Array_of_object',function(){
	return view ('Array_of_object');
});

Route::get('Make_a_object',function(){
	return view('Make_a_object');
});
Route::get('covert_array_to_object',function(){
	return view('covert_array_to_object');
});

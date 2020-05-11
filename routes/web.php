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

//Route::get('/', function () {

	//return request('ingredient'); este pentru cerere , cand face in pagina http:127...?ingredient=somon
	//$ingredient = request ('ingredient');  //salvez cererea de somon intro variabila
	//$number = request ('number');          //salvez cerereade numar intro variabila numar


    //return view('welcome', [
    	//'ingredient' => $ingredient,   //primul parametru este numele(welcome), al doila este un rei 							            reY asociativ
    	//'number' => $number,



    //]);                                 
//});

//Route::get('/contact','SushiController@contact');
//Route::get('/about','SushiController@about');
Route::get('/','SushiController@index');

//Route::get('/about', function () {    //se poate scrie si mai frumos cu o difinitei a frameworkului
	//return view('about');
//
//});
Route::view('/about', 'about');

//Route::view('contact', 'contact');
	

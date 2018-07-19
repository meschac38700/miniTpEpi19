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
use App\Event;
Route::get('/events', function()
{
	/*Event::create([
		'name'		 =>'Super concert de Saga Love',
		'description'=> 'Super concert de Saga love à ne pas rater',
		'price'		 => 20,
		'location'	 => 'Paris'
	]);
	Event::create([
		'name'		 =>'Symfony conference',
		'description'=> 'Une conférence sur symfony avec Honoré Hounouanou à ne pas rater ! ',
		'price'		 => 15,
		'location'	 => 'Paris'
	]);*/
	$events = Event::all();
	return view('/pages/events', compact('events'));
});

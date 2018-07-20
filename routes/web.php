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
		'name'		 =>'Toto',
		'description'=> 'Description Toto',
		'price'		 => 0,
		'location'	 => 'Dubai',
		'starts_at'	 => new DateTime('+5 days')
	]);
	Event::create([
		'name'		 =>'Tata',
		'description'=> 'Description Tata',
		'price'		 => 0,
		'location'	 => 'Lyon',
		'starts_at'	 => new DateTime('+10 hours')
	]);

*/
	/*Event::destry([3,4]); // supprimer les events avec id 3 et 4 dans la base*/
	$events = Event::all();
	return view('/pages/events', compact('events'));
});

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	//
    public $timestamps= false;
 	//Ples attributs qui seront transformés en type Carbon => qui est l'équivalent de DateTime mais amelioré
 	//protected $dates = [ 'starts_at'];
	
	// Avec le casts on peut convertir un attributs en plusieurs differents autres types tels que : iinteger, double, string, boolean, array, date, dateTime, timestamp, real, float, object, collection 
    protected  $casts = [
    	'starts_at' => 'DateTime'
    ];

	//Les attributs dont on a le droit de modifier dans la base de données
	protected $fillable = ['name', 'description', 'price', 'location', 'starts_at']; 

	public function isFree(  )
	{
		return $this->price == 0;
	}
}

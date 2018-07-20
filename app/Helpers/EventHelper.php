<?php

namespace  App\Helpers;

class EventHelper
{

	public static function formatPrice( $event )
	{
		if( $event->isFree( ) )
		{
			return '<strong>GRATUIT</strong>'; 
		}
		else
		{
			return sprintf('%.2f Euros', $event->price);
		}
	}


	public static function formatDate( $date )
	{
		return $date->format('d/m/Y H:i');
	}

}
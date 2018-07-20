<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
</head>
<body>
	<h1>{{ $events->count()}} - Events</h1>

	<ul>
		@foreach($events as $event)
			<article>
				<h3>{{ $event->name }}</h3>
				<p>{{ $event->description}}</p>
				<p>Prix: {!! App\Helpers\EventHelper::formatPrice( $event ) !!} </p>
				<p>Lieu: {{ $event->location }}</p>
				<p>Date: {{ App\Helpers\EventHelper::formatDate( $event->starts_at ) }}</p>
				{{-- <p>Date: {{ (new DateTime($event->starts_at))->format('d/m/Y H:i') }} </p> --}}
			</article>
			@if ( !$loop->last )
				<hr>
			@endif
		@endforeach		
	</ul>

</body>
</html>
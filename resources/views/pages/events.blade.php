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
				<p>{{ $event->location }}</p>
				<p>Lieu: {{ $event->price }} euros</p>
			</article>
			@if ( !$loop->last )
				<hr>
			@endif
		@endforeach		
	</ul>

</body>
</html>
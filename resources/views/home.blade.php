@extends('layouts.app')

@section('content')
	<h1>Home</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque facere, natus ex, enim doloribus pariatur vero earum. Dicta quidem incidunt rerum eveniet voluptates error necessitatibus nobis rem deserunt. A, maxime.</p>
@endsection

@section('sidebar')
	@parent
	<p>Esto está o sustituye al sidebar</p>
	{{--@parent   En el caso que queramos que muestre el parent, en este caso el sidebar lo ponemos
	De no haber un @show en el layout, no mostraría esto y, mostraría el layout--}}
@endsection 
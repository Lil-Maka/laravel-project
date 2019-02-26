@extends('layouts.app')

@section('content')
	<h1>Home</h1>
	Pruebas extras
@endsection

@section('sidebar')
	@parent
	<p>Esto está o sustituye al sidebar</p>
	{{--@parent   En el caso que queramos que muestre el parent, en este caso el sidebar lo ponemos
	De no haber un @show en el layout, no mostraría esto y, mostraría el layout--}}
@endsection
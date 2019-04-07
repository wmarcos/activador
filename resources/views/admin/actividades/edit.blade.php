@extends("admin.layout")

@section('title')
Editar actividad {{ $actividad->nombre }}
@endsection('title')
	
@section("content")
	
	
	<h1 class="title">{{ __(('admin.editar')) }}: {{ $actividad->nombre }}</h1>

	<form method="POST" action="/admin/actividades/{{ $actividad->id }}" >
		
		{{ method_field('PATCH') }}

		@include("admin.actividades.form", [ 'deshabilitado' => false ])

		<input type="submit" class="button is-link" value="{{ __(('admin.editar')) }}" ></input>

	</form>

	<p><a href="/admin/actividades">{{ __(('admin.atras')) }}</a></p>

@endsection("content")
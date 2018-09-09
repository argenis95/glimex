@extends('layouts.master')

@section('title', 'Acceder')

@section('content')
@if (Auth::check()==false)
<div class="card text-dark bg-light mb-3 p-3 text-center">
	<div class="card-header bg-primary">
		<p>Iniciar sesión</p>
	</div>
	<form method="POST" action="/login">
		<div class="card-body">
			<div class="row p-3">
				<div class="col-md-6">
					Email
				</div>
				<div class="col-md-6">
					<input type="email" class="form-control" name="email" placeholder="Correo" required/>
				</div>
			</div>
			<div class="row p-3">
				<div class="col-md-6">
					Contraseña
				</div>
				<div class="col-md-6">
					<input type="password" class="form-control" name="password" placeholder="Contraseña" required/>
				</div>
			</div>
			<div class="row p-3">
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary btn-lg">Acceder</button>
				</div>
			</div>	
	</form>
	<div>
		<div class="card-body"><a href="/password_recovery">¿Olvidó su contraseña?</a></div>
	</div>
</div>	
@else
<div class="p-4 container">
		<h1 class="text-dark p-4">Ir a inicio</h1>
</div>
@endif





@endsection

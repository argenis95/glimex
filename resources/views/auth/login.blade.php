@extends('layouts.master')

@section('title', 'Acceder')

@section('content')
@if (Auth::check()==false)
<div class="p-4 container">
	<h1 class="text-dark">Iniciar sesión</h1>
    <div class="services_content row">
		<form class="col-6" method="POST" action="login">
			<div class="form-group">
				<input type="email" class="form-control" name="email" placeholder="Correo" required/>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password" placeholder="Contraseña" required/>
			</div>
			<button type="submit" class="btn btn-primary btn-lg">Acceder</button>
		</form>
	</div>
</div>	
@else
<div class="p-4 container">
		<h1 class="text-dark p-4">Ir a inicio</h1>
</div>
@endif






<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

@endsection

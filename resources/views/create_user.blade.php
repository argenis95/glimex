@extends('layouts.master')

@section('title', 'Crear usuario')

@section('content')

<div class="p-4 container">
    <h1 class="text-dark pb-4">Registro</h1>
    <div class="services_content">
        <form  method="POST" action="user_management">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Nombres" required/>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="last_name" placeholder="Apellidos" required/>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Correo" required/>
            </div>
            <div class="form-group">
                <span class="text-dark pr-3">Seleccione el tipo de usuario:</span>
                <select name="user_type">
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
        </form>
    </div>
</div>
@endsection
    	
@extends('layouts.master')

@section('title', 'Editar usuario')

@section('content')

<div class="p-4 container">
    <h1 class="text-dark pb-4">Editar Usuario</h1>
    <div class="services_content">
        <form  method="PUT" action="user_management">
            <div class="form-group">
                <input type="text" class="form-control" name="name" value="{{$user['name']}}" placeholder="Nombres"/>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="last_name" value ="{{$user['last_name']}}" placeholder="Apellidos"/>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" value ="{{$user['email']}}" placeholder="Correo"/>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Contraseña" required/>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Repetir contraseña" required/>
            </div>
            <div class="form-group">
                <span class="text-dark pr-3">Seleccione el tipo de usuario:</span>
                <select name="user_type">
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
        </form>
    </div>
</div>
@endsection
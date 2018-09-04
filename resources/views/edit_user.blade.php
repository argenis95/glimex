@extends('layouts.master')

@section('title', 'Editar usuario')

@section('content')

<div class="p-4 container">
    <h1 class="text-dark pb-4">Editar Usuario</h1>
    <div class="services_content">
        <form  method="POST" action="/user_management/{id}">
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <input type="text" class="form-control" name="name" value="{{$user['name']}}" placeholder="Nombres" required/>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="last_name" value ="{{$user['last_name']}}" placeholder="Apellidos" required/>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" value ="{{$user['email']}}" placeholder="Correo" required/>
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" name="user_id" value ="{{$user['id']}}" required/>
            </div>
            <div class="form-group">
                <span class="text-dark pr-3">Seleccione el tipo de usuario:</span>
                <select name="user_type">
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}" {{ ($user->user_type_id == $type->id) ? 'selected="selected"' : '' }}>{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
        </form>
    </div>
</div>
@endsection
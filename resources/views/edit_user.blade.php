@extends('layouts.master')

@section('title', 'Editar usuario')

@section('content')

<div class="card text-dark bg-light mb-3 p-3 text-center">
    <div class="card-header bg-primary">
        <p>Editar Usuario</p>
    </div>
    <form  method="POST" action="/user_management/{id}">
        <input type="hidden" name="_method" value="PUT">
        <div class="card-body">
            <div class="row p-3">
                <div class="col-md-6">
                    Nombres
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="name" value="{{$user['name']}}" placeholder="Nombres" required/>
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-6">
                    Apellidos
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="last_name" value ="{{$user['last_name']}}" placeholder="Apellidos" required/>
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-6">
                    Email 
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control" name="email" value ="{{$user['email']}}" placeholder="Correo" required/>
                </div>
            </div>
            <input type="hidden" class="form-control" name="user_id" value ="{{$user['id']}}" required/>
            <div class="row p-3">
                <div class="col-md-6">
                    Tipo de usuario 
                </div>
                <div class="col-md-6">
                    <select class="form-control" name="user_type">
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}" {{ ($user->user_type_id == $type->id) ? 'selected="selected"' : '' }}>{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
@extends('layouts.master')

@section('title', 'Crear usuario')

@section('content')

<div class="card text-dark bg-light mb-3 p-3 text-center">
    <div class="card-header bg-primary">
        <p>Registro de usuario</p>
    </div>
    <form  method="POST" action="/users">
        <div class="card-body">
            <div class="row p-3">
                <div class="col-md-6 ">
                    Nombres
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="name" required/>
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-6">
                    Apellidos
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="last_name" required/>
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-6">
                    Email
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control" name="email" required/>
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-6">
                    Tipo de usuario
                </div>
                <div class="col-md-6">
                    <select class="form-control" name="user_type">
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
                </div>
            </div>
        </div>
    </form>  
</div>
@endsection
    	
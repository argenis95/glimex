@extends('layouts.master')

@section('title', 'Editar usuario')

@section('content')

<div class="dashboard card bg-white mb-3 p-3">
    <div class="card-header bg-primary text-light text-center mb-3 p-3">
        <div class="row">
            <div class="col-md-12 font-weight-bold">
                Editar cuenta
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6 p-1">
            <button class="personal btn btn-primary" id="personal-btn">Datos personales</button>
        </div>
        <div class="col-md-6 col-sm-6 p-1">
            <button class="password btn btn-primary" id="password-btn">Contraseña</button>
        </div>
    </div>
    <div class="row">
         <div class="hidden col-md-12 col-sm-12" id="personal">
            <form  method="POST" action="/account_config/{{ $user['id']}}">
                <input type="hidden" name="_method" value="PUT">
                <div class="card-body">
                    <div class="row p-3">
                        <div class="col-md-6 col-sm-6">
                            Nombres
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" name="name" value="{{ $user['name']}}" placeholder="Nombres" required/>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-md-6 col-sm-6">
                            Apellidos
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" name="last_name" value ="{{ $user['last_name']}}" placeholder="Apellidos" required/>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-md-6 col-sm-6">
                            Email 
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="email" class="form-control" name="email" value ="{{ $user['email']}}" placeholder="Correo" required/>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-md-12 col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="hidden col-md-12 col-sm-12" id="password">
            <form  method="POST" action="/change_password/{{ $user['id']}}" name="change_pass" id="change_pass">
                <input type="hidden" name="_method" value="PUT">
                <div class="card-body">
                    <div class="row p-3">
                        <div class="col-md-6 col-sm-6">
                            Escriba la nueva contraseña:
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="password" class="form-control" name="password" id="password" pattern=".{8,}" title="Ocho o más carácteres" required/>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-md-6 col-sm-6">
                            Repita la nueva contraseña:
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="password" class="form-control" name="password_check" id="password_check" pattern=".{8,}" title="Ocho o más carácteres" required/>
                        </div>
                    </div>
                    <div>
                    <div class="row p-3">
                        <div class="col-md-12 col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Cambiar contraseña</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>




</div>
    


@endsection
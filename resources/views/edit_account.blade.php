@extends('layouts.master')

@section('title', 'Editar usuario')

@section('content')

<div class="card bg-white mb-3 p-3">
    <div class="card-header bg-primary text-light text-center mb-3 p-3">
        <div class="row">
            <div class="col-md-12 font-weight-bold">
                Editar cuenta
            </div>
        </div>
    </div>
    <div class="row text-dark">
        <ul class="col-4 font-weight-bold">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-one-list" data-toggle="list" href="#list-one" role="tab" aria-controls="home">Datos personales</a>
                <a class="list-group-item list-group-item-action" id="list-two-list" data-toggle="list" href="#list-two" role="tab" aria-controls="messages">Contraseña</a>
            </div>
        </ul>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-one" role="tabpanel" aria-labelledby="list-one-list">
                <form  method="POST" action="/account_config/{{ $user['id']}}">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="card-body">
                        <div class="row p-3">
                            <div class="col-md-6">
                                Nombres
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ $user['name']}}" placeholder="Nombres" required/>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-md-6">
                                Apellidos
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="last_name" value ="{{ $user['last_name']}}" placeholder="Apellidos" required/>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-md-6">
                                Email 
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value ="{{ $user['email']}}" placeholder="Correo" required/>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="list-two" role="tabpanel" aria-labelledby="list-two-list">
                <form  method="POST" action="/change_password/{{ $user['id']}}" name="change_pass" id="change_pass">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="card-body">
                        <div class="row p-3">
                            <div class="col-md-6 ">
                                Escriba la nueva contraseña:
                            </div>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password" id="password" pattern=".{8,}" title="Ocho o más carácteres" required/>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-md-6 ">
                                Repita la nueva contraseña:
                            </div>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_check" id="password_check" pattern=".{8,}" title="Ocho o más carácteres" required/>
                            </div>
                        </div>
                        <div>
                        <div class="row p-3">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary btn-lg">Cambiar contraseña</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
@extends('layouts.master')

@section('title', 'Recuperar contraseña')

@section('content')
<div class="card text-dark bg-light mb-3 p-3 text-center">
    <div class="card-header bg-primary">
        <p>Cambiar contraseña</p>
    </div>
    <form  method="POST" action="/reset_password/{{$user['id']}}" name="change_pass" id="change_pass">
        <div class="card-body">
            <div class="row p-3">
                <div class="col-md-6 ">
                    Escriba el código recibido:
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="reset_code" id="reset_code" required/>
                </div>
            </div>
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
                <div class="card-body"></div>
            </div>  
            <!--<input type="hidden" class="form-control" name="user_id" value ="{{$user['id']}}" required/>-->
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-lg">Cambiar contraseña</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
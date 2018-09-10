@extends('layouts.master')

@section('title', 'Recuperar contraseña')

@section('content')
<div class="card text-dark bg-light mb-3 p-3 text-center">
    <div class="card-header bg-primary">
        <p>Recuperar contraseña</p>
    </div>
    <form  method="POST" action="/reset_password">
        <div class="card-body">
            <div class="row p-3">
                <div class="col-md-6 ">
                    Escriba su correo electrónico
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control" name="email" required/>
                </div>
            </div>
            <div>
                <div class="card-body">Se le enviará un código a su correo que le permitirá cambiar su contraseña.</div>
            </div>  
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-lg">Enviar código</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
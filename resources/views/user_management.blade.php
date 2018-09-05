@extends('layouts.master')

@section('title', 'Manejo de usuarios')

@section('content')

<div class="p-4">
    <div class="row">
        <div class="col-md-10">
        </div>
        <div class="col-md-2 ">
            <a href="/create_user" title="Registrar nuevo usuario">
                <button class="btn-register btn btn-primary float-right">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </button>
            </a>
        </div>
    </div>
</div>

<div class="text-white mb-3 p-4">
    <div class="card-header bg-primary text-light text-center mb-3 p-3">
        <div class="row">
            <div class="col-md-12 font-weight-bold">
                Usuarios
            </div>
        </div>
    </div>
    <div class="card-body bg-white">
        <table id="users" class="display text-dark">
            <thead>
                <tr>
                    <th>Nombre </th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Tipo</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

@endsection



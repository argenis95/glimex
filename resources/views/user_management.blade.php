@extends('layouts.master')

@section('title', 'Manejo de usuarios')

@section('content')

<div class="dashboard p-4">
    <div class="row">
        <div class="col-md-8 col-sm-8">
        </div>
        <div class="col-md-2 col-sm-2">
             <a href="/deleted_users" title="Usuarios eliminados">
                <button class="btn-register btn btn-danger float-right">
                    <i class="fa fa-users" aria-hidden="true"></i>
                </button>
            </a>
        </div>
        <div class="col-md-2 col-sm-2">
            <a href="/users/create" title="Registrar nuevo usuario">
                <button class="btn-register btn btn-primary float-right">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                </button>
            </a>
        </div>
    </div>
</div>

<div class="text-white mb-3 p-4">
    <div class="card-header bg-primary text-light text-center mb-3 p-3">
        <div class="row">
            <div class="col-md-12 col-sm-12 font-weight-bold">
                Usuarios
            </div>
        </div>
    </div>
    <div class="col-sm-12 table-container card-body bg-white">
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



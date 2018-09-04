@extends('layouts.master')

@section('title', 'Manejo de usuarios')

@section('content')

<div class="container p-4">
    <div class="row">
        <div class="col-md-10">
            <h1 class="text-dark">Usuarios</h1>
        </div>
        <div class="col-md-2 text-right pr-4">
                <a href="/create_user" title="Registrar nuevo usuario"><button class="btn-register btn m-1 btn-primary float-right">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </button></a>
        </div>
    </div>
</div>
<div class="container p-4">
    <table id="users" class="display">
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

@endsection



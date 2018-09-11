@extends('layouts.master')

@section('title', 'Usuarios eliminados')

@section('content')


<div class="text-white mb-3 p-4">
    <div class="card-header bg-primary text-light text-center mb-3 p-3">
        <div class="row">
            <div class="col-md-12 font-weight-bold">
                Usuarios eliminados
            </div>
        </div>
    </div>
    <div class="card-body bg-white">
        <table id="deleted_users" class="display text-dark">
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


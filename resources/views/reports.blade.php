@extends('layouts.master')

@section('title', 'Reporte de notas')

@section('content')
    
<div class="dashboard text-white mb-3 p-4">
    <div class="card-header bg-primary text-light text-center mb-3 p-3">
        <div class="row">
            <div class="col-md-12 col-sm-12 font-weight-bold">
                Notas
            </div>
        </div>
    </div>
    <div class="col-sm-12 table-container card-body bg-white">
        <table id="reports" class="display text-dark">
            <thead>
                <tr>
                    <th>Estudiante</th>
                    <th>ID del reporte</th>
                    <th>Fecha</th>
                    <th>Estatus</th>
                    <th>Acción</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection
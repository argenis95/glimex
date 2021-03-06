@extends('layouts.master')

@section('title', 'Ficha del estudiante')

@section('content')
<div class="dashboard card text-dark mb-3 p-4">
    <div class="card-header bg-primary text-light text-center mb-3 p-3">
        <div class="row">
            <div class="col-md-12 font-weight-bold">
                <p class="font-weight-bold">Ficha del estudiante</p>
            </div>
        </div>
    </div>
    <div class="card-body bg-white text-dark">
        <div class="row">
            <div class="col-md-4 col-sm-4">
            </div>
            <div class="col-md-2 col-sm-2">
                <p class="text-dark">Nombre:</p>
            </div>
            <div class="col-md-4 col-sm-4">
                <p class="text-primary">{{ $user['name']}} {{ $user['last_name'] }}</p>
            </div>
            <div class="col-md-2 col-sm-2">
            </div>
        </div>

    </div>
    <div class="card-header text-primary text-center mb-3 p-3">
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <p class="font-weight-bold text-dark">Calificaciones</p>
            </div>
        </div>
    </div>
    <div class="card-body bg-white">
        <div class="row">       
            <div class="col-md-12 col-sm-12 text-dark">
                <table id="student-card" class="table cell-border">
                    <thead class="text-dark">
                        <tr>
                            <th class="query">Grupo</th>
                            <th class="query">Año</th>
                            <th class="query">Mes</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>   
</div>
<div class="modal fade" id="modal-list-notes" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-header bg-primary text-light text-center mb-3 p-3">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="font-weight-bold">Calificaciones</h5>
                        </div>
                    </div>
                </div>
                <table id="notes-report" class="table text-dark">
                    <thead>
                        <tr>
                            <th>Evaluado</th>
                            <th>Nota</th>
                        </tr>
                    </thead>
                    <tbody id="notes-show">
                    </tbody>
                </table>
                <div class="text-dark text-center font-weight-bold">
                    Comentarios
                </div>
                <div class="text-dark text-center" id="comments">
                </div>
            </div>
            <div class="modal-footer">    
            </div>
        </div>
    </div>
</div>

@endsection
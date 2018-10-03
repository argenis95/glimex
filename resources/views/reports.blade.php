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
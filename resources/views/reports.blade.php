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
        <table id="reports" class="display text-dark cell-border">
            <thead>
                <tr>
                    <th class="query">Estudiante</th>
                    <th class="query">Año</th>
                    <th class="query">Mes</th>
                    <th class="query">Grupo</th>
                    <th>ID del reporte</th>
                    <th>Estatus</th>
                    <th>Acción</th>
                    <th>Promediar</th>
                </tr>
            </thead>
        </table>
        <br>
        <br>
        <br>
        <br>
        <br>
        <table class="table display table-hover table-bordered text-dark" id="average-table" >
            <thead>
                <!--<input type="checkbox" id="check-all" class="avg-calc-all">-->
                <tr class="display text-dark ">
                    <th>Evaluación</th>
                    <th>Promedio </th>
                </tr>
            </thead>
            <tbody>
                <tr class="display text-dark">
                    <td>Fluency</td>
                    <td id="f" class="font-weight-bold"></td>
                </tr>
                <tr class="display text-dark">
                    <td>Pronunciation</td>
                    <td id="p" class="font-weight-bold"></td>
                </tr>
                <tr class="display text-dark">
                    <td>Grammar</td>
                    <td id="g" class="font-weight-bold"></td>
                </tr>
                <tr class="display text-dark">
                    <td>Vocabulary</td>
                    <td id="v" class="font-weight-bold"></td>
                </tr>
                <tr class="display text-dark">
                    <td>Presentation</td>
                    <td id="pr" class="font-weight-bold"></td>
                </tr>
                <tr class="display text-dark">
                    <td>Class participation</td>
                    <td id="cp" class="font-weight-bold"></td>
                </tr>
                <tr class="display text-dark">
                    <td>Homework</td>
                    <td id="hw" class="font-weight-bold"></td>
                </tr>
                <tr class="display text-dark">
                    <td>Writing</td>
                    <td id="w" class="font-weight-bold"></td>
                </tr>
                <tr class="display text-dark">
                    <td>Reading</td>
                    <td id="r" class="font-weight-bold"></td>
                </tr>
                <tr class="display text-dark">
                    <td>Listenning</td>
                    <td id="l" class="font-weight-bold"></td>
                </tr>
                <tr class="display text-dark">
                    <td>Exam</td>
                    <td id="ex" class="font-weight-bold"></td>
                </tr>
                <tr class="display text-dark">
                    <td>Final</td>
                    <td id="final" class="font-weight-bold"></td>
                </tr>
            </tbody>
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
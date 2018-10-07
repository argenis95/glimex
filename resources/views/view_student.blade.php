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
            <div class="col-md-2 col-sm-4">
                <p class="text-dark">Alumno</p>
            </div>
            <div class="col-md-4 col-sm-4">
                <p class="text-dark font-weight-bold">{{ $student['name']}} {{$student['last_name']}}</p>
            </div>
            <div class="col-md-2 col-sm-2">
            </div>
        </div>

    </div>
    <div class="card-header text-center mb-3 p-3">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <p class="font-weight-bold text-dark">Calificaciones</p>
            </div>
        </div>
    </div>
    <div class="card-body bg-white text-dark">
        <div class="row">       
            <div class="col-md-12 col-sm-12">
                <table id="notes-table" class="table display cell-border">
                    <thead class="text-dark">
                        <tr>
                            <th class="query">Grupo</th>
                            <th class="query">Año</th>
                            <th class="query">Mes</th>
                            <th>Lessons taken</th>
                            <th>Absences</th>
                            <th>Times late</th>
                            <th>Fluency</th>
                            <th>Pronunciation</th>
                            <th>Grammar</th>
                            <th>Vocabulary</th>
                            <th>Presentation</th>
                            <th>Class participation</th>
                            <th>Homework</th>
                            <th>Writing</th>
                            <th>Reading</th>
                            <th>Listenning</th>
                            <th>Exam</th>
                            <th>Final</th>
                            <th>Comments</th>
                            <th>Actualizado</th>
                            <th>Estado</th>
                            <th>Acción</th> 
                            <th>Promediar</th> 
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
    <div class="p-4">
        <div class="row">
            <div class="col-md-8 col-sm-8">
            </div>
            <div class="col-md-2 col-sm-2">
            </div>
            <div class="col-md-2 col-sm-2">
                <a href="/scores/create/{{ $student->id }}" title="Crear nuevo boletín">
                    <button class="btn-register btn btn-primary">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                </a>
            </div>
        </div>
    </div>  
    <table class="table display table-hover table-bordered text-dark" id="average-table" >
        <thead>
            <tr class="display text-dark ">
                <th>Evaluación</th>
                <th>Promedio</th>
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
<div class="modal fade" id="modal-student" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
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
                            <h5 class="font-weight-bold">Comentarios</h5>
                        </div>
                    </div>
                </div>
                <div class="text-dark text-center" id="student-comments">
                </div>
            </div>
        </div>
    </div>
</div>


@endsection



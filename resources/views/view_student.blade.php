@extends('layouts.master')

@section('title', 'Manejo de notas')

@section('content')


<div class="card text-dark mb-3 p-4">
    <div class="card-header bg-primary text-light text-center mb-3 p-3">
        <div class="row">
            <div class="col-md-12 font-weight-bold">
                <p class="font-weight-bold">Ficha del estudiante</p>
            </div>
        </div>
    </div>
    <div class="card-body bg-white text-dark">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-2">
                <p class="text-dark">Nombre:</p>
            </div>
            <div class="col-md-4">
                <p class="text-primary">{{ $student['name']}} {{$student['last_name']}}</p>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-2">
                <p class="text-dark">Grupos:</p>
            </div>
            <div class="col-md-4">
                @foreach ($courses as $course)
                <p class="text-primary">
                    {{ $course->name }} {{ $course->companies}}
                </p>
                @endforeach
            </div>
            <div class="col-md-2">
            </div>
        </div>

    </div>
    <div class="card-header text-primary text-center mb-3 p-3">
        <div class="row">
            <div class="col-md-12 ">
                <p class="font-weight-bold text-primary">Calificaciones</p>
            </div>
        </div>
    </div>
    <div class="card-body bg-white text-dark">
        <div class="row">       
            <div class="text-center col-md-12 text-primary">
                @foreach ($scores as $score)
                    @if ($score->month_lock > '0')
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6">
                            Boletín {{ $score->created_at }} <i class="fa fa-lock pl-1" aria-hidden="true"></i>
                            <button id="view" class="btn btn-primary m-1 view-score" data-id="{{$score->id}}"><i class="fa fa-eye" aria-hidden="true"></i></button>
                        </div>
                        <div class="col-md-3">
                        </div>
                    </div>
                    @else 
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6">
                            Boletín {{ $score->created_at }} <i class="fa fa-unlock-alt pl-1" aria-hidden="true"></i>
                            <button id="view" class="btn btn-primary m-1 view-score" data-id="{{$score->id}}"><i class="fa fa-eye" aria-hidden="true"></i></button>
                        </div>
                        <div class="col-md-3">
                        </div>
                    </div>    
                    @endif
                @endforeach
            </div>
        </div>
    </div>


    <div class="modal fade" id="note_list" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
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
                    <table id="students" class="table text-dark">
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
                    <a href="/scores/edit/"><button type="button" class="btn btn-primary text-right">Editar</button></a>
                </div>
            </div>
        </div>
    </div>

   
    
</div>

@endsection



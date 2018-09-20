@extends('layouts.master')

@section('title', 'Manejo de notas')

@section('content')

<div class="p-4">
    <div class="row">
        <div class="col-md-10">
        </div>
        <div class="col-md-2 ">
            <a href="/scores/create" title="Crear nuevo boletín">
                <button class="btn-register btn btn-primary float-right">
                        <i class="fa fa-plus pr-1" aria-hidden="true"></i><i class="fa fa-file-text-o" aria-hidden="true"></i>
                </button>
            </a>
        </div>
    </div>
</div>

<div class="text-white mb-3 p-4">
    <div class="card-header bg-primary text-light text-center mb-3 p-3">
        <div class="row">
            <div class="col-md-12 font-weight-bold">
                Estudiantes
            </div>
        </div>
    </div>
    <div class="card-body bg-white">
        <table id="scores" class=" table text-dark">
            <thead>
                <tr>
                    <th>Empresa</th>
                    <th>Grupo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                <tr>
                    <td>{{$course->companie['name']}}</td>
                    <td>{{$course->name}}</td>
                    <td><button id="view" class="btn btn-primary m-1 view" data-id="{{$course->id}}"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    <div class="modal fade modal-list-notes" id="modal-list-notes" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-header bg-primary text-light text-center mb-3 p-3">
                    <div class="row">
                        <div class="col-md-12 font-weight-bold">
                            Boletín
                        </div>
                    </div>
                </div>
                <table id="notes" class="table text-dark">
                    <thead>
                        <tr>
                            <th>Evaluación</th>
                            <th>Nota</th>
                        </tr>
                    </thead>
                    <tbody id="notes-show" class="notes-show">
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button id="close" type="button" class="btn btn-secondary">Cerrar</button>
            </div>
        </div>
    </div>
</div>
    
@endsection



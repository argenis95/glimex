@extends('layouts.master')

@section('title', 'Registrar grupo')

@section('content')

<div class="card text-dark bg-light mb-3 p-3 text-center">
    <div class="card-header bg-primary">
        <p>Crear Grupo</p>
    </div>
    <form  method="POST" action="/groups" id="create_group">
        <div class="card-body">
            <div class="row p-3">
                <div class="col-md-6">
                    Nombre
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="name" placeholder="Nombre" required/>
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-6">
                        Seleccione el instructor:
                </div>
                <div class="col-md-6">
                    <select class="form-control" name="instructor" id="select">
                        @foreach ($instructors as $instructor)
                        <option value="{{ $instructor->id }}">{{ $instructor->name }} {{ $instructor->last_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-6">
                        Seleccione la compañía:
                </div>
                <div class="col-md-6">
                    <select class="form-control" name="company" id="select">
                        @foreach ($companies as $company)
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-6">
                    Alumnos:
                </div>
                <div class="col-md-3">
                    Alumnos disponibles
                    <select multiple class="form-control" name="student_list[]" id="select1">
                        @foreach ($students as $student)
                        <option id="option" value="{{ $student->id }}">{{ $student->name }} {{ $student->last_name }}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-primary btn-md m-1" id="add">Agregar<i class="fa fa-caret-right p-1" aria-hidden="true"></i></button>
                </div>
                <div class="col-md-3">
                    Alumnos inscritos en el grupo
                    <select multiple class="form-control" name="student_list_selected[]" id="select2">
                    </select>
                    <button class="btn btn-primary btn-md m-1" id="remove"><i class="fa fa-caret-left p-1" aria-hidden="true"></i>Quitar</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
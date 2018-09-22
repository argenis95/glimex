@extends('layouts.master')

@section('title', 'Boletín del estudiante')

@section('content')
<div class="dashboard card text-dark bg-light mb-3 p-3 text-center">
    <div class="card-header bg-primary">
        <p class="font-weight-bold">Crear boleta</p>
        <p>Estudiante: {{ $student->name }} {{ $student->last_name }}</p>
    </div>
    <form id="score-create" method="POST" action="/scores/student/{{ $student->id }}">
        <div class="card-body">
            <div class="row p-3">
                <div class="col-md-2 col-sm-2">
                </div>
                <div class="col-md-4 col-sm-4 p-2">
                    Lessons taken
                </div>
                <div class="col-md-3 col-sm-3">
                    <input type="text" class="form-control" name="lessons"/>
                </div>
                <div class="col-md-3 col-sm-3">
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-2 col-sm-2">
                </div>
                <div class="col-md-4 col-sm-4 p-2">
                    Absences
                </div>
                <div class="col-md-3 col-sm-3">
                    <input type="text" class="form-control" name="absences"/>
                </div>
                <div class="col-md-3 col-sm-3">
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-2 col-sm-2">
                </div>
                <div class="col-md-4 col-sm-4 p-2">
                    Times late
                </div>
                <div class="col-md-3 col-sm-3">
                    <input type="text" class="form-control" name="times_late"/>
                </div>
                <div class="col-md-3 col-sm-3">
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-2 col-sm-2">
                </div>
                <div class="col-md-4 col-sm-4 p-2">
                    Fluency
                </div>
                <div class="col-md-3 col-sm-3">
                    <input type="text" class="form-control" name="fluency"/>
                </div>
                <div class="col-md-3 col-sm-3">
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-2 col-sm-2">
                </div>
                <div class="col-md-4 col-sm-4 p-2">
                    Pronunciation
                </div>
                <div class="col-md-3 col-sm-3">
                    <input type="text" class="form-control" name="pronunciation"/>
                </div>
                <div class="col-md-3 col-sm-3">
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-2 col-sm-2">
                </div>
                <div class="col-md-4 col-sm-4 p-2">
                    Grammar and Word Order
                </div>
                <div class="col-md-3 col-sm-3">
                    <input type="text" class="form-control" name="grammar"/>
                </div>
                <div class="col-md-3 col-sm-3">
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-2 col-sm-2">
                </div>
                <div class="col-md-4 col-sm-4 p-2">
                    Vocabulary
                </div>
                <div class="col-md-3 col-sm-3">
                    <input type="text" class="form-control" name="vocabulary"/>
                </div>
                <div class="col-md-3 col-sm-3">
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-2 col-sm-2">
                </div>
                <div class="col-md-4 col-sm-4 p-2">
                    Presentation
                </div>
                <div class="col-md-3 col-sm-3">
                    <input type="text" class="form-control" name="presentation"/>
                </div>
                <div class="col-md-3 col-sm-3">
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-2 col-sm-2">
                </div>
                <div class="col-md-4 col-sm-4 p-2">
                    Class participation
                </div>
                <div class="col-md-3 col-sm-3">
                    <input type="text" class="form-control" name="participation"/>
                </div>
                <div class="col-md-3 col-sm-3">
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-2 col-sm-2">
                </div>
                <div class="col-md-4 col-sm-4 p-2">
                    Homework and assignements
                </div>
                <div class="col-md-3 col-sm-3">
                    <input type="text" class="form-control" name="homework"/>
                </div>
                <div class="col-md-3 col-sm-3">
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-2 col-sm-2">
                </div>
                <div class="col-md-4 col-sm-4 p-2">
                    Writing
                </div>
                <div class="col-md-3 col-sm-3">
                    <input type="text" class="form-control" name="writing"/>
                </div>
                <div class="col-md-3 col-sm-3">
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-2 col-sm-2">
                </div>
                <div class="col-md-4 col-sm-4 p-2">
                    Reading
                </div>
                <div class="col-md-3 col-sm-3">
                    <input type="text" class="form-control" name="reading"/>
                </div>
                <div class="col-md-3 col-sm-3">
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-2 col-sm-2">
                </div>
                <div class="col-md-4 col-sm-4 p-2">
                    Listenning
                </div>
                <div class="col-md-3 col-sm-3">
                    <input type="text" class="form-control" name="listenning"/>
                </div>
                <div class="col-md-3 col-sm-3">
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-2 col-sm-2">
                </div>
                <div class="col-md-4 col-sm-4 p-2">
                    Exam
                </div>
                <div class="col-md-3 col-sm-3">
                    <input type="text" class="form-control" name="exam"/>
                </div>
                <div class="col-md-3 col-sm-3">
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-2 col-sm-2">
                </div>
                <div class="col-md-4 col-sm-4 p-2">
                    Final
                </div>
                <div class="col-md-3 col-sm-3">
                    <input type="text" class="form-control" name="final"/>
                </div>
                <div class="col-md-3 col-sm-3">
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-12 col-sm-12 p-1">
                    Comentarios
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-3 col-sm-3">
                </div>
                <div class="col-md-6 col-sm-6">
                    <textarea form="score-create" class="form-control" name="comments"></textarea>
                </div>
                <div class="col-md-3 col-sm-3">
                </div>
            </div>
            <input type="hidden" class="form-control" name="student_id" value ="{{ $student->id }}" required/>
            <div class="row">
                <div class="col-md-3 col-sm-3">
                </div>
                <div class="col-md-3 col-sm-3">
                 <a href="/scores/student/{{ $student->id }}"><button class="btn btn-primary btn-lg">Volver atrás</button></a>
                </div>
                <div class="col-md-3 col-sm-3">
                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                </div>
                <div class="col-md-3 col-sm-3">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
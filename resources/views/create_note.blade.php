@extends('layouts.master')

@section('title', 'Crear boletín del estudiante')

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
                    Seleccione el año y el mes
                </div>
                <div class="col-md-2 col-sm-2">
                    <input type="text" class="form-control" name="year" id="year" pattern="^(((\d{1,3})(,\d{3})*)|(\d+))(.\d+)?$" title="Inserte un año válido" required/>
                </div>
                <div class="col-md-2 col-sm-2">
                    <select name="month" id="month">
                        <option value="Enero">Enero</option>
                        <option value="Febrero">Febrero</option>
                        <option value="Marzo">Marzo</option>
                        <option value="Abril">Abril</option>
                        <option value="Mayo">Mayo</option>
                        <option value="Junio">Junio</option>
                        <option value="Julio">Julio</option>
                        <option value="Agosto">Agosto</option>
                        <option value="Septiembre">Septiembre</option>
                        <option value="Octubre">Octubre</option>
                        <option value="Noviembre">Noviembre</option>
                        <option value="Diciembre">Diciembre</option>
                    </select>
                </div>
                <div class="col-md-2 col-sm-2">
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-2 col-sm-2">
                </div>
                <div class="col-md-4 col-sm-4 p-2">
                    Seleccione el grupo
                </div>
                <div class="col-md-3 col-sm-3">
                    <select name="course" id="course">
                        @foreach ($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3 col-sm-3">
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-2 col-sm-2">
                </div>
                <div class="col-md-4 col-sm-4 p-2">
                    Lessons taken
                </div>
                <div class="col-md-3 col-sm-3">
                    <input type="text" class="form-control" name="lessons" id="lessons" pattern="^(((\d{1,3})(,\d{3})*)|(\d+))(.\d+)?$" title="Inserte una cifra válida" required/>
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
                    <input type="text" class="form-control" name="absences" id="absences" pattern="^(((\d{1,3})(,\d{3})*)|(\d+))(.\d+)?$" title="Inserte una cifra válida" required/>
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
                    <input type="text" class="form-control" name="times_late" id="times_late" pattern="^(((\d{1,3})(,\d{3})*)|(\d+))(.\d+)?$" title="Inserte una cifra válida" required/>
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
                    <input type="text" class="form-control" name="fluency" id="fluency" pattern="^(((\d{1,3})(,\d{3})*)|(\d+))(.\d+)?$" title="Inserte una calificación válida" required/>
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
                    <input type="text" class="form-control" name="pronunciation" id="pronunciation" pattern="^(((\d{1,3})(,\d{3})*)|(\d+))(.\d+)?$" title="Inserte una calificación válida" required/>
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
                    <input type="text" class="form-control" name="grammar" id="grammar" pattern="^(((\d{1,3})(,\d{3})*)|(\d+))(.\d+)?$" title="Inserte una calificación válida" required/>
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
                    <input type="text" class="form-control" name="vocabulary" id="vocabulary" pattern="^(((\d{1,3})(,\d{3})*)|(\d+))(.\d+)?$" title="Inserte una calificación válida" required/>
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
                    <input type="text" class="form-control" name="presentation" id="presentation" pattern="^(((\d{1,3})(,\d{3})*)|(\d+))(.\d+)?$" title="Inserte una calificación válida" required/>
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
                    <input type="text" class="form-control" name="participation" id="participation" pattern="^(((\d{1,3})(,\d{3})*)|(\d+))(.\d+)?$" title="Inserte una calificación válida" required/>
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
                    <input type="text" class="form-control" name="homework" id="homework" pattern="^(((\d{1,3})(,\d{3})*)|(\d+))(.\d+)?$" title="Inserte una calificación válida" required/>
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
                    <input type="text" class="form-control" name="writing" id="writting" pattern="^(((\d{1,3})(,\d{3})*)|(\d+))(.\d+)?$" title="Inserte una calificación válida" required/>
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
                    <input type="text" class="form-control" name="reading" id="reading" pattern="^(((\d{1,3})(,\d{3})*)|(\d+))(.\d+)?$" title="Inserte una calificación válida" required/>
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
                    <input type="text" class="form-control" name="listenning" id="listenning" pattern="^(((\d{1,3})(,\d{3})*)|(\d+))(.\d+)?$" title="Inserte una calificación válida" required/>
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
                    <input type="text" class="form-control" name="exam" id="exam" pattern="^(((\d{1,3})(,\d{3})*)|(\d+))(.\d+)?$" title="Inserte una calificación válida" required/>
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
                    <input type="text" class="form-control" name="final" id="final" pattern="^(((\d{1,3})(,\d{3})*)|(\d+))(.\d+)?$" title="Inserte una calificación válida" required/>
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
                <div class="col-md-4 col-sm-4">
                </div>
                <div class="col-md-4 col-sm-4">
                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                </div>
                <div class="col-md-4 col-sm-4">
                </div>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-md-4 col-sm-4">
        </div>
        <div class="col-md-4 col-sm-4">
            <a href="/scores/student/{{ $student->id }} "><button class="btn btn-primary btn-lg">Volver atrás</button></a>
        </div>
        <div class="col-md-4 col-sm-4">
        </div>
    </div>
</div>
@endsection
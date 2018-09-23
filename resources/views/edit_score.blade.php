@extends('layouts.master')

@section('title', 'Editar notas')

@section('content')
<div class="dashboard card text-dark bg-light mb-3 p-3 text-center">
    <div class="card-header bg-primary">
        <p class="font-weight-bold">Editar {{ $score->created_at }}</p>
        <p>Estudiante: {{ $student->name }} {{ $student->last_name }}</p>
    </div>
    <form id="score-edit" method="POST" action="/scores/{{ $score->id }}">
        <input type="hidden" name="_method" value="PUT">
        <div class="card-body">
            <div class="row p-3">
                <div class="col-md-2 col-sm-2">
                </div>
                <div class="col-md-4 col-sm-4 p-2">
                    Lessons taken
                </div>
                <div class="col-md-3 col-sm-3">
                    <input type="text" class="form-control" name="lessons" value="{{ $score->lessons_taken }}" placeholder="{{ $score->lessons_taken }}" required/>
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
                    <input type="text" class="form-control" name="absences" value="{{ $score->absences }}" placeholder="{{ $score->absences }}" required/>
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
                    <input type="text" class="form-control" name="times_late" value="{{ $score->times_late }}" placeholder="{{ $score->times_late }}" required/>
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
                    <input type="text" class="form-control" name="fluency" value="{{ $score->fluency }}" placeholder="{{ $score->fluency }}" required/>
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
                    <input type="text" class="form-control" name="pronunciation" value="{{ $score->pronunciation }}" placeholder="{{ $score->pronunciation }}" required/>
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
                    <input type="text" class="form-control" name="grammar" value="{{ $score->grammar_word_order }}" placeholder="{{ $score->grammar_word_order }}" required/>
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
                    <input type="text" class="form-control" name="vocabulary" value="{{ $score->vocabulary }}" placeholder="{{ $score->vocabulary }}" required/>
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
                    <input type="text" class="form-control" name="presentation" value="{{ $score->presentation }}" placeholder="{{ $score->presentation }}" required/>
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
                    <input type="text" class="form-control" name="participation" value="{{ $score->class_participation }}" placeholder="{{ $score->class_participation }}" required/>
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
                    <input type="text" class="form-control" name="homework" value="{{ $score->homework_assignements }}" placeholder="{{ $score->homework_assignements }}" required/>
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
                    <input type="text" class="form-control" name="writing" value="{{ $score->writing }}" placeholder="{{ $score->writing }}" required/>
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
                    <input type="text" class="form-control" name="reading" value="{{ $score->reading }}" placeholder="{{ $score->reading }}" required/>
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
                    <input type="text" class="form-control" name="listenning" value="{{ $score->listenning }}" placeholder="{{ $score->listenning }}" required/>
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
                    <input type="text" class="form-control" name="exam" value="{{ $score->exam }}" placeholder="{{ $score->exam }}" required/>
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
                    <input type="text" class="form-control" name="final" value="{{ $score->final }}" placeholder="{{ $score->final }}" required/>
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
                    <textarea form="score-edit" class="form-control" name="comments">{{ $score->comments }}</textarea>
                </div>
                <div class="col-md-3 col-sm-3">
                </div>
            </div>
            <input type="hidden" class="form-control" name="score_id" value ="" required/>
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
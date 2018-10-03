@extends('layouts.master')

@section('title', 'Mis grupos')

@section('content')


<div class=" dashboard text-white mb-3 p-4">
    <div class="card-header bg-primary text-light text-center mb-3 p-3">
        <div class="row">
            <div class="col-md-12 font-weight-bold">
                {{ $course->name }}
            </div>
        </div>
    </div>
    <div class="row card-body bg-white">
        </div>
        <div class="company-table text-white mb-3">
            <div class="card-body bg-white">
                <table id="group-reports" class="display text-dark">
                    <thead>
                        <tr>
                            <th>Año</th>
                            <th>Mes</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
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
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>






@endsection
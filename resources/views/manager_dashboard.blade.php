@extends('layouts.master')

@section('title', 'Manejo de usuarios')

@section('content')

<div class="card mb-3 p-4">
    <div class="card-header bg-primary text-light text-center mb-3 p-3">
        <div class="row">
            <div class="col-md-12 font-weight-bold">
                Tabla de manejo de manager
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card-body bg-white col-md-4">
            <a href="/company_management" title="Empresas">
                <button class="btn-register btn btn-primary float-right" id="company">
                    <i class="fa fa-building p-1" aria-hidden="true"></i>
                </button>
            </a>
        </div>
        <div class="card-body bg-white col-md-4">
            <a href="/groups_management" title="Grupos" id="group">
                <button class="btn-register btn btn-primary float-right">
                    <i class="fa fa-users p-1" aria-hidden="true"></i>
                </button>
            </a>
        </div>
        <div class="card-body bg-white col-md-4">
            <a href="/group_students_list" title="Estudiantes" id="student">
                <button class="btn-register btn btn-primary float-right">
                    <i class="fa fa-user p-1" aria-hidden="true"></i>
                </button>
            </a>
        </div>
    </div>
    <div class="row card-body bg-white">
        <div class="col-md-12">
            <div class="show-info group-info" style="display: none;">Lorem ipsumasdasdasdasdasdassads</div>
        </div>
    </div>
</div>




@endsection
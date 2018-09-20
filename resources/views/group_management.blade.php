@extends('layouts.master')

@section('title', 'Manejo de grupos')

@section('content')

<div class="p-4">
    <div class="row">
        <div class="col-md-10">
        </div>
        <div class="col-md-2">
                <a href="/groups/add" title="Crear grupo">
                <button class="btn-register btn btn-primary float-right">
                    <i class="fa fa-users pr-1" aria-hidden="true"></i>
                    <i class="fa fa-plus pr-1" aria-hidden="true"></i>
                </button>
            </a>
        </div>
    </div>
</div>

<div class="text-white mb-3 p-4">
    <div class="card-header bg-primary text-light text-center mb-3 p-3">
        <div class="row">
            <div class="col-md-12 font-weight-bold">
                Grupos
            </div>
        </div>
    </div>
    <div class="row card-body bg-white">
        </div>
        <div class="company-table text-white mb-3">
            <div class="card-body bg-white">
                <table id="groups" class="display text-dark">
                    <thead>
                        <tr>
                            <th>Compañía</th>
                            <th>Grupos</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>






@endsection
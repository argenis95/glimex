@extends('layouts.master')

@section('title', 'Mis grupos')

@section('content')


<div class=" dashboard text-white mb-3 p-4">
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
                <table id="mygroups" class="display text-dark">
                    <thead>
                        <tr>
                            <th>Compañía</th>
                            <th>Grupo</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>






@endsection
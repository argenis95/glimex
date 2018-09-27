@extends('layouts.master')

@section('title', 'Registrar empresa')

@section('content')

<div class="card text-dark bg-light mb-3 p-3 text-center">
    <div class="card-header bg-primary">
        <p>Registro de empresas</p>
    </div>
    <form  method="POST" action="/company" id="add_company">
        <div class="card-body">
            <div class="row p-3">
                <div class="col-md-6 ">
                    Nombre
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="name" required/>
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-6">
                    Asignar representantes
                </div>
                <div class="col-md-3">
                    <select multiple class="form-control" name="manager_list" id="select1">
                        @foreach ($managers as $manager)
                            <option class="option}" value="{{ $manager->id }}">{{ $manager->name }} {{ $manager->last_name }}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-primary btn-md m-1" id="add">Agregar<i class="fa fa-caret-right p-1" aria-hidden="true"></i></button>
                </div>
                <div class="col-md-3">
                    <select multiple class="form-control" name="manager_list_selected[]" id="select2">
                    </select>
                    <button class="btn btn-primary btn-md m-1" id="remove"><i class="fa fa-caret-left p-1" aria-hidden="true"></i>Quitar</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
                </div>
            </div>
        </div>
    </form>  
</div>









@endsection
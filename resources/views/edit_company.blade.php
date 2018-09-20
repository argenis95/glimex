@extends('layouts.master')

@section('title', 'Editar compañía')

@section('content')

<div class="card text-dark bg-light mb-3 p-3 text-center">
    <div class="card-header bg-primary">
        <p>Editar Empresa</p>
    </div>
    <form  method="POST" action="/company/{{$company['id']}}" id="edit_company">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" class="form-control" name="company_id" value ="{{$company['id']}}" required/>
        <div class="card-body">
            <div class="row p-3">
                <div class="col-md-6">
                    Nombre
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="name" value="{{$company['name']}}" placeholder="Nombres" required/>
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-6">
                    Editar representantes
                </div>
                <div class="col-md-3">
                    <select multiple class="form-control" name="manager_list[]" id="select1">
                        @foreach ($managers as $manager)
                        <option value="{{ $manager->id }}">{{ $manager->name }} {{ $manager->last_name }}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-primary btn-md m-1" id="add">Agregar<i class="fa fa-caret-right p-1" aria-hidden="true"></i></button>
                </div>
                <div class="col-md-3">
                    <select multiple class="form-control" name="manager_list_selected[]" id="select2">
                        @foreach ($employees as $employ)
                        <option id="option" value="{{ $employ->id }}">{{ $employ->name }} {{ $employ->last_name }}</option>
                        @endforeach
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
@extends('layouts.master')

@section('title', 'Registrar empresa')

@section('content')

<div class="card text-dark bg-light mb-3 p-3 text-center">
    <div class="card-header bg-primary">
        <p>Registro de empresas</p>
    </div>
    <form  method="POST" action="/company">
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
                <div class="col-md-6">
                    <select multiple class="form-control" name="manager_list">
                        @foreach ($managers as $manager)
                            <option value="{{ $manager->id }}">{{ $manager->name }}</option>
                        @endforeach
                    </select>
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
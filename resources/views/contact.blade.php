@extends('layouts.master')

@section('title', 'Contacto')

@section('content')
<div class="dashboard card text-dark bg-white mb-3 p-3 text-center">
    <div class="card-header bg-primary">
        <p>Contacto</p>
    </div>
    <div class="row">
        <div class="col-md-2 col-sm-2">
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="card-body">
                <div class="card text-dark bg-light mb-3 p-3 text-center">
                    <div class="card-header bg-primary">
                        <p>Dirección</p>
                    </div>
                    <div class="card-body">
                        Vía Adolfo López Mateos No. 67 
                        Colonia Magisteria Vista Bella, 
                        Tlalnepantla, Estado de México
                        C.p. 54050
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="card-body">
                <div class="card text-dark bg-light mb-3 p-3 text-center">
                    <div class="card-header bg-primary">
                        <p>Correo y teléfonos</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 col-sm-2"> 
                                <i class="fa fa-phone p-2 text-primary mt-1 fa-2x"></i>
                            </div>
                            <div class="col-md-8 col-sm-8 pt-3"> 
                                53 65 56 13
                                36 40 63 05
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-sm-2"> 
                                <i class="fa fa-envelope-o text-primary fa-2x mt-1 p-2"></i>
                            </div>
                            <div class="col-md-8 col-sm-8 pt-3"> 
                                <a href="mailto:info@glimexico.com">info@glimexico.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-2">
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 col-sm-2">
        </div>
        <div class="card text-dark bg-light mb-3 p-3 text-center col-md-8 col-sm-8">
            <div class="card-header text-white bg-primary">
                Mapa
            </div>
            <div class="card-body">
                <div id="map1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.4314188586586!2d-99.23825!3d19.5230833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDMxJzIzLjEiTiA5OcKwMTQnMTcuNyJX!5e0!3m2!1ses-419!2sar!4v1537720266413" width="800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-2">
        </div>
    </div>
</div>



@endsection
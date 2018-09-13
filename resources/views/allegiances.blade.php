@extends('layouts.master')

@section('title', 'Alianzas')

@section('content')
<div class="services_container">
    <div class="background_image" style="background-image:url(/images/hands.jpg)"></div>
</div>
<div class="container">
    <div class="services_content">
        <div class="icon_ref"><i class="fa fa-handshake-o fa-4x" aria-hidden="true"></i></div>
        <div><h1 class="services_subtitle">Alianzas estratégicas</h1></div>
        <div class="services_text">
            Nuestros alumnos podrán beneficiarse de descuentos al momento de adquirir algún servicio de los siguientes asociados:
        </div>
        <div class="services_text row">
            <div class="col-md-4">
                <a href="http://amprofec.org/" target="_blank"><img class="logo_alle" src="/images/amprofec.jpg"></a>
            </div>
            <div class="col-md-8">
                <p class="text-dark text-center"><a href="http://amprofec.org/" target="_blank">Asociación Mexicana de Profesionales de Ferias, Exposiciones y Convenciones, AMPROFEC A.C.</a></p>
                <p class="text-dark text-justify">Institución que agrupa a las empresas del sector de turismo de negocios. Su compromiso es consolidarse como una entidad promotora de enlaces de negocios y alianzas empresariales del sector al que pertenece, además de promover en los ámbitos nacional e internacional los destinos e infraestructura que posee nuestro país para la organización y participación en exposiciones, ferias especializadas, congresos y convenciones.</p>
            </div>
        </div>
        <br>
        <div class="services_text row">
            <div class="col-md-8">
                <p class="text-dark text-center"><a href="http://www.canadianresorts.mx" target="_blank">Canadian Resorts</a></p>
                <p class="text-dark text-justify">Una empresa turística creada pensando en ofrecer a su familia las mejores vacaciones al más bajo costo. Los destinos incluyen Huatulco, Nuevo Vallarta, Acapulco, Cancún y Veracruz, y cada resort cuenta con diferentes tipos de Suites con capacidad para hospedar de 2 a 8 personas. También cuenta con Spa en cada hotel.</p>
            </div>
            <div class="col-md-4">
                <a href="http://www.canadianresorts.mx" target="_blank"><img src="/images/canadian.png"></a>
            </div>
        </div>
        <div class="services_text row">
            <div class="col-md-4">
                <a href="#" target="_blank"><img class="logo_alle" src="/images/delvalle.png"></a>
            </div>
            <div class="col-md-8">
                <p class="text-dark text-center"><a href="#" target="_blank">Corporativo del Valle y Asociados A.C.</a></p>
                <p class="text-dark text-justify">El mejor grupo de médicos especialistas en medicina general, gastroenterología, cirugía general, cirugía para la obesidad, cirugía vascular, cirugía plástica, cirugía reconstructiva, cirugía estética. Tendrá a su alcance el mejor grupo de médicos especialistas y podrá disfrutar de descuentos especiales en consultas y cirugías.</p>
            </div>
        </div>
        <div class="services_text row">
            <div class="col-md-8">
                <p class="text-dark text-center"><a href="#" target="_blank">Medicina alternativa Reiki</a></p>
                <p class="text-dark text-justify">Energía universal que sana y equilibra cuerpo, mente y espíritu. Tratamientos a domicilio o en nuestras instalaciones. Maestro Reiki, seriedad y respeto.</p>
            </div>
            <div class="col-md-4">
                <a href="#" target="_blank"><img src="/images/reiki.png"></a>
            </div>
        </div>
    </div>
</div>


@endsection
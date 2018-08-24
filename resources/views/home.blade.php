@extends('layouts.master')

@section('title', 'Home')

@section('content')
<div class="home_container">
		<div class="background_image" style="background-image:url(images/empresas.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="home_content">
                        <div class="home_title">¡Alcanza el siguiente nivel!</div>
                        <div class="home_text">Ponemos un mundo de posiblidades en tus manos ¿Hasta  dónde quieres llegar? ¡Nosotros te apoyamos!</div>
                        <div class="button home_button"><a href="services"><span>Saber más</span><span>Saber más</span></a></div>
                    </div>
                </div>
                <div class="col-6">
                </div>
            </div>
        </div>
</div>

<div class="resume ">
	<p class="text-dark">En un mundo tan versátil y dinámico como el de hoy, hablar varios idiomas permite a cada individuo adaptarse a los constantes cambios que estamos experimentando día con día.</p>
	<p class="text-dark">Poseer estas hablidades sin duda te otorgará ventajas importantes por sobre tus competidores, tanto a nivel individual como organizacional.</p>
	<p class="text-dark">Hoy más que nunca, debes considerar la posibilidad de dominar otros idiomas, esta es la puesta que te dará acceso a un mejor nivel de vida; Elimina las fronteras del lenguaje en tu proyecto de vida, proyecta internacionalmente tu organización, conoce nuevos destinos alrededor del mundo o haz nuevos amigos, con GLI de tu lado.</p>
</div>

<div class="learn_more">
<div class="button home_button"><a href="#"><span>Aprender más</span><span>Aprender más</span></a></div>
</div>

@endsection
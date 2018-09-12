@extends('layouts.master')

@section('title', 'Servicios')

@section('content')
<div class="services_container">
    <div class="background_image" style="background-image:url(/images/office.jpg)"></div>
</div>
<div class="container">
    <div class="services_content">
        <div class="icon_ref"><i class="fa fa-building fa-4x" aria-hidden="true"></i></div>
        <div><h1 class="services_subtitle">Empresas</h1></div>
        <div class="services_text">Proyectar sin fronteras una organización es un elemento esencial del éxito, es por eso que GLI se compromete con su empresa , ofreciendo un método exclusivo a sus necesidades y en sincronía con su misión y visión empresariales; El cual permite obtener resultados a corto tiempo enfocándonos a las áreas generales o especializadas, para cada giro de su empresa o institución.
        GLI también le ofrece la posibilidad de capacitar a su personal en sus mismas oficinas, optimizando el tiempo destnado a capacitar el personal.Este servicio permite fomentar el espíritu de superación del personal y la competitividad entre los participantes, lo que fomenta el aprendizaje y el desempeño laboral.</div>
        <br>
        <div class="icon_ref"><i class="fa fa-users fa-4x" aria-hidden="true"></i></div>
        <div><h1 class="services_subtitle">Personas</h1></div>
        <div class="services_text">Nuestro método diseñado para quienes desean lograr un dominio pleno al comunicarse de una forma real y práctica. Ya seas niño, joven, estudiante, profesional, ejecutivo, adulto o ama de casa, en GLI encontrarás un plan diseñado a tu medida y orientado a tus necesidades. Cursos especializados en 12 niveles: elemental, básico, intermedio y avanzado desarrollando las 4 habilidades del idioma. Ofrecemos, a su vez, horarios flexibles y contenido de cursos cuyo diseño está orientado de acuerdo a las necesidades del alumno. Los servicios adicionales incluyen:
            <p class="services_text"><span class="text-primary font-weight-bold">Examen de admisión</span> sin coste, tanto oral como escrito, para colocar al alumno en el nivel que le corresponde</p>
            <p class="services_text"><span class="text-primary font-weight-bold">Instructores</span>, que cambiarán mensualmente con el fin de adecuar el oído a diferentes acentos y pronunciaciones</p>
            <p class="services_text"><span class="text-primary font-weight-bold">Evaluaciones:</span>  Mensualmente se le proporcionarán boletas, las cuales incluyen comentarios individuales con el fin de que los alumnos mejoren los aspectos que son calificados por los instructores.</p>
            <p class="services_text"><span class="text-primary font-weight-bold">Diploma:</span> Al terminar el curso se les entregará un diploma como constancia de sus estudios.</p>
        </div>
        <br>
        <div class="courses_list">
            <h2 class="subtitle">Servicios especiales:</h2>
            <br>
            <div class="row text-dark">
                <ul class="col-4 font-weight-bold">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-one-list" data-toggle="list" href="#list-one" role="tab" aria-controls="home">Conversación</a>
                        <a class="list-group-item list-group-item-action" id="list-two-list" data-toggle="list" href="#list-two" role="tab" aria-controls="profile">Negocios, orientados hacia diferentes especialidades, según la industria</a>
                        <a class="list-group-item list-group-item-action" id="list-three-list" data-toggle="list" href="#list-three" role="tab" aria-controls="messages">Cómo hacer presentaciones en público</a>
                        <a class="list-group-item list-group-item-action" id="list-four-list" data-toggle="list" href="#list-four" role="tab" aria-controls="settings">Elaboración de CV</a>
                        <a class="list-group-item list-group-item-action" id="list-five-list" data-toggle="list" href="#list-five" role="tab" aria-controls="home">TOEFL, GESE, IETLS & Cambridge First Certificate & Proficiency</a>
                        <a class="list-group-item list-group-item-action" id="list-six-list" data-toggle="list" href="#list-six" role="tab" aria-controls="profile">Regularizaciones</a>
                        <a class="list-group-item list-group-item-action" id="list-seven-list" data-toggle="list" href="#list-seven" role="tab" aria-controls="messages">Asesorías</a>
                        <a class="list-group-item list-group-item-action" id="list-eight-list" data-toggle="list" href="#list-eight" role="tab" aria-controls="settings">Traducciones</a> 
                    </div>
                </ul>
                <div class="col-8">
                    <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-one" role="tabpanel" aria-labelledby="list-one-list">Al ser un método predominantemente conversacional, la interacción constante entre los participantes va acostumbrándolos al uso del inglés en cualquier situación dentro del salón de clase, permitiéndoles adquirir cierta naturalidad al usar el idioma.</div>
                    <div class="tab-pane fade" id="list-two" role="tabpanel" aria-labelledby="list-two-list">GLI ofrece cursos enfocados a la adquisición de vocabulario más especializado en determinadas áreas profesionales como lo son los negocios, contabilidad, mercadotecnia, finanzas y otra más.</div>
                    <div class="tab-pane fade" id="list-three" role="tabpanel" aria-labelledby="list-three-list">Desde la primera clase GLI fomenta la habilidad de hablar frente a audiencias hasta llegar al punto en que los alumnos dan presentaciones relacionadas con sus intereses y su trabajo.</div>
                    <div class="tab-pane fade" id="list-four" role="tabpanel" aria-labelledby="list-four-list">En GLI apoyamos en la elaboración de CVs adecuados bajo los estándares más aceptados en los mercados laborales.</div>
                    <div class="tab-pane fade" id="list-five" role="tabpanel" aria-labelledby="list-five-list">En GLI preparamos a los interesados en presentar y aprobar la diversidad de exámenes existentes y certificaciones internacionales en inglés, español y francés para cada finalidad tanto académica como laboral.</div>
                    <div class="tab-pane fade" id="list-six" role="tabpanel" aria-labelledby="list-six-list">En apoyo a nuestros estudiantes, en GLI tenemos el conocimiento, la paciencia y la metodología para transmitir el entendimiento de aquellas áreas gramaticales, funcionales o estructurales en las que tengan duda o problemas</div>
                    <div class="tab-pane fade" id="list-seven" role="tabpanel" aria-labelledby="list-seven-list">GLI tiene como misión ayudar a las personas que tengan algo que ver con los idiomas, ya sea una consulta o una opinión, GLI hará todo lo posible para dar una mano.</div>
                    <div class="tab-pane fade" id="list-eight" role="tabpanel" aria-labelledby="list-eight-list">Nuestro staff de traductores tiene la experiencia necesaria para llevar a cabo traducciones precisas y profesionales principalmente del inglés al español o viceversa.</div>
                </div>
            </div>
        </div>    
    </div>
</div>
@endsection
@extends('layouts.master')

@section('title', 'Servicios')

@section('content')
<div class="services_container">
    <div class="background_image" style="background-image:url(images/office.jpg)"></div>
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
            <h2 class="subtitle">Cursos especiales:</h2>
            <br>
            <div class="row text-dark">
                <ul class="col-4 font-weight-bold">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-one-list" data-toggle="list" href="#list-one" role="tab" aria-controls="home">Conversación</a>
                        <a class="list-group-item list-group-item-action" id="list-two-list" data-toggle="list" href="#list-two" role="tab" aria-controls="profile">Negocios, orientados hacia diferentes especialidades, según la industria</a>
                        <a class="list-group-item list-group-item-action" id="list-three-list" data-toggle="list" href="#list-three" role="tab" aria-controls="messages">Cómo hacer presentaciones en público</a>
                        <a class="list-group-item list-group-item-action" id="list-four-list" data-toggle="list" href="#list-four" role="tab" aria-controls="settings">"Does your resume wear Blue Jeans?"</a>
                        <a class="list-group-item list-group-item-action" id="list-five-list" data-toggle="list" href="#list-five" role="tab" aria-controls="home">TOEFL, GESE, IETLS</a>
                        <a class="list-group-item list-group-item-action" id="list-six-list" data-toggle="list" href="#list-six" role="tab" aria-controls="profile">Cambridge First Certificate & Proficiency</a>
                        <a class="list-group-item list-group-item-action" id="list-seven-list" data-toggle="list" href="#list-seven" role="tab" aria-controls="messages">Regularizaciones</a>
                        <a class="list-group-item list-group-item-action" id="list-eight-list" data-toggle="list" href="#list-eight" role="tab" aria-controls="settings">Asesorías</a>  
                    </div>
                </ul>
                <div class="col-8">
                    <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-one" role="tabpanel" aria-labelledby="list-one-list">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mauris felis, ornare vel ultrices nec, faucibus quis magna. Curabitur eu sapien ultrices, pharetra erat nec, ultricies dolor. Sed ornare lectus eget purus faucibus aliquam. Nam laoreet id ex sit amet maximus. Suspendisse potenti. Fusce lobortis ex viverra auctor blandit. In sollicitudin elementum lacus sit amet cursus. Phasellus volutpat cursus neque. In ut sapien condimentum, elementum dui in, lobortis felis."</div>
                    <div class="tab-pane fade" id="list-two" role="tabpanel" aria-labelledby="list-two-list">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mauris felis, ornare vel ultrices nec, faucibus quis magna. Curabitur eu sapien ultrices, pharetra erat nec, ultricies dolor. Sed ornare lectus eget purus faucibus aliquam. Nam laoreet id ex sit amet maximus. Suspendisse potenti. Fusce lobortis ex viverra auctor blandit. In sollicitudin elementum lacus sit amet cursus. Phasellus volutpat cursus neque. In ut sapien condimentum, elementum dui in, lobortis felis."</div>
                    <div class="tab-pane fade" id="list-three" role="tabpanel" aria-labelledby="list-three-list">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mauris felis, ornare vel ultrices nec, faucibus quis magna. Curabitur eu sapien ultrices, pharetra erat nec, ultricies dolor. Sed ornare lectus eget purus faucibus aliquam. Nam laoreet id ex sit amet maximus. Suspendisse potenti. Fusce lobortis ex viverra auctor blandit. In sollicitudin elementum lacus sit amet cursus. Phasellus volutpat cursus neque. In ut sapien condimentum, elementum dui in, lobortis felis."</div>
                    <div class="tab-pane fade" id="list-four" role="tabpanel" aria-labelledby="list-four-list">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mauris felis, ornare vel ultrices nec, faucibus quis magna. Curabitur eu sapien ultrices, pharetra erat nec, ultricies dolor. Sed ornare lectus eget purus faucibus aliquam. Nam laoreet id ex sit amet maximus. Suspendisse potenti. Fusce lobortis ex viverra auctor blandit. In sollicitudin elementum lacus sit amet cursus. Phasellus volutpat cursus neque. In ut sapien condimentum, elementum dui in, lobortis felis."</div>
                    <div class="tab-pane fade" id="list-five" role="tabpanel" aria-labelledby="list-five-list">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mauris felis, ornare vel ultrices nec, faucibus quis magna. Curabitur eu sapien ultrices, pharetra erat nec, ultricies dolor. Sed ornare lectus eget purus faucibus aliquam. Nam laoreet id ex sit amet maximus. Suspendisse potenti. Fusce lobortis ex viverra auctor blandit. In sollicitudin elementum lacus sit amet cursus. Phasellus volutpat cursus neque. In ut sapien condimentum, elementum dui in, lobortis felis."</div>
                    <div class="tab-pane fade" id="list-six" role="tabpanel" aria-labelledby="list-six-list">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mauris felis, ornare vel ultrices nec, faucibus quis magna. Curabitur eu sapien ultrices, pharetra erat nec, ultricies dolor. Sed ornare lectus eget purus faucibus aliquam. Nam laoreet id ex sit amet maximus. Suspendisse potenti. Fusce lobortis ex viverra auctor blandit. In sollicitudin elementum lacus sit amet cursus. Phasellus volutpat cursus neque. In ut sapien condimentum, elementum dui in, lobortis felis."</div>
                    <div class="tab-pane fade" id="list-seven" role="tabpanel" aria-labelledby="list-seven-list">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mauris felis, ornare vel ultrices nec, faucibus quis magna. Curabitur eu sapien ultrices, pharetra erat nec, ultricies dolor. Sed ornare lectus eget purus faucibus aliquam. Nam laoreet id ex sit amet maximus. Suspendisse potenti. Fusce lobortis ex viverra auctor blandit. In sollicitudin elementum lacus sit amet cursus. Phasellus volutpat cursus neque. In ut sapien condimentum, elementum dui in, lobortis felis."</div>
                    <div class="tab-pane fade" id="list-eight" role="tabpanel" aria-labelledby="list-eight-list">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mauris felis, ornare vel ultrices nec, faucibus quis magna. Curabitur eu sapien ultrices, pharetra erat nec, ultricies dolor. Sed ornare lectus eget purus faucibus aliquam. Nam laoreet id ex sit amet maximus. Suspendisse potenti. Fusce lobortis ex viverra auctor blandit. In sollicitudin elementum lacus sit amet cursus. Phasellus volutpat cursus neque. In ut sapien condimentum, elementum dui in, lobortis felis."</div>
                </div>
            </div>
        </div>    
    </div>
</div>
@endsection
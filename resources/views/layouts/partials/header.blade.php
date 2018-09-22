<header class="header" id="header">
    <div>
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                            <div class="logo d-flex">
                                    <a href="/"><img src="/images/logo.png" height="67.5" width="78.75"></a>
                                    <p class="name">Global Language Instruction</p>                            
                            </div>
                            <div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
                                <div class="header_top_nav">
                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                        @if (Auth::check())
                                        <div class="dropdown">
                                            <a href="#" class="dropbtn">Hola, {{Auth::user()['name']}}<i class="fa fa-caret-down p-1" aria-hidden="true"></i></a>
                                            <div class="dropdown-content">
                                                <a class="text-primary" href="/account_config"><i class="fa fa-cogs p-1" aria-hidden="true"></i>Editar cuenta</a>
                                                <a class="text-primary" href="/logout"><i class="fa fa-sign-out p-1" aria-hidden="true"></i>Cerrar sesión</a>
                                            </div>
                                        </div>
                                        <i class="fa fa-user-circle-o fa-3x pl-3 text-primary" aria-hidden="true"></i> 
                                        @else
                                        <li>
                                            <a href="/login">Acceder <i class="fa fa-sign-in p-1" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="/contact">Contacto <i class="fa fa-envelope-o p-1" aria-hidden="true"></i></a>
                                        </li>
                                        @endif   
                                    </ul>
                                </div>
                            </div>
                            <div class="hamburger ml-auto">
                                <i class="fa fa-bars" id="responsive-menu" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_nav" id="header_nav_pin">
            <div class="header_nav_inner">
                <div class="header_nav_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
                                    <nav class="main_nav">
                                        <ul class="d-flex flex-row align-items-center justify-content-start">
                                            @if (Utilities::get_user_type()=='admin')
                                            <li>
                                                <a href="/users">Usuarios</a>
                                            </li>
                                            <li>
                                                <a href="/company">Empresas</a>
                                            </li>
                                            <li>
                                                <a href="/reports">Calificaciones</a>
                                            </li>
                                            </li>
                                            @elseif (Utilities::get_user_type()=='manager')
                                            <li>
                                                <a href="/groups">Grupos</a>
                                            </li>
                                            @elseif (Utilities::get_user_type()=='instructor')
                                            <li>
                                                <a href="/scores">Mis grupos</a>
                                            </li>
                                            @elseif (Utilities::get_user_type()=='student')
                                            <li>
                                                <a href="/student_card/{{ Auth::user()['id']}}">Mis notas</a>
                                            </li>
                                            @endif
                                            @if (!Auth::check())
                                            <li>
                                                <a href="/">Inicio</a>
                                            </li>
                                            <li>
                                                <a href="/about">Acerca de nosotros</a>
                                            </li>
                                            <li>
                                                <a href="/services">Servicios</a>
                                            </li>
                                            @endif
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

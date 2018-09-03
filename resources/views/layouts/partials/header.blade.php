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
                                        <li>@if (Auth::check())
                                            <a href="logout">Hola, usuario</a>
                                            @else
                                            <a href="login">Acceder</a>
                                            @endif
                                        </li>
                                        <li>
                                            <a href="registerdone">Menú 2</a>
                                        </li>
                                        <li>
                                            <a href="#">Menú 1</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header_top_phone">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>+34 586 778 8892</span>
                                </div>
                            </div>
                            <div class="hamburger ml-auto">
                                <i class="fa fa-bars" aria-hidden="true"></i>
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
                                            <li>
                                                <a href="/">Inicio</a>
                                            </li>
                                            <li>
                                                <a href="about">Acerca de nosotros</a>
                                            </li>
                                            <li>
                                                <a href="services">Servicios</a>
                                            </li>
                                            @if (Auth::check())
                                            <li>
                                                <a href="user_management">Manejo de usuario</a>
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

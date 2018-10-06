<div class="modal fade" id="modal-menu" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary text-center" id="ModalLabel">Menú</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-3 p-3">
                    <ul>
                        @if (Utilities::get_user_type()=='admin')
                        <li class="menu_item menu-modal">
                            <a class="text-primary link-modal" href="/users">Usuarios</a>
                        </li>
                        <li class="menu_item menu-modal">
                            <a class="text-primary link-modal" href="/company">Empresas</a>
                        </li>
                        <li class="menu_item menu-modal">
                            <a class="text-primary link-modal" href="/groups">Grupos</a>
                        </li>
                        <li class="menu_item menu-modal">
                            <a class="text-primary link-modal" href="/reports">Calificaciones</a>
                        </li>
                        @elseif (Utilities::get_user_type()=='manager')
                        <li class="menu_item menu-modal">
                            <a class="text-primary link-modal" href="/groups/view">Grupos</a>
                        </li>
                        @elseif (Utilities::get_user_type()=='instructor')
                        <li class="menu_item menu-modal">
                            <a class="text-primary link-modal" href="/scores">Mis grupos</a>
                        </li>
                        @elseif (Utilities::get_user_type()=='student')
                        <li class="menu_item menu-modal">
                            <a class="text-primary link-modal" href="/student_card/{{ Auth::user()['id']}}">Mis notas</a>
                        </li>
                        @endif
                        @if (!Auth::check())
                        <li class="menu_item menu-modal">
                            <a class="text-primary link-modal" href="/">Inicio</a>
                        </li>
                        <li class="menu_item menu-modal">
                            <a class="text-primary link-modal" href="/about">Acerca de nosotros</a>
                        </li>
                        <li class="menu_item menu-modal">
                            <a class="text-primary link-modal" href="/services">Servicios</a>
                        </li>
                        @endif
                        <br>
                        <br>
                        @if (Auth::check())
                        <li class="menu_item menu-modal">
                            <a class="text-primary link-modal" href="/account_config">Editar cuenta</a>
                        </li>
                        <li class="menu_item menu-modal">
                            <a class="text-primary link-modal" href="/logout">Cerrar sesión</a>
                        </li>
                        @else
                        <li class="menu_item menu-modal">
                            <a class="text-primary link-modal" href="/login">Acceder</a>
                        </li>
                        <li class="menu_item menu-modal">
                            <a class="text-primary link-modal" href="/contact">Contacto</a>
                        </li> 
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
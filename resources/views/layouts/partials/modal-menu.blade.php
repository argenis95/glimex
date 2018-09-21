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
                    @if (Utilities::get_user_type()=='admin')
                    <div class="row">
                        <div class="col-sm-12 menu-modal">
                            <a class="text-primary link-modal" href="/users">Usuarios</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 menu-modal">
                            <a class="text-primary link-modal" href="/company">Empresas</a>
                        </div>
                    </div> 
                    @elseif (Utilities::get_user_type()=='manager')
                    <div class="row">
                        <div class="col-sm-12 menu-modal">
                            <a class="text-primary link-modal" href="/groups">Grupos</a>
                        </div>
                    </div>
                    @elseif (Utilities::get_user_type()=='instructor')
                    <div class="row">
                        <div class="col-sm-12 menu-modal">
                            <a class="text-primary link-modal" href="/scores">Mis grupos</a>
                        </div>
                    </div>
                    @endif
                    @if (!Auth::check())
                    <div class="row">
                        <div class="col-sm-12 menu-modal">
                            <a class="text-primary link-modal" href="/">Inicio</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 menu-modal">
                            <a class="text-primary link-modal" href="/about">Acerca de nosotros</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 menu-modal">
                            <a class="text-primary link-modal" href="/services">Servicios</a>
                        </div>
                    </div>
                    @endif
                    <br>
                    <br>
                    @if (Auth::check())
                    <div class="row">
                        <div class="col-sm-12 menu-modal">
                            <a class="text-primary link-modal" href="/account_config">Editar cuenta</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 menu-modal">
                            <a class="text-primary link-modal" href="/logout">Cerrar sesión</a>
                        </div>
                    </div>
                    @else
                    <div class="row">
                        <div class="col-sm-12 menu-modal">
                            <a class="text-primary link-modal" href="/login">Acceder</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 menu-modal">
                            <a class="text-primary link-modal" href="/contact">Contacto</a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
$(function(){
    $('#users').DataTable({
        ajax: {
            url: "/users_datatables",
            dataSrc: '',
            type: "GET",
        },
        columns: [
            { data: 'name', name: 'Nombre'},
            { data: 'last_name', name: 'Apellido'},
            { data: 'email', name: 'Email'},
            { data: 'user_type_id', name: 'Tipo'},
            { 
                render:   function (data, type, row, meta){
                return '<button  class="btn btn-warning m-1 edit" data-id="' +row.id+ '"><i class="fa fa-pencil" aria-hidden="true"></i></button>'
                + '<button class="btn btn-danger m-1 delete" data-id="' +row.id+ '"><i class="fa fa-trash" aria-hidden="true"></i></button>';
            }
            }
        ],
    });

    $('#users').on('click', '.edit', function() {
        var id = $(this).attr('data-id');
        $(location).attr('href', '/users/' + id);
    });
    $('#users').on('click', '.delete', function(){
        var id = $(this).attr('data-id');
        bootbox.confirm({
            title: "Borrar usuario",
            message: "¿Seguro que quiere eliminar al usuario?",
            buttons: {
                cancel: {
                    label: '<i class="fa fa-times"></i> Cancelar'
                },
                confirm: {
                    label: '<i class="fa fa-check"></i> Confirmar'
                }
            },
            callback: function (result) {
                if (result) {
                    $.ajax({
                        method: 'DELETE',
                        url: '/users/'+ id,
                        success: function(){
                            $(location).attr('href', '/users');
                        }
                    });
                }
            }
        });
    })
});


$(function(){
    $('#change_pass').submit(function(event){
        var pass=$('#password').val();
        var pass2=$('#password_check').val();
        if (pass===pass2)
        {
            return true;
        }
        bootbox.alert("Las contraseñas no coinciden.");
        return false;
    })
});
/*********************************usuarios eliminados */
$(function(){
    $('#deleted_users').DataTable({
        ajax: {
            url: "/deleted",
            dataSrc: '',
            type: "GET",
        },
        columns: [
            { data: 'name', name: 'Nombre'},
            { data: 'last_name', name: 'Apellido'},
            { data: 'email', name: 'Email'},
            { data: 'user_type_id', name: 'Tipo'},
            { 
                render:   function (data, type, row, meta){
                return '<button  class="btn btn-success m-1 restore" data-id="' +row.id+ '"><i class="fa fa-recycle" aria-hidden="true"></i></button>' 
                +'<button class="btn btn-danger m-1 delete" data-id="' +row.id+ '"><i class="fa fa-trash" aria-hidden="true"></i></button>';
            }
            }
        ],
    });

    $('#deleted_users').on('click', '.restore', function(){
        var id = $(this).attr('data-id');
        bootbox.confirm({
            title: "Restaurar usuario",
            message: "¿Seguro que quiere restaurar este usuario?",
            buttons: {
                cancel: {
                    label: '<i class="fa fa-times"></i> Cancelar'
                },
                confirm: {
                    label: '<i class="fa fa-check"></i> Confirmar'
                }
            },
            callback: function (result) {
                if (result) {
                    $.ajax({
                        method: 'POST',
                        url: '/deleted_users/'+ id,
                        success: function(){
                            $(location).attr('href', '/deleted_users');
                        }
                    });
                }
            }
        });
    })
    $('#deleted_users').on('click', '.delete', function(){
        var id = $(this).attr('data-id');
        bootbox.confirm({
            title: "Eliminar usuario",
            message: "¿Seguro que quiere eliminar este usuario? Esta acción no puede regresarse.",
            buttons: {
                cancel: {
                    label: '<i class="fa fa-times"></i> Cancelar'
                },
                confirm: {
                    label: '<i class="fa fa-check"></i> Confirmar'
                }
            },
            callback: function (result) {
                if (result) {
                    $.ajax({
                        method: 'DELETE',
                        url: '/deleted_users/'+ id,
                        success: function(){
                            $(location).attr('href', '/deleted_users');
                        }
                    });
                }
            }
        });
    })
});
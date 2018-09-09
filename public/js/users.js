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
        $(location).attr('href', '/user_management/' + id);
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
                        url: '/user_management/'+ id,
                        success: function(){
                            $(location).attr('href', '/user_management');
                        }
                    });
                }
            }
        });
    })
});


function check($user) {
    var password1= document.change_pass.password.value;
    var password2= document.change_pass.password_check.value;
    
    if (password1.value != password.value) {
        input.setCustomValidity('Password Must be Matching.');
    } else {
        // input is valid -- reset the error message
        input.setCustomValidity('');
    }
}

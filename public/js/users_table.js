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
});
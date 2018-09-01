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
            { 
                defaultContent:   
                '<button class="btn btn-warning m-1"><i class="fa fa-pencil aria-hidden="true"></i></button>'
                + '<button class="btn btn-danger m-1"><i class="fa fa-trash aria-hidden="true"></i></button>'
            }
        ],
    });
});
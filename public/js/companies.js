$(function(){
    $('#companies').DataTable({
        ajax: {
            url: "/companies_datatables",
            dataSrc: '',
            type: "GET",
        },
        columns: [
            { data: 'id', name: 'ID'},
            { data: 'name', name: 'Nombre'},
            
            { 
                render:   function (data, type, row, meta){
                return '<button  class="btn btn-warning m-1 edit" data-id="' +row.id+ '"><i class="fa fa-pencil" aria-hidden="true"></i></button>'
                + '<button class="btn btn-danger m-1 delete" data-id="' +row.id+ '"><i class="fa fa-trash" aria-hidden="true"></i></button>';
            }
            }
        ],
    });
    $('#companies').on('click', '.edit', function() {
        var id = $(this).attr('data-id');
        $(location).attr('href', '/company/' + id);
    });
    $('#companies').on('click', '.delete', function(){
        var id = $(this).attr('data-id');
        bootbox.confirm({
            title: "Eliminar compañía",
            message: "¿Seguro que quiere eliminar la compañía?",
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
                        url: '/company/'+ id,
                        success: function(){
                            $(location).attr('href', '/company');
                        }
                    });
                }
            }
        });
    })
});




$(function(){

    $('#add').click(function() {  
        return !$('#select1 option:selected').remove().appendTo('#select2');  
    });  
    $('#remove').click(function() {  
        return !$('#select2 option:selected').remove().appendTo('#select1');  
    });  
    $('#add_company').submit(function(){
        $('.option').prop("selected", "selected");
    });
    $('#add_company').submit(function(){
        var sel=$('#select2').val();
        if (sel.length=== 0)
        {
            bootbox.alert("Seleccione un representante");
            return false;
        }

        return true;
    })
    $('#edit_company').submit(function(){
        $('.option').prop("selected", "selected");
    });
    $('#edit_company').submit(function(){
        var sel=$('#select2').val();
        if (sel.length=== 0)
        {
            bootbox.alert("Seleccione un representante");
            return false;
        }

        return true;
    })
   
});  

   
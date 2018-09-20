$(function(){
    $('#groups').DataTable({
        ajax: {
            url: "/groups_datatables",
            dataSrc: '',
            type: "GET",
        },
        columns: [
            { data: 'name', name: 'Compañía'},
            {
                render: function (data, type, row, meta){
                    var html='';
                    for (var i=0; i<row.courses.length; i++){
                        var group = row.courses[i];
                        html += '<tr>';
                        html += '<td>' + group.name + '</td>';
                        html += '<td>';
                        html += '<button class="btn btn-warning m-1 edit" data-id="' + group.id+ '"><i class="fa fa-pencil" aria-hidden="true"></i></button>' + '<button class="btn btn-danger m-1 delete" data-id="' + group.id+ '"><i class="fa fa-trash" aria-hidden="true"></i></button>';
                        html += '</td>';
                        html += '</tr>';
                    }
                    return html;
                }
            }
        ],
    });
    $('#groups').on('click', '.edit', function() {
        var id = $(this).attr('data-id');
        $(location).attr('href', '/groups/edit/' + id);
    });
    $('#groups').on('click', '.delete', function(){
        var id = $(this).attr('data-id');
        bootbox.confirm({
            title: "Eliminar grupo",
            message: "¿Seguro que quiere eliminar el grupo?",
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
                        url: '/groups/'+ id,
                        success: function(){
                            $(location).attr('href', '/groups');
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
    $('#edit_group').submit(function(){
        $('option').prop("selected", "selected");
    });
    $('#edit_group').submit(function(){
        $('#option').prop("selected", "selected");
    });
    $('#create_group').submit(function(){
        $('option').prop("selected", "selected");
    });
    $('#create_group').submit(function(){
        $('#option').prop("selected", "selected");
    });
   
});  


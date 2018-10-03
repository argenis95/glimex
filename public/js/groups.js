$(function(){
    $('#groups').DataTable({
        responsive: true,
        columnDefs: [
            { responsivePriority: 1, targets: 2},
            { responsivePriority: 0, targets: 1 },
            { responsivePriority: 2, targets: 0}
        ],
        ajax: {
            url: "/groups_datatables",
            dataSrc: '',
            type: "GET",
        },
        columns: [
            { data: 'company', name: 'Compañía'},
            { data: 'course', name: 'Grupo'},
            { render:   function (data, type, row, meta){
                return '<button  class="btn btn-warning m-1 edit" data-id="' +row.id+ '"><i class="fa fa-pencil" aria-hidden="true"></i></button>' 
                +'<button class="btn btn-danger m-1 delete" data-id="' +row.id+ '"><i class="fa fa-trash" aria-hidden="true"></i></button>';
                }
            }
        ],
        rowGroup: {
            dataSrc: 'company'
        }
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
        $('.option').prop("selected", "selected");
    });
    $('#create_group').submit(function(){
        $('.option').prop("selected", "selected");
    });
   
});  



$(function(){
    $('#mygroups').DataTable({ 
        responsive: true,
        columnDefs: [
            { responsivePriority: 1, targets: 2},
            { responsivePriority: 2, targets: 1}
        ],
        ajax: {
            url: "/my_groups_data",
            dataSrc: '',
            type: "GET",
        },
        columns: [
            { data: 'company', name: 'Compañía'},
            { data: 'course', name: 'Grupo'},
            { render:   function (data, type, row, meta){
                return '<a href="/groups/view/'+row.id+'"><button title="Ver grupo" class="btn btn-primary m-1 view-group" data-id="' +row.id+ '"><i class="fa fa-chevron-right" aria-hidden="true"></i><i class="fa fa-chevron-right" aria-hidden="true"></i></button></a>'
                }       
            }
        ],
        rowGroup: {
            dataSrc: 'company'
        }
    });
});

$(function(){
    var url = window.location.pathname;
    var id = url.substring(url.lastIndexOf('/')+ 1);
    $('#group-reports').DataTable({ 
        responsive: true,
        columnDefs: [
            { responsivePriority: 1, targets: 18},
            { responsivePriority: 2, targets: 1}
        ],
        ajax: {
            url: "/group_reportsdata/" + id,
            dataSrc: '',
            type: "GET",
        },
        columns: [
            { data: 'year', name: 'Año'},
            { data: 'month', name: 'Mes'},
            { data: 'name', name: 'Nombre'},
            { data: 'last_name', name: 'Apellido'},
            { data: 'lessons_taken', name: 'Lessons taken'},
            { data: 'absences', name: 'Absences'},
            { data: 'times_late', name: 'Times late'},
            { data: 'fluency', name: 'Fluency'},
            { data: 'pronunciation', name: 'Pronunciation'},
            { data: 'grammar_word_order', name: 'Grammar'},
            { data: 'vocabulary', name: 'Vocabulary'},
            { data: 'presentation', name: 'Presentation'},
            { data: 'class_participation', name: 'Class participation'},
            { data: 'homework_assignements', name: 'Homework'},
            { data: 'writing', name: 'Writing'},
            { data: 'reading', name: 'Reading'},
            { data: 'listenning', name: 'Listenning'},
            { data: 'exam', name: 'Exam'},
            { data: 'final', name: 'Final'},
            { data: 'comments', name: 'Comments'},
            { data: 'updated_at', name: 'Actualizado'},
        ],
    });
});
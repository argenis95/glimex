$(function(){
    $('#group-scores').DataTable({
        responsive: true,
        columnDefs: [
            { responsivePriority: 1, targets: 0 },
            { responsivePriority: 2, targets: -1 }
        ],
        ajax: {
            url: "/students_data",
            dataSrc: '',
            type: "GET",
        },
        columns: [
            { data: 'company', name: 'Compañía'},
            { data: 'course', name: 'Grupos'},
            { render:   function (data, type, row, meta){
                return '<button id="view" class="btn btn-primary m-1 view" data-id="'+row.id+'"><i class="fa fa-eye" aria-hidden="true"></i></button>'
                }
            }
        ],
        rowGroup: {
            dataSrc: 'company'
        }
    });
});

$(function(){
    $(document).on('click', '.view', function(){
        var id=$(this).attr('data-id');
        $.get('/scores_data/' + id, function(students ){
            var html='';
            for (var i=0; i<students.length; i++){
                var student = students[i];
                html += '<tr>';
                html += '<td>' +student.name+ '</td>';
                html += '<td>' +student.last_name+ '</td>';
                html += '<td><a href="/scores/student/'+student.id+'"><button class="btn btn-primary m-1 view" title="Editar notas" data-id="' +student.id+ '"><i class="fa fa-eye" aria-hidden="true"></i></button></a></td>';
                html += '</tr>';
            }
            $('#students_group').html(html);
            $('#modal-list-students').modal('show');
        } );
        $("#close").click(function(){
            $('#modal-list-students').modal('hide');
            var html='';
            $('#students_group').html(html);
        })
    });

        
})

$(function(){
    $('#notes-table .query').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Buscar '+title+'" />' );
    } );
    var url = window.location.pathname;
    var id = url.substring(url.lastIndexOf('/')+ 1);
    $('#notes-table').DataTable({
        responsive: true,
        columnDefs: [
            { responsivePriority: 0, targets: 18},
            { responsivePriority: 1, targets: 19},
            { responsivePriority: 1, targets: 21},
            { responsivePriority: 0, targets: 0}
        ],
        ajax: {
            url: "/report_data/" + id ,
            dataSrc: '',
            type: "GET",
        },
        columns: [
            { data: 'course', name: 'Grupo'},
            { data: 'year', name: 'Año'},
            { data: 'month', name: 'Mes'},
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
            { render:   function (data, type, row, meta){
                return '<div class="text-center"><button title="Ver comentarios" class="btn btn-primary m-1 comments" data-id="'+row.id+'"><i class="fa fa-eye" aria-hidden="true"></i></button></div>'
                }
            },
            { data: 'updated_at', name: 'Actualizado'},
            {   render: function (data, type, row, meta){
                    var html='';
                    var bloq= row.month_lock;
                    if (bloq < '2'){
                        html+= '<i class="fa fa-unlock-alt fa-2x pl-1" aria-hidden="true" title="Edición disponible"></i>';
                    }
                    else
                    {
                        html+= '<i class="fa fa-lock fa-2x pl-1" aria-hidden="true" title="Edición bloqueada"></i>';
                    }
                    return html;
                }
            },
            {
                render: function (data, type, row, meta){
                    var html='';
                    var bloq= row.month_lock;
                    if (bloq < '2'){
                        return '<a href="/scores/edit/'+row.id+'"><button type="button" class="btn btn-warning m-1"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>'+'<input type="checkbox" title="Seleccione para agregar esta calificación al promedio" id="'+row.id+'" class="avg-calc" data-id="'+row.id+'">';
                    }
                    else{
                        return '<button class="btn btn-secondary m-1" data-id="' +row.id+ '"><i class="fa fa-minus" aria-hidden="true"></i></button>' + '<input type="checkbox" title="Seleccione para agregar esta calificación al promedio" id="'+row.id+'" class="avg-calc" data-id="'+row.id+'">';
                    }
                }
            }
        ],
        
    });
    var table= $('#notes-table').DataTable();
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.header() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    });
    $('#notes-table').on('click', '.comments', function() {
        var id=$(this).attr('data-id');
        $.get('/scores/' + id, function(score ){
            var comments='<p class=text-dark>' +score.comments+ '</p>';
            $('#student-comments').html(comments);
            $('#modal-student').modal('show');
        }); 
    });
});

$(function(){
    $('#reports .query').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Buscar '+title+'" />' );
    } );
    $('#reports').DataTable({
        responsive: true,
        columnDefs: [
            { responsivePriority: 1, targets: 0 },
            { responsivePriority: 2, targets: -1 }
        ],
        ajax: {
            url: "/get_reports",
            dataSrc: '',
            type: "GET",
        },
        columns: [
            {   render: function (data, type, row, meta){
                    var username= row.username;
                    username += ' ';
                    username += row.last_name;
                    return username;
                }
            },
            { data: 'year', name: 'Año' },
            { data: 'month', name: 'Mes' },
            { data: 'course', name: 'Grupo' },
            { data: 'sID', name: 'ID del reporte' },
            {   render: function (data, type, row, meta){
                    if (row.month_lock < '2'){
                        return '<i class="fa fa-unlock-alt fa-2x pl-1" aria-hidden="true" title="Edición disponible"></i>'
                    }
                    else
                    {
                        return '<i class="fa fa-lock fa-2x pl-1" aria-hidden="true" title="Edición bloqueada"></i>';
                    }
                },
            },
            {   render: function (data, type, row, meta){
                    if (row.month_lock >= '2'){
                        return '<button class="btn btn-success m-1 unlock" data-id="' +row.sID+ '"><i class="fa fa-key" aria-hidden="true"></i></button>' + '<button class="view-score btn btn-primary m-1" data-id="'+row.sID+'"><i class="fa fa-eye" aria-hidden="true"></i></button>' + '<button class="delete-score btn btn-danger m-1" data-id="'+row.sID+'"><i class="fa fa-trash" aria-hidden="true"></i></button>'+ '<input type="checkbox" title="Seleccione para agregar esta calificación al promedio" id="'+row.id+'" class="avg-calc" data-id="'+row.id+'">';
                    }
                    else
                    {
                        return '<button class="btn btn-secondary m-1" data-id="' +row.sID+ '"><i class="fa fa-minus" aria-hidden="true"></i></button>' + '<button class="view-score btn btn-primary m-1" data-id="'+row.sID+'"><i class="fa fa-eye" aria-hidden="true"></i></button>' + '<button class="delete-score btn btn-danger m-1" data-id="'+row.sID+'"><i class="fa fa-trash" aria-hidden="true"></i></button>' + '<input type="checkbox" title="Seleccione para agregar esta calificación al promedio" id="'+row.id+'" class="avg-calc" data-id="'+row.id+'">';
                    }
                }
        },

           
        ],
    });
    $('#reports').on('click', '.unlock', function(){
        var id = $(this).attr('data-id');
        bootbox.confirm({
            title: "Desbloquear edición",
            message: "¿Seguro que quiere desbloquear este boletín?",
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
                        url: '/scores/unlock/'+ id,
                        success: function(){
                            $(location).attr('href', '/reports');
                        }
                    });
                }
            }
        });
    })
    $('#reports').on('click', '.delete-score', function(){
        var id = $(this).attr('data-id');
        bootbox.confirm({
            title: "Eliminar reporte",
            message: "¿Seguro que quiere eliminar este boletín?",
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
                        method: 'delete',
                        url: '/scores/delete/'+ id,
                        success: function(){
                            $(location).attr('href', '/reports');
                        }
                    });
                }
            }
        });
    })
    var table= $('#reports').DataTable();
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.header() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    });
});



$(function(){
    $(document).on('click', '.view-score', function(){
        var id=$(this).attr('data-id');
        $.get('/scores_data/notes/' + id, function(score ){
            var html='';
            var comments='';
            var button='';
            html+= '<tr>';
            html+= '<td>Lessons Taken</td>';
            html+= '<td>' +score.lessons_taken+ '</td>';
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Absences</td>';
            html+= '<td>' +score.absences+ '</td>';
            html+= '<tr>';
            html+= '<td>Times late</td>';
            html+= '<td>' +score.times_late+ '</td>';
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Fluency</td>'
            html+= '<td>' +score.fluency+ '</td>';
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Pronunciation</td>';
            html+= '<td>' +score.pronunciation+ '</td>';
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Grammar and Word Order</td>';
            html+= '<td>' +score.grammar_word_order+ '</td>';
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Vocabulary</td>';
            html+= '<td>' +score.vocabulary+ '</td>';
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Presentation</td>';
            html+= '<td>' +score.presentation+ '</td>';
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Class participation</td>';
            html+= '<td>' +score.class_participation+ '</td>';
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Homework Assignements</td>';
            html+= '<td>' +score.homework_assignements+ '</td>'
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Writing</td>';
            html+= '<td>' +score.writing+ '</td>';
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Reading</td>';
            html+= '<td>' +score.reading+ '</td>';
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Listenning</td>';
            html+= '<td>' +score.listenning+ '</td>';
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Exam</td>';
            html+= '<td>' +score.exam+ '</td>';
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Final</td>';
            html+= '<td>'+score.final+ '</td>';
            html+= '</tr>';
            comments+='<p class=text-dark>' +score.comments+ '</p>';
            if (score.month_lock<'2'){
                button+='<a href="/scores/edit/'+score.id+'"><button type="button" class="btn btn-primary">Editar</button></a>';
            }
            else {
                button+='<button type="button" class="btn btn-secondary">Editar</button>';
            }
            $('#comments').html(comments);
            $('.modal-footer').html(button);
            $('#notes-show').html(html);
            $('#modal-list-notes').modal('show');
        });
    });
});
$(function(){
    $('#student-card .query').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Buscar '+title+'" />' );
    } );
    var url = window.location.pathname;
    var id = url.substring(url.lastIndexOf('/')+ 1);
    $('#student-card').DataTable({
        ajax: {
            url: "/student_note_data/" + id ,
            dataSrc: '',
            type: "GET",
        },
        columns: [
            { data: 'course', name: 'Grupo'},
            { data: 'year', name: 'Año'},
            { data: 'month', name: 'Mes'},
            { render:   function (data, type, row, meta){
                return '<button title="Ver detalladamente" class="btn btn-primary m-1 look-score" data-id="'+row.id+'"><i class="fa fa-eye" aria-hidden="true"></i></button>' + '<a href="/scores/'+row.id+'/excel"><button title="Guardar como csv" class="btn btn-success m-1 excel" data-id="'+row.id+'"><i class="fa fa-file-excel-o" aria-hidden="true"></i></button></a>'
                }
            },
        ],
        
    });
    
});

$(function(){
    $(document).on('click', '.look-score', function(){
        var id=$(this).attr('data-id');
        $.get('/scores_data/notes/' + id, function(score ){
            var html='';
            var comments='';
            html+= '<tr>';
            html+= '<td>Lessons Taken</td>';
            html+= '<td>' +score.lessons_taken+ '</td>';
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Absences</td>';
            html+= '<td>' +score.absences+ '</td>';
            html+= '<tr>';
            html+= '<td>Times late</td>';
            html+= '<td>' +score.times_late+ '</td>';
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Fluency</td>'
            html+= '<td>' +score.fluency+ '</td>';
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Pronunciation</td>';
            html+= '<td>' +score.pronunciation+ '</td>';
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Grammar and Word Order</td>';
            html+= '<td>' +score.grammar_word_order+ '</td>';
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Vocabulary</td>';
            html+= '<td>' +score.vocabulary+ '</td>';
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Presentation</td>';
            html+= '<td>' +score.presentation+ '</td>';
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Class participation</td>';
            html+= '<td>' +score.class_participation+ '</td>';
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Homework Assignements</td>';
            html+= '<td>' +score.homework_assignements+ '</td>'
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Writing</td>';
            html+= '<td>' +score.writing+ '</td>';
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Reading</td>';
            html+= '<td>' +score.reading+ '</td>';
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Listenning</td>';
            html+= '<td>' +score.listenning+ '</td>';
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Exam</td>';
            html+= '<td>' +score.exam+ '</td>';
            html+= '</tr>';
            html+= '<tr>';
            html+= '<td>Final</td>';
            html+= '<td>'+score.final+ '</td>';
            html+= '</tr>';
            comments+='<p class=text-dark>' +score.comments+ '</p>';
            $('#comments').html(comments);
            $('#notes-show').html(html);
            $('#modal-list-notes').modal('show');
        });
    });
});






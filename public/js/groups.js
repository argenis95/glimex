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
    $('#group-reports .query').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Buscar '+title+'" />' );
    } );
    var url = window.location.pathname;
    var id = url.substring(url.lastIndexOf('/')+ 1);
    $('#group-reports').DataTable({  
        responsive: true,
        columnDefs: [
            { responsivePriority: 0, targets: 18},
            { responsivePriority: 1, targets: 19},
            { responsivePriority: 1, targets: 21},
            { responsivePriority: 0, targets: 0}
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
            { render:   function (data, type, row, meta){
                return '<div class="text-center"><button title="Ver comentarios" class="btn btn-primary m-1 comments" data-id="'+row.id+'"><i class="fa fa-eye" aria-hidden="true"></i></button></div>'
                }
            },
            { data: 'updated_at', name: 'Actualizado'},
            { render:   function (data, type, row, meta){
                return '<input type="checkbox" title="Seleccione para agregar esta calificación al promedio" id="'+row.id+'" class="avg-calc" data-id="'+row.id+'">'
                }
            },
        ],
    });
    var table= $('#group-reports').DataTable();
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
    $(document).on('click', '.comments', function(){
        var id=$(this).attr('data-id');
        $.get('/scores/' + id, function(score ){
            var comments='<p class=text-dark>' +score.comments+ '</p>';
            $('#report-comments').html(comments);
            $('#modal-comments').modal('show');
        }); 
    });     
});




function on(){ console.log("Hemos pulsado en on"); } 
function off(){ console.log("Hemos pulsado en off"); }

$(function calculator(){
    var f= 0.0;
    var p= 0.0;
    var g= 0.0;
    var v= 0.0;
    var pr= 0.0;
    var cp= 0.0;
    var hw= 0.0;
    var w= 0.0;
    var r= 0.0;
    var l= 0.0;
    var ex= 0.0;
    var final= 0.0;
    var i=0;
    $("#group-reports").on('click', '.avg-calc', function(){
        var id= $(this).attr('id');
        var id2= "#"+id;
        if ($(id2).is(':checked')){
            var id=$(this).attr('data-id');
            $.get('/scores/' + id, function(score){
                f+= score.fluency;
                p+= score.pronunciation;
                g+= score.grammar_word_order;
                v+= score.vocabulary;
                pr+= score.presentation
                cp+= score.class_participation;
                hw+= score.homework_assignements;
                w+= score.writing;
                r+= score.reading;
                l+= score.listenning;
                ex+= score.exam;
                final+= score.final;
                i+=1;
                var f_avg= f / i;
                var p_avg= p / i;
                var g_avg= g / i;
                var v_avg= v / i;
                var pr_avg= pr / i;
                var cp_avg= cp / i;
                var hw_avg= hw / i;
                var w_avg= w / i;
                var r_avg= r / i;
                var l_avg= l / i;
                var ex_avg= ex / i;
                var final_avg= final / i;
                $('#f').html(f_avg.toFixed(2));
                $('#p').html(p_avg.toFixed(2));
                $('#g').html(g_avg.toFixed(2));
                $('#v').html(v_avg.toFixed(2));
                $('#pr').html(pr_avg.toFixed(2));
                $('#cp').html(cp_avg.toFixed(2));
                $('#hw').html(hw_avg.toFixed(2));
                $('#w').html(w_avg.toFixed(2));
                $('#r').html(r_avg.toFixed(2));
                $('#l').html(l_avg.toFixed(2));
                $('#ex').html(ex_avg.toFixed(2));
                $('#final').html(final_avg.toFixed(2));
                console.log(i);
            })  
        }
        else {
            if (i > 0){
                var id=$(this).attr('data-id');
                $.get('/scores/' + id, function(score ){
                    f-= score.fluency;
                    p-= score.pronunciation;
                    g-= score.grammar_word_order;
                    v-= score.vocabulary;
                    pr-= score.presentation
                    cp-= score.class_participation;
                    hw-= score.homework_assignements;
                    w-= score.writing;
                    r-= score.reading;
                    l-= score.listenning;
                    ex-= score.exam;
                    final-= score.final;
                    i-=1;
                    var f_avg= f / i;
                    var p_avg= p / i;
                    var g_avg= g / i;
                    var v_avg= v / i;
                    var pr_avg= pr / i;
                    var cp_avg= cp / i;
                    var hw_avg= hw / i;
                    var w_avg= w / i;
                    var r_avg= r / i;
                    var l_avg= l / i;
                    var ex_avg= ex / i;
                    var final_avg= final / i;
                    $('#f').html(f_avg.toFixed(2));
                    $('#p').html(p_avg.toFixed(2));
                    $('#g').html(g_avg.toFixed(2));
                    $('#v').html(v_avg.toFixed(2));
                    $('#pr').html(pr_avg.toFixed(2));
                    $('#cp').html(cp_avg.toFixed(2));
                    $('#hw').html(hw_avg.toFixed(2));
                    $('#w').html(w_avg.toFixed(2));
                    $('#r').html(r_avg.toFixed(2));
                    $('#l').html(l_avg.toFixed(2));
                    $('#ex').html(ex_avg.toFixed(2));
                    $('#final').html(final_avg.toFixed(2));
                    console.log(i);
                })
            }
        }   
    })  
});

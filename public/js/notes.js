$(function(){
    $(".view").click(function(){
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
        }
        
        );
    })

    $("#close").click(function(){
        $('#modal-list-students').modal('hide');
        var html='';
        $('#students_group').html(html);
    })

        
})



$(function(){
    $(".view-score").click(function(){
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
                button+='<a href="/scores/edit/'+score.id+'"><button type="button" class="btn btn-primary">Editar</button></a>'
            }
            else {
                button+='<button type="button" class="btn btn-secondary">Editar</button>'
            }
            $('#comments').html(comments);
            $('.modal-footer').html(button);
            $('#notes-show').html(html);
            $('#modal-list-notes').modal('show');
        });
    })

        
})

$(function(){
    var url = window.location.pathname;
    var id = url.substring(url.lastIndexOf('/')+ 1);
    $('#notes-table').DataTable({
        responsive: true,
        columnDefs: [
            { responsivePriority: 1, targets: 0 },
            { responsivePriority: 2, targets: -1 }
        ],
        ajax: {
            url: "/report_data/" + id ,
            dataSrc: '',
            type: "GET",
        },
        columns: [
            { data: 'created_at', name: 'Fecha'},
            {   render: function (data, type, row, meta){
                    var html='';
                    var bloq= row.month_lock;
                    if (bloq < '2'){
                        html+= '<i class="fa fa-unlock-alt fa-2x pl-1" aria-hidden="true" title="Edición disponible"></i>';
                    }
                    else
                    {
                        html+= '<i class="fa fa-lock fa-2x pl-1" aria-hidden="true" title="Edición bloqueada"></i>'
                    }
                    return html;
                }
            },
            {
                render: function (data, type, row, meta){
                    return '<button id="view" class="btn btn-primary m-1 view-score" data-id="'+row.id+'"><i class="fa fa-eye" aria-hidden="true"></i></button>';
                }
            }
        ],
    });
});
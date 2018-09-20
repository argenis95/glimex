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
        $.get('/scores_data/notes/' + id, function(scores ){
            var html='';
            for (var i=0; i<scores.length; i++){
                var score= scores[i];
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
                html+= '<td>' +score.exam+ '</td>'
                html+= '</tr>';
                html+= '<tr>';
                html+= '<td>Final</td>';
                html+= '<td>'+score.final+ '</td>'
                html+= '</tr>';
            }
            $('#notes-show').html(html);
            $('#modal-list-notes').modal('show');
        }
        
        );
    })

        
})
$(function calculator1(){
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
    $("#reports").on('click', '.avg-calc', function(){
        var id= $(this).attr('id');
        var id2= "#"+id;
        if ($(id2).is(':checked')){
            var score_id=$(this).attr('data-id');
            $.get('/scores/' + score_id, function(score){
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
                var score_id=$(this).attr('data-id');
                $.get('/scores/' + score_id, function(score ){
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
                    if (i>0){
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
                    }
                    else{
                        var f_avg= 0;
                        var p_avg= 0;
                        var g_avg= 0;
                        var v_avg= 0;
                        var pr_avg= 0;
                        var cp_avg= 0;
                        var hw_avg= 0;
                        var w_avg= 0;
                        var r_avg= 0;
                        var l_avg= 0;
                        var ex_avg= 0;
                        var final_avg= 0;
                    }
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

$(function calculator2(){
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
                    if (i>0){
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
                    }
                    else{
                        var f_avg= 0;
                        var p_avg= 0;
                        var g_avg= 0;
                        var v_avg= 0;
                        var pr_avg= 0;
                        var cp_avg= 0;
                        var hw_avg= 0;
                        var w_avg= 0;
                        var r_avg= 0;
                        var l_avg= 0;
                        var ex_avg= 0;
                        var final_avg= 0;
                    }
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

$(function calculator3(){
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
    $("#notes-table").on('click', '.avg-calc', function(){
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
                    if (i>0){
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
                    }
                    else{
                        var f_avg= 0;
                        var p_avg= 0;
                        var g_avg= 0;
                        var v_avg= 0;
                        var pr_avg= 0;
                        var cp_avg= 0;
                        var hw_avg= 0;
                        var w_avg= 0;
                        var r_avg= 0;
                        var l_avg= 0;
                        var ex_avg= 0;
                        var final_avg= 0;
                    }
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


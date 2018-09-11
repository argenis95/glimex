$(function(){
    ("#company").mouseenter(function(){
        $("#company_info").display
    });
    ("#company").mouseleave(function(){
        $("#company_info").hide
    });
    ("#groups").mouseenter(function(){
        $("#groups_info").display
    });
    ("#groups").mouseleave(function(){
        $("#group_info").hide
    });
    ("#students").mouseenter(function(){
        $("#students_info").display
    });
    ("#students").mouseleave(function(){
        $("#students_info").hide
    });


});
$(document).ready(function(){
    $("#group").on('mouseover', function(){
        $(".group-info").show();
    });
    $("#group").on('mouseout', function(){
        $(".group-info").hide();
    });
});
$(document).ready(function(){
    $("#group").on('mouseover', function(){
        $(".group-info").show();
    });
    $("#group").on('mouseout', function(){
        $(".group-info").hide();
    });
    $("#company").on('mouseover', function(){
        $(".company-info").show();
    });
    $("#company").on('mouseout', function(){
        $(".company-info").hide();
    });
    $("#student").on('mouseover', function(){
        $(".student-info").show();
    });
    $("#student").on('mouseout', function(){
        $(".student-info").hide();
    });
});


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
});
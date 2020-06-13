$(document).ready(function(){

        requestInfoAlumnos();

});

function requestInfoAlumnos(){

    $.ajax({
        type:"GET",
        url:"../php/SelectAlumno.php",
        data: {func: "SeleccionarMaterias"},
        contentType: 'application/html; charset=utf-8',
        dataType: "html",
        cache:false,
        success:function(respAX){
                $('#infoMaterias').html(respAX);
        },
        error: function(a) {
            $('#infoMaterias').html("<tr> <td> - </td> <td> - </td> </tr>");
          console.log('error:\n');
          console.log(a);
        }
    });

}
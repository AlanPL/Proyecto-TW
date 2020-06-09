$(document).ready(function(){

        requestInfoAlumnos();

      $("#deleteAlumnoBtn").click(function(){

          //e.preventDefault();
          var id = $("#boletaAlumno").val();
          $.ajax({
              type:"POST",
              url:"../php/crudAdmin.php",
              data: {func: "BorrarAlumno", id: id},
              cache:false,
              success:function(respAX){
                  requestInfoAlumnos();
                  $('#cancelBtn').trigger('click');
                  if (respAX==1) {
                      $.notify("Alumno Eliminado","success");
                  }else{
                      $.notify("No se pudo eliminar el alumno :(","error");
                  }
              },
              error: function(a) {
                console.log('error:\n');
                console.log(a);
              }
          });

      });


});

function btnDeleteAlumnoClicked(id){
    $("#boletaAlumno").val(id);
}

function requestInfoAlumnos(){

    $.ajax({
        type:"GET",
        url:"../php/getMethodsAdmin.php",
        data: {func: "SeleccionarAlumnos"},
        contentType: 'application/html; charset=utf-8',
        dataType: "html",
        cache:false,
        success:function(respAX){
                $('#alumnoInfo').html(respAX);
        },
        error: function(a) {
            $('#alumnoInfo').html("<tr> <td> - </td> <td> - </td> <td> - </td> <td> - </td> </tr>");
          console.log('error:\n');
          console.log(a);
        }
    });

}



function btnEditAlumnoClicked(id){

    $.ajax({
        type:"GET",
        url:"../php/getMethodsAdmin.php",
        data: {func: "SeleccionarAlumnoId", id: id},
        cache:false,
        success:function(respAX){
            var AX = JSON.parse(respAX);
            if (AX.found) {
                $( "#adminContent" ).load( "EditarAlumno.php",{data: AX.data},function(){}).hide().fadeIn();
            }else{
                $.notify("No se encontró al alumno :(","error");
            }
        },
        error: function(a) {
          console.log('error:\n');
          console.log(a);
        }
    });
}

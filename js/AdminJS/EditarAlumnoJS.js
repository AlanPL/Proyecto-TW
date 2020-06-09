$(document).ready(function(){

   $("#formEditarAlumno").submit(function(e){
        e.preventDefault();
        var formulario = $("#formEditarAlumno").serialize();
        $.ajax({
            type:"POST",
            url:"../php/crudAdmin.php",
            data: formulario,
            cache:false,
            success:function(respAX){

                if (respAX==1) {
                    $.notify("Datos Guardados","success");

                }else{
                    alert(respAX);
                    $.notify("No se pudieron guardar los datos :(","error");
                }
            },
            error: function(a) {
              console.log('error:\n');
              console.log(a);
            }
        });
   })
});

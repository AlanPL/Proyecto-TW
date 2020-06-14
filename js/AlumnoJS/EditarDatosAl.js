$(document).ready(function(){

   $("#formEditarContrasenaAl").submit(function(e){
        e.preventDefault();
        var formulario = $("#formEditarContrasenaAl").serialize();
        $.ajax({
            type:"POST",
            url:"../php/crudAlumno.php",
            data: formulario,
            cache:false,
            success:function(respAX){

                if (respAX==1) {    
                    $.notify("Contraseña editada","success");
                }else{
                    $.notify("Algo salió mal... :/","error");
                }
            },
            error: function(a) {
              console.log('error:\n');
              console.log(a);
            }
        });
   })
});

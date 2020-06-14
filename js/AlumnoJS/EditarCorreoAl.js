$(document).ready(function(){

      $("#formEditarCorreoAl").submit(function(e){
        e.preventDefault();
        var formulario = $("#formEditarCorreoAl").serialize();
        $.ajax({
            type:"POST",
            url:"../php/crudAlumno.php",
            data: formulario,
            cache:false,
            success:function(respAX){

                if (respAX==1) {    
                     $.notify("Correo editado, se cerrará sesión para aplicar los cambios","success");
                    $(function(){function show_popup(){
                        $(location).attr('href','../php/cerrarSesion.php?nombreSesion=correo');};
                        window.setTimeout( show_popup, 3000 ); });
                }else{
                    $.notify("Algo salió mal...","error");
                }
            },
            error: function(a) {
              console.log('error:\n');
              console.log(a);
            }
        });
   })

});

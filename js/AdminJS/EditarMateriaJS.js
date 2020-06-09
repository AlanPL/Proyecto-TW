$(document).ready(function(){

   $("#formEditarMateria").submit(function(e){       
        e.preventDefault();
        var formulario = $("#formEditarMateria").serialize();
        $.ajax({
            type:"POST",
            url:"../php/crudAdmin.php",
            data: formulario,
            cache:false,
            success:function(respAX){

                if (respAX==1) {
                    $.notify("Datos Guardados","success");

                }else{
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

$(document).ready(function(){

   $("#formAgregarMateria").submit(function(e){
        e.preventDefault();
        var formulario = $("#formAgregarMateria").serialize();
        $.ajax({
            type:"POST",
            url:"../php/crudAdmin.php",
            data: formulario,
            cache:false,
            success:function(respAX){

                if (respAX==1) {
                    $.notify("Materia Agregada","success");

                }else{
                    $.notify("No se pudo agregar la materia :(","error");
                }
            },
            error: function(a) {
              console.log('error:\n');
              console.log(a);
            }
        });
   })
});

$(document).ready(function(){

   $("#formRegistrarMaterias").submit(function(e){
        e.preventDefault();
        var formulario = $("#formRegistrarMaterias").serialize();
        $.ajax({
            type:"POST",
            url:"../php/crudAlumno.php",
            data: formulario,
            cache:false,
            success:function(respAX){

                if (respAX==1) {
                    $("#formRegistrarMaterias").trigger("reset");     
                    $.notify("Materias Registradas","success");
                }else{
                    $("#formRegistrarMaterias").trigger("reset");
                    $.notify("Acción realizada","success");
                }
            },
            error: function(a) {
              console.log('error:\n');
              console.log(a);
            }
        });
   })

});

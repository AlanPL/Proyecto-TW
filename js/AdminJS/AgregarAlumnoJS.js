$(document).ready(function(){

    $("#formAgregarAlumno").submit(function(e){
         e.preventDefault();
         var formulario = $("#formAgregarAlumno").serialize();
         $.ajax({
             type:"POST",
             url:"../php/crudAdmin.php",
             data: formulario,
             cache:false,
             success:function(respAX){

                 if (respAX==1) {
                     $("#formAgregarAlumno").trigger("reset");
                     $.notify("Alumno Agregado","success");
                 }else{
                     $.notify("No se pudo agregar al alumno :(","error");
                 }
             },
             error: function(a) {
               console.log('error:\n');
               console.log(a);
             }
         });
    })
});

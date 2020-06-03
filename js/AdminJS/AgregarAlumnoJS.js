$(document).ready(function(){

   $("#formAgregarAlumno").submit(function(e){
        e.preventDefault();        
        var formulario = $("#formAgregarAlumno").serialize();
        $.ajax({
            type:"POST",
            url:"php/sesiones.php",
            data: formulario,
            cache:false,
            success:function(respAX){
                var AX = JSON.parse(respAX);
                if (AX.code==1) {
                    window.location.href = AX.redirect;
                }else{

                }
            },
            error: function(a) {
              console.log('error:\n');
              console.log(a);
            }
        });
   })
});

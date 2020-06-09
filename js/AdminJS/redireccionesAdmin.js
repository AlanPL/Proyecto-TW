$(document).ready(function(){

    var direcciones = [ "Estadisticas.php", "InfoAlumnos.php", "InfoUnidadesAprendizaje.php", "EditarInformacion.php",
            "AgregarAlumno.php", "EditarAlumno.php", "AgregarMateria.php", "EditarUA.php" ];

    $( "#adminContent" ).load( direcciones[0],function(){}).hide().fadeIn();

   $("#EstadisticasBtn").click(function(){
        $( "#adminContent" ).load( direcciones[0],function(){}).hide().fadeIn();
   })
   $("#infoAlumnosBtn").click(function(){
        $( "#adminContent" ).load( direcciones[1],function(){}).hide().fadeIn();
   })
   $("#infoUABtn").click(function(){
        $( "#adminContent" ).load( direcciones[2],function(){}).hide().fadeIn();
   })
   $("#editarInfoBtn").click(function(){
        $( "#adminContent" ).load( direcciones[3],function(){}).hide().fadeIn();
   })
   $("#editarInfoDD").click(function(){
        $( "#adminContent" ).load( direcciones[3],function(){}).hide().fadeIn();
   })

  
   $("#editarAlumnoBtn").click(function(){
        $( "#adminContent" ).load( direcciones[5],function(){}).hide().fadeIn();
   })


});

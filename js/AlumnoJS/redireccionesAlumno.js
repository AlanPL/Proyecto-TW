$(document).ready(function(){

    var direcciones = [ "InicioAlumno.php", "Materias.php", "PerfilAl.php" ];

    $( "#ContenidoAlumno" ).load( direcciones[0],function(){}).hide().fadeIn();

   $("#BotonInicioAlumno").click(function(){
        $( "#ContenidoAlumno" ).load( direcciones[0],function(){}).hide().fadeIn();
   })
   $("#BotonMaterias").click(function(){
        $( "#ContenidoAlumno" ).load( direcciones[1],function(){}).hide().fadeIn();
   })
   $("#BotonPerfilAl").click(function(){
        $( "#ContenidoAlumno" ).load( direcciones[2],function(){}).hide().fadeIn();
   })
});
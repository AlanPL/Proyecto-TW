$(document).ready(function(){


    $.ajax({
        type:"GET",
        url:"../php/statsAdmin.php",
        data: {},
        cache:false,
        success:function(respAX){
            //alert(respAX);
            var AX = JSON.parse(respAX);
            if (AX.error) {
                $.notify("Hubo un error :(","error");
            }else{
                $.notify("exito","success");

                $( "#numAlumnos" ).html(AX.data.numAlumnos);
                $( "#numMaterias" ).html(AX.data.numMaterias);

                for (var s = 2; s < 7; s++) {
                    $("#solicitudesSem"+s).html("Total de Solicitudes: "+AX.data.solicitudesPorSemestre[s-2]);
                    var percentage = Math.round( (AX.data.solicitudesPorSemestre[s-2] / AX.data.solicitudesTotales)*100 );
                    $("#percentage"+s).html( percentage +"%");
                    $("#percentageBar"+s).css("width", percentage+"%");

                    if (AX.data['semestre'+s] != 'undefined' && AX.data['semestre'+s] != null ) {

                        for (var i = 0; i < AX.data['semestre'+s].length; i++) {
                            var nombreMateria = AX.data['semestre'+s][i].nombre;
                            var recurse = AX.data['semestre'+s][i].recurse;
                            var primeraVez = AX.data['semestre'+s][i].primeraVez;
                            var data = AX.data['semestre'+s];
                            pedirYMostrarDatos(s,i, nombreMateria, recurse, primeraVez, data);
                        }

                    }
                }


            }
        },
        error: function(a) {
          console.log('error:\n');
          console.log(a);
        }
    });


});

function pedirYMostrarDatos(numSemestre, i, nombreMateria, recurse, primeraVez, data){

    (function(nombreMateria, recurse, primeraVez){
        $("#GraficasSemestre"+numSemestre).append(
            $("<div class='col-xl-4 col-lg-4'>").load( "graphTemplate.php", {data: data, index: i},
                function(){
                    dibujarGrafica(nombreMateria, recurse, primeraVez);
                }
            )
        );

    })(nombreMateria, recurse, primeraVez);
}

function dibujarGrafica(nombreMateria, recursamiento, primeraVez){

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Pie Chart Example
    var ctx = document.getElementById(nombreMateria);
    var myPieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ["Recursamiento", "Por Primera Vez"],//titulos on hover
        datasets: [{
          data: [recursamiento, primeraVez], //proporcion de los datos en la grafica
          backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
          hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
          hoverBorderColor: "rgba(234, 236, 244, 1)",
        }],
      },
      options: {
        maintainAspectRatio: false,
        tooltips: {
          backgroundColor: "rgb(255,255,255)",
          bodyFontColor: "#858796",
          borderColor: '#dddfeb',
          borderWidth: 1,
          xPadding: 15,
          yPadding: 15,
          displayColors: false,
          caretPadding: 10,
        },
        legend: {
          display: false
        },
        cutoutPercentage: 0,
      },
    });

}

$(document).ready(function(){

    $.ajax({
        type:"GET",
        url:"../php/statsAdmin.php",
        data: {},
        cache:false,
        success:function(respAX){
            alert(respAX);
            var AX = JSON.parse(respAX);
            if (AX.error) {
                $.notify("Hubo un error :(","error");
            }else{
                $.notify("exito","success");

                $( "#numAlumnos" ).html(AX.data.numAlumnos);
                $( "#numMaterias" ).html(AX.data.numMaterias);
            }
        },
        error: function(a) {
          console.log('error:\n');
          console.log(a);
        }
    });


});

function dibujarGrafica(semestre){
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Pie Chart Example
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ["Recursamiento", "Por Primera Vez"],//titulos on hover
        datasets: [{
          data: [48,81], //proporcion de los datos en la grafica
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

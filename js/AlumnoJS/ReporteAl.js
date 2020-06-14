$(document).ready(function(){

    $("#GenerarReporte").click(function(){
        savePDF('reporteMaterias','Reporte de materias', 800);
    });
});

function savePDF(id, nombrePDF, width) {
    var element = document.getElementById(id);
    var f = new Date();
    var fecha = f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear();
    var opt = {
        margin:       [30, 10, 30, 10],
        filename:     nombrePDF+'.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        pagebreak:      { mode: 'avoid-all', before:'.break-page'},
        html2canvas:  {  scale: 2, width: width },
        jsPDF:        { unit: 'pt', format: 'A4', orientation: 'portrait' }
      };

      // New Promise-based usage:
      html2pdf().set(opt).from(element).save();
}

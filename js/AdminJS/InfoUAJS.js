$(document).ready(function(){

        requestUAData();

      $("#deleteUABtn").click(function(){

          //e.preventDefault();
          var id = $("#UAid").val();
          $.ajax({
              type:"POST",
              url:"../php/crudAdmin.php",
              data: {func: "BorrarMateria", id: id},
              cache:false,
              success:function(respAX){
                  requestUAData();
                  $('#cancelBtn').trigger('click');
                  if (respAX==1) {
                      $.notify("Materia Eliminada","success");
                  }else{
                      $.notify("No se pudo eliminar la materia :(","error");
                  }
              },
              error: function(a) {
                console.log('error:\n');
                console.log(a);
              }
          });

      });



});


function requestUAData(){

    $.ajax({
        type:"POST",
        url:"../php/crudAdmin.php",
        data: {func: "SeleccionarMaterias"},
        cache:false,
        success:function(respAX){
                $('#uaInfo').html(respAX);
        },
        error: function(a) {
            $('#uaInfo').html("<tr> <td> - </td> <td> - </td> <td> - </td> <td> - </td> </tr>");
          console.log('error:\n');
          console.log(a);
        }
    });

};

function btnDeleteUAClicked(id){
    $("#UAid").val(id);
    $("#uaName").text("UA");
}

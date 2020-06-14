function toggleHidden(sel) {
    elem = document.querySelector(sel)
    elem.hidden = elem.hidden ? false : true;
}
                
var max=7;
function informarItemsElegidos(elemento) {
    var elementosObtenidos = document.getElementsByName(elemento);
    var elegidos = 0;
    for (var i = 0; i < elementosObtenidos.length; i++) {
        if (elementosObtenidos[i].checked){
            ++elegidos;
            if(elegidos>max) {
                alert("Solo puedes registrar "+max+" materias.");
                elementosObtenidos[i].checked=false;
                --elegidos;
            }
        }
    }
    document.getElementById("cajaTexto").value = elegidos;
    if(elegidos<1){
        document.getElementById("RegistrarMateriasBtn").disabled=1;
    }else{
        document.getElementById("RegistrarMateriasBtn").disabled=0;
    }

}

/*
function mi_alerta(){
    var mensaje;
    var opcion = confirm("¿Seguro que ya elegiste todas tus materias?, esta acción no se puede deshacer");
    if (opcion == true) {
        document.body.innerHTML += "<a href='alumno.php?page=RegistroCompleto'></a>";
    }
}*/
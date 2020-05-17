function toggleHidden(sel) {
                elem = document.querySelector(sel)
                elem.hidden = elem.hidden ? false : true;
            }
                
            var max=7;
            //El contador es un array de forma que cada posición del array es una linea del formulario
            var contador=new Array(0,0);
            function validar(check,grupo) {
                if (check.checked==true){
                    contador[grupo]++;
                        if (contador[grupo]>max) {
                            alert("Solo puedes registrar "+max+" materias.");
                            check.checked=false;
                            contador[grupo]--;
                        }
                }else {
                    //si la casilla no estaba marcada, resto uno al contador de grupo
                    contador[grupo]--;
                }
               document.formulario2.cajaTexto.value = contador[grupo];
            if(contador[grupo]==0){
                document.formulario3.boton.disabled=1;
            }else{
                document.formulario3.boton.disabled=0;
            }
            }
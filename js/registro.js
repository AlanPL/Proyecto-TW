$(document).ready(function(){
    
    $.validator.addMethod("StrongPassword",function(value){
        return /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/.test(value);

    },"Por favor ingrese una contraseña mas segura");
    
    $.validator.addMethod("NumeroDeBoleta",function(value){
        return /((((200|201)([0-9]))|((199)(3|4|5|6|7|8|9)))([0-9]+))|((2020)([0-9]+))/.test(value);
    },"Ingrese su numero de boleta correctamente");
    
    
    $("#form1").validate({
        rules:{
            nombre:{
                required:true,
                //nowhitespace:true
            },
            correo:{
                required:true,
                email:true
            },
            contrasena:{
                required:true,
                StrongPassword:true
            },
            boleta:{
                required:true,
                digits:true,
                minlength:8,
                maxlength:10,
                NumeroDeBoleta:true
            },
            primerApe:{
                required:true
            },
            segundoApe:{
                required:true
            },
            fechaNac:{
                required:true,
                nowhitespace:true,
            }
        },
        highlight:function(element){
            $(element).addClass("c1");
            $(element).removeClass("c2");
        },
        unhighlight:function(element){
            $(element).addClass("c2");
            $(element).removeClass("c1");
        },
        messages:{
            nombre:{
                required:"Nombre es obligatorio"
            },
            primerApe:{
                required:"Apellido paterno es obligatorio"
            },
            segundoApe:{
                required:"Apellido materno es obligatorio"
            },
            correo:{
                required:"Correo es obligatorio",
                email:"Correo invalido"
            },
            contrasena:{
                required:"Ingrese contrasenia"
            },
            fechaNac:{
                required:"Ingrese su fecha de nacimiento"
            },
            boleta:{
                required:"Ingrese boleta"
            }
        },
        submitHandler: subform
        /*onValid:function(e){
            e.preventDefault();
            $.ajax({
                url: "php/registro_AX.php",
                method: "POST",
                data: $("#form1").serialize(),
                cache: false,
                success:function(respAX){
                    var AX = JSON.parse(respAX);
                    var titulo = "<h2>CRUD - TW - 20202</h2>";
                    $.alert({
                        title:titulo,
                        content:AX.msj,
                        icon:"fas fa-cogs fa-2x",
                        theme:"light",
                        onDestroy:function(){
                            if(AX.cod == 0 || AX.cod == 2){
                                location.reload();
                            }
                            if(AX.cod == 1){
                                location.replace("./index.php");
                            }
                        }
                    });
                }
            });
        }*/
    });
    function subform(){
            var datos = $("#form1").serialize();
            $.ajax({
                url: "php/RegistroDeUsuarios.php",
                method: "POST",
                data: datos,//$("#form1").serialize(),
                cache: false,
                success: function(respAX){
                    var AX = JSON.parse(respAX);
                    var titulo = "<h2>CRUD - TW - 20202</h2>";
                    $.alert({
                        title: titulo,
                        content: AX.msj,
                        theme: "supervan",
                        onDestroy: function(){
                            if(AX.cod == 0 || AX.cod == 2){
                                location.reload();
                            }
                            if(AX.cod == 1){
                                location.replace("index.php");
                            }
                        }
                    });
                }
            });
        }
});

$(document).ready(function(){
    
    /*$.validator.addMethod("StrongPassword",function(value){
        return /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/.test(value);

    },"Por favor, ingrese una contrasenia mas segura");*/
    
    /*$.validator.addMethod("NumeroDeBoleta",function(value){
        return /((((200|201)([0-9]))|((199)(3|4|5|6|7|8|9)))([0-9]+))|((2020)([0-9]+))/.test(value);
    },"Ingrese su numero de boleta correctamente");*/
    
    
    $("#form1").validate({
        rules:{
            correo:{
                required:true,
                email:true
                //StrongPassword:true
            },
            boleta:{
                required:true,
                digits:true,
                minlength:8,
                maxlength:10,
                NumeroDeBoleta:true
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
            contrasena:{
                required:"Ingrese contrasenia",
            },
            correo:{
                required:"Ingrese su correo electronico",
                email:"Ingrese un correo valido"
            }
        },
        submitHandler: subform
        });
        /*onValid:function(e){*/
        function subform(){
            var datos = $("#form1").serialize();
            $.ajax({
                url: "php/index_AX.php",
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
                            if(AX.val == 0){
                                location.reload();
                            }
                            if(AX.val == 1){
                                location.replace("Alumno/alumno.php");
                            }
                        }
                    });
                }
            });
        }
    
});

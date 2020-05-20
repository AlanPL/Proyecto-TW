$(document).ready(function(){
    
    $.validator.addMethod("StrongPassword",function(value){
        return /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/.test(value);

    },"Please Enter Strong password");
    
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
            contrasenia:{
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
            apellido_1:{
                required:true,
                nowhitespace:true
            },
            apellido_2:{
                required:true,
                nowhitespace:true
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
            correo:{
                required:"Correo es obligatorio",
                email:"Correo invalido"
            },
            contrasenia:{
                required:"Ingrese contrasenia"
            },
            boleta:{
                required:"Ingrese boleta"
            }
        }
    });
});
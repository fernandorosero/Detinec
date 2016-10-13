/**
 * 
 */
function getCookie(c_name){
    var c_value = document.cookie;
    var c_start = c_value.indexOf(" " + c_name + "=");
    if (c_start == -1){
        c_start = c_value.indexOf(c_name + "=");
    }
    if (c_start == -1){
        c_value = null;
    }else{
        c_start = c_value.indexOf("=", c_start) + 1;
        var c_end = c_value.indexOf(";", c_start);
        if (c_end == -1){
            c_end = c_value.length;
        }
        c_value = unescape(c_value.substring(c_start,c_end));
    }
    return c_value;
}
 
function setCookie(c_name,value,exdays){
    var exdate=new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
    document.cookie=c_name + "=" + c_value;
}
 
if(getCookie('detinec3')!="1"){
    document.getElementById("barraaceptacion").style.display="block";
}
function PonerCookie(){
    setCookie('detinec3','1',365);
    document.getElementById("barraaceptacion").style.display="none";
}
/******* INICIO CRUD **************/
function crearContacto(nombre, telefono, email, comentario){
        var parametros = {
                "nombre" : nombre,
                "telefono" : telefono,
                "email" : email,
                "comentario" : comentario
        };
        $.ajax({
                data:  parametros,
                url:   'controller/Detinec_CRUD_Create_Contacto.php',
                type:  'post',
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                    if(response == 400){    
                        $("#resultado").html("No se ha podido enviar el comentario!");
                        $(".resultado").removeClass("none").addClass("resultadoKO");
                    }else
                    {
                        $("#resultado").html(response);
                        $('#nombre').val('');
                        $('#telefono').val('');
                        $('#email').val('');
                        $('#comentario').val('');
                        $(".resultado").removeClass("none").addClass("resultadoOK");
                    }
                    $("#formulario").addClass("none");
                }
        });
}

/******* FIN CRUD **************/
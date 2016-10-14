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
                        $("#imgResultado").attr("src","view/img/iconoAlertaWarning.png");
                    }else
                    {
                        $("#resultado").html(response);
                        $('#nombre').val('');
                        $('#telefono').val('');
                        $('#email').val('');
                        $('#comentario').val('');
                        $(".resultado").removeClass("none").addClass("resultadoOK");
                        $("#imgResultado").attr("src","view/img/iconoAlertaOk.png");
                    }
                    $("#formulario").addClass("none");
                }
        });
}

/******* FIN CRUD **************/

/******** INICIO FORMULARIO CONTACTO ************/

function validarCampos(nombre, telefono, email, comentario){
    nombre = document.getElementById(nombre);
    telefono = document.getElementById(telefono);
    email = document.getElementById(email);
    comentario = document.getElementById(comentario);
    if(nombre.value == ""){
        alert("El campo Nombre est\u00E1 vac\u00EDo.");
        nombre.focus();
        return false;
    } /*****     \u00FA        */
    else{
        if (telefono.value == ""){
            alert ("El campo tel\u00E9fono est\u00E1 vac\u00EDo.");
            telefono.focus();
            return false;
        }
        else{
            if(email.value == ""){
                alert("El campo Correo electr\u00F3nico est\u00E1 vac\u00EDo.");
                email.focus();
                return false;
            }
            else{
                if(comentario.value == ""){
                    alert ("El campo comentario est\u00E1 vac\u00EDo.")
                    comentario.focus();
                    return false;
                }
                else{
                    return true;
                }
            }
        }
    }
    
    
    
}
/******** FIN FORMULARIO CONTACTO ************/


/******* INICIO FORMULARIO LOGIN ****************/

function validarCamposLogin(usuario, password){
    usuario = document.getElementById(usuario);
    password = document.getElementById(password);
    if (usuario.value == ""){
        alert ("El campo Usuario est\u00E1 vac\u00EDo.");
        usuario.focus();
        return false;
    }else{
        if (password.value == ""){
            alert ("El campo Contraseña est\u00E1 vac\u00EDo.");
            password.focus();
            return false;
        }
        else{
            return true;
        }
    }
}
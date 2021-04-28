$(document).ready(function(){
    $(document.getElementById('btnReg')).click(function(){
        let nom = document.getElementById('nom').value;
        let email = document.getElementById('email').value;
        let pwd1 = document.getElementById('pwd1').value;
        let pwd2 = document.getElementById('pwd2').value;
        let tel = document.getElementById('tel').value;

        let dato = "usuario="+nom+"&email="+email+"&pwd="+pwd2+"&tel="+tel+"&admin=0";

        if (nom == "") {
            alert("Ingresa un usuario");
        } else if(email == ""){
            alert("Ingresa un correo");
        }else if(pwd1 == ""){
            alert("Ingresa una contraseña");
        }else if(pwd2 == ""){
            alert("Repite la contraseña");
        }else if(tel == ""){
            alert("Ingresa un telefono");
        }else if(pwd1 != pwd2){
            alert("Asegurate que las contraseñas conincidan");
        }else{
            $.ajax({
                type: "POST",
                url: "php/newUsuario.php",
                data : dato,
                success:function(r){
                    if (r!=1) {
                        alert("Registro con exito");
                        document.getElementById('formReg').reset();
                    } else {
                        alert("Ocurrio un problema");
                    }
                }
            });
        }
    });
});

$(document).ready(function(){
    $(document.getElementById('btnStart')).click(function(){
        let email = document.getElementById('email').value;
        let pwd = document.getElementById('pwd').value;
        if(email == ""){
            alert("Ingresa un correo");
        }else if(pwd == ""){
            alert("Ingresa una contraseña");
        }
    });
});

$(document).ready(function(){
    $(document.getElementById('btnCreateCit')).click(function(){
        let serv = document.getElementById('serv').value;
        let fecha = document.getElementById('fecha').value;
        let hr = document.getElementById('hora').value;
        let dato = "serv="+serv+"$fecha="+fecha+"&hora="+hr;
        alert(dato);
    });
});
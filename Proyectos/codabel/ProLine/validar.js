function validar() {
var nombre, apellidos, email, usuario, telefono, contrasena, expresion;
    nombre = document.getElementById("nombre").value;
    apellidos = document.getElementById("apellidos").value;
    email = document.getElementById("email").value;
    usuario = document.getElementById("usuario").value;
    telefono = document.getElementById("telefono").value;
    contrasena = document.getElementById("contrasena").value;
    
expresion =/\w+@\w+\.+[a-z]/;
    
    if(nombre === "" || apellidos === "" || email === "" || usuario === ""|| telefono === ""|| contrasena === ""){
    alert("Porfavor rellene los campos vacios");
        return false;
    }
    
    else if(nombre.length>30 || apellidos.length>30 || usuario.legth>30){
    alert("el nombre, apellido y usuario solo deben tener 30 caracteres como maximo");
    return false;
    }
    
    else if(telefono.length>10){
    alert("El telefono es muy largo");
    return false;
    }
    
    else if(isNaN(telefono)){
    alert("El telefono ingresado no es un numero");
    return false;
    }
    
     else if(!expresion.test(email)){
    alert("El correo no es valido");
    return false;
    }
    
    
    
    
}
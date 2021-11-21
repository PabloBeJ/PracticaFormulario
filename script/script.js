
   // let x = document.forms["formUser"]["nombre"].value;
    let nombre = document.getElementById("checknombre");
    let apellido = document.getElementById("checkApellido");
    let correo = document.getElementById("checkCorreo");
    let telef = document.getElementById("checkTelef");
    let contra = document.getElementById("checkContra");
    let confContra = document.getElementById("checkConfirContra");
    window.onload =  function validateForm() {
    if (nombre.value  =="error") {
        document.getElementById("nombre").style.border="1px solid red"
        document.getElementById("errorNombre").innerText= "Inserta un nombre válido";
    }else  {document.getElementById("nombre").style.border="4px solid #1fc600"}

     if (apellido.value  =="error") {
        document.getElementById("apellido").style.border="1px solid red"
        document.getElementById("errorApellido").innerText= "Inserta un apellido válido";
    }else  {document.getElementById("apellido").style.border="4px solid #1fc600"}

     if (correo.value  =="error") {
        document.getElementById("correo").style.border="1px solid red"
        document.getElementById("errorCorreo").innerText= "Inserta un correo válido";
    }else  {document.getElementById("correo").style.border="4px solid #1fc600"}

     if (telef.value  =="error") {
        document.getElementById("telefono").style.border="1px solid red"
        document.getElementById("errorTelef").innerText= "Inserta un número válido";
    }else  {document.getElementById("telefono").style.border="4px solid #1fc600"}

     if (contra.value  =="error") {
        document.getElementById("contrasena").style.border="1px solid red"
        document.getElementById("errorContraPart1").innerText= "Error en la Contraseña. Debe tener entre 8 y 16  caracateres y al menos  ";
          document.getElementById("errorContraPart2").innerText= " un caracter  minuscula , una mayuscula, un numero y un caracter especial";
    }else  {document.getElementById("contrasena").style.border="4px solid #1fc600"}

    if (confContra.value  =="error") {
        document.getElementById("confContrasena").style.border="1px solid red"
        document.getElementById("errorConfContra").innerText= " Las contrasñas no son iguales"
    }else  {document.getElementById("confContrasena").style.border="4px solid #1fc600"}
    if(nombre.value!="error"&&apellido.value!="error"&&correo.value!="error"&&telef.value!="error"&&contra.value!="error"&&contra.value!="error"&&confContra.value!="error"){
        document.getElementById("next").style.visibility = "visible";
    }

    }
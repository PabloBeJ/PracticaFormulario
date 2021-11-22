//let provincia = document.getElementById("checkProvincia"); --> Imagen
var ciudad = document.getElementById("checkCiudad");
var cp = document.getElementById("checkCP");
var web = document.getElementById("checkWeb");
var cpCorrecto =  document.getElementById("checkCPCorrecto");
   // el.remove();
window.onload =  function validateForm() {
    if (ciudad.value == "error") {
        document.getElementById("ciudad").style.border = "1px solid red"
    } else { document.getElementById("ciudad").style.border = "4px solid #1fc600" }
    if (web.value == "error") {
        document.getElementById("web").style.border = "1px solid red"
    } else { document.getElementById("web").style.border = "4px solid #1fc600" }
    if (cp.value == "error") {
        document.getElementById("codigoPostal").style.border = "1px solid red"
    } else { document.getElementById("codigoPostal").style.border = "4px solid #1fc600" }
    if(cpCorrecto.value =="correcto"){
        document.getElementById("codigoPostal").style.border = "4px solid #1fc600";
    }else { document.getElementById("codigoPostal").style.border = "1px solid red"}
    if(ciudad.value=="verdadero" && web.value=="verdadero"){
        document.getElementById("next").style.visibility = "visible";
    }
}
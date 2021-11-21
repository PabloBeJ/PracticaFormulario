//let provincia = document.getElementById("checkProvincia"); --> Imagen
let ciudad = document.getElementById("checkCiudad");
let cp = document.getElementById("checkCP");
let web = document.getElementById("checkWeb");

window.onload =  function validateForm() {
    if (ciudad.value == "error") {
        document.getElementById("ciudad").style.border = "1px solid red"
    } else { document.getElementById("ciudad").style.border = "4px solid #1fc600" }

        if (cp.value == "error") {
        document.getElementById("codigoPostal").style.border = "1px solid red"
    } else { document.getElementById("codigoPostal").style.border = "4px solid #1fc600" }

        if (web.value == "error") {
        document.getElementById("web").style.border = "1px solid red"
    } else { document.getElementById("web").style.border = "4px solid #1fc600" }

    if(ciudad.value!="error" && ciudad.value!= "error" && ciudad.value != "error"){
        document.getElementById("next").style.visibility = "visible";
    }
}
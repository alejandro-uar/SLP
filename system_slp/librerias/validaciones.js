
//Formulario De Registro

const validar = function(){
    var nombre,descripcion,cantidad,entrada,salida,strock,cdstock,ven;
    nombre = document.getElementById("nombre").value;
    descripcion = document.getElementById("descripcion").value;
    cantidad = document.getElementById("cantidad").value;
    entrada = document.getElementById("entrada").value;
    salida = document.getElementById("salida").value;
    strock = document.getElementById("stock").value;
    cdstock = document.getElementById("cdStock").value;
    ven = document.getElementById("vencimiento").value;

    if(nombre===""||descripcion===""||cantidad===""||entrada===""||salida===""||strock===""||cdstock===""||ven===""){
        document.getElementById("info").className = "alert alert-danger";
        document.getElementById("info").innerHTML = "<i class='fas fa-exclamation-triangle'></i>    Completa los campos faltantes!";
        return false;
    }else if(!isNaN(nombre)){
        document.getElementById("info").className = "alert alert-danger";
        document.getElementById("info").innerHTML = "<i class='fas fa-exclamation-triangle'></i>    El Nombre no puede llevar numeros";
        return false;
    }

}

//Formulario de Elimino

const validarId = function(){
    var ide = document.getElementById("id").value;
    if(ide===""){
        document.getElementById("infoId").className = "alert alert-danger";
        document.getElementById("infoId").innerHTML = "<i class='fas fa-exclamation-triangle'></i>    Completa el ID!";
        return false;
    }
}
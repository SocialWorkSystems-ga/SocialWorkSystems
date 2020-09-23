function registrar(){

    document.getElementById("registrar").hidden=false;
    document.getElementById("ingresar").hidden=true;
    document.getElementById("h2reg").style="font-weight: bold; color: black;";
    document.getElementById("h2ing").style="font-weight: 100; color: #BCBCBC;";
    ;

}
function ingresar(){

    document.getElementById("ingresar").hidden=false;
    document.getElementById("registrar").hidden=true;
    document.getElementById("h2reg").style="font-weight: 100; color: #BCBCBC;";   
    document.getElementById("h2ing").style="font-weight: bold; color: black;";

}
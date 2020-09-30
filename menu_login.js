function registrar(){
    //Grande
    document.getElementById("registrar").hidden=false;
    document.getElementById("ingresar").hidden=true;
    document.getElementById("h2reg").style="font-weight: bold; color: black;";
    document.getElementById("h2ing").style="font-weight: 100; color: #BCBCBC;";
    document.getElementById("container").style="height: 500px; margin-bottom: 68px; top: 293px; width: 600px; margin-left: -300px";
    document.getElementById("diving").style="width: 300px";
    document.getElementById("divreg").style="width: 300px";

}
function ingresar(){
    //Pequeño
    document.getElementById("ingresar").hidden=false;
    document.getElementById("registrar").hidden=true;
    document.getElementById("h2reg").style="font-weight: 100; color: #BCBCBC;";   
    document.getElementById("h2ing").style="font-weight: bold; color: black;";
    document.getElementById("container").style="height: 450px; width: 350px; margin-left: -175px";
    document.getElementById("diving").style="width: 175px";
    document.getElementById("divreg").style="width: 175px";

}

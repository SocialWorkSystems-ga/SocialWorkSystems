<?php
ob_start();
session_start();

require("connDB.php");

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

$query="SELECT DOC_user, usuario, contraseña FROM usuario";
$res=mysqli_query($link, $query);




if ($res) {
    while ($row=mysqli_fetch_array($res)) {
        if ($row['usuario']==$usuario && password_verify($contraseña,$row['contraseña'])) {
            
            $aux=$row['DOC_user'];
            $_SESSION['ID_user']=$aux;
            require("connDB.php");
            date_default_timezone_set("America/Bogota");
            
            $query_acc="INSERT INTO accesos VALUES(".$row['DOC_user'].",'".date("Y") . "-" . date("m") . "-" . date("d")." ".date("h").":".date("i").":".date("s")."');";
            mysqli_query($link,$query_acc);
           header('location:menu.php');
           exit();   
        }
    }
    echo '<script>alert("Usuario y/o contraseña incorrectos, por favor verifique y vuelva a intentar");</script>';


}else{
    printf("Errormessage: %s\n", mysqli_error($link));
}
ob_end_flush();
?>
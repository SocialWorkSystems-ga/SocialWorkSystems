<?php ob_start();session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialWork Systems</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    
    
    
    
    
    ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    
   
    require("connDB.php");
    $ID = $_SESSION['ID_user'];
    $query="SELECT u.DOC_user, CONCAT(u.nom_user,' ',u.ape_user) as nombre, n.desc_nivel  FROM usuario u, nivel_usuario n WHERE DOC_user='$ID' and n.ID_nivel=u.ID_nivel";
    $res = mysqli_query($link,$query);

    while($row=mysqli_fetch_array($res)){
        echo "<h4>".$row['DOC_user']."   ".$row['nombre']."   ".$row['desc_nivel']."</h4><br>";
    }
    ob_end_flush();
    ?>
</body>
</html>

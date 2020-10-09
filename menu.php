<?php ob_start();session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialWork Systems</title>
    <link rel="stylesheet" href="style-menu.css">
</head>

<body>
<?php

    ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    
   
    require("connDB.php");
    $ID = $_SESSION['ID_user'];
    $query="SELECT u.DOC_user, CONCAT(u.nom_user,' ',u.ape_user) as nombre, n.desc_nivel, u.ruta_foto, u.nombre_foto, u.horas FROM usuario u, nivel_usuario n WHERE DOC_user='$ID' and n.ID_nivel=u.ID_nivel";
    $res = mysqli_query($link,$query);

    while($row=mysqli_fetch_array($res)){
        $foto=$row['ruta_foto'];
        $doc=$row['DOC_user'];
        $nombre=$row['nombre'];
        $lvl=$row['desc_nivel'];
        $horas=$row['horas'];
    }
    ob_end_flush();
    ?>
    
    <div class="navbar">        
            <img class="pf" src=<?php echo $foto?> align="right"> 
            <div id="titulo">
            <h1 style="position:relative; text-align: left; margin: 0; bottom: -10px; left: 5%;">SocialWork Systems</h1>
            </div>
            <h3 style="position:relative; text-align: right; margin: 0; bottom: -10px;"><?php echo $nombre?></h3>
            <h4 style="position:relative; text-align: right; margin: 0; bottom: -10px;"><?php echo $lvl?></h4>
            
    </div>
    <div class="sidebar">
        <a class="opt" href="#">Inicio</a>
        <a class="opt" href="#" onclick="d();return false;">Perfil</a>
        <a class="opt" href="#">Documentos</a>
        <a class="opt" style="margin-top: 160%;" href="#">Salir</a>
    </div>
    <div class="content" style="margin-left: 17%;">
        <div id="cont-horas">
            <div id="horasletra"><h4 style="margin-block-start: 15px;">Horas de servicio</h4></div>
            
            <div id="horasnum"><h1><strong><?php echo $horas; ?></strong></h1></div>
        </div>
        <div id="ultimoacceso">
        <?php 
        $sql="SELECT acceso from accesos where acceso<(SELECT acceso FROM accesos ORDER BY acceso desc LIMIT 1) ORDER BY acceso desc LIMIT 1";
        $reslt=mysqli_query($link,$sql);
        while ($row=mysqli_fetch_array($reslt)) {
            echo "<h4 style='text-align: left;'>Fecha y hora de último acceso: ".$row['acceso']."</h4>";
        }
        ?>
        </div>
    </div>
    <script src="javascript.js"></script>
</body>
</html>

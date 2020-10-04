<?php ob_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialWork Systems</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img id="imagen" src="fondo_login.jpg" style="width: 100%;">
        <div class="container" id="container">
            <div id="diving" >
                <h2 id="h2ing" style="font-weight: bold; color: black;" onclick="ingresar()">
                    Ingresar
                </h2>
            </div>
            <div id="divreg" >
                <h2 id="h2reg" style="font-weight: 100; color: #BCBCBC;" onclick="registrar()">
                    Registrarse
                </h2>
            </div>
            
            <div id="ingresar" >
                <div class="formulario">
                    <form method="post">
                        <img class="logo" src="https://image.shutterstock.com/image-vector/logo-simple-vector-modern-abstract-260nw-1574945281.jpg" >
                        <h4>SocialWork Systems</h4>
                        <input type="text" name="usuario" placeholder="Usuario" required>
                        <input type="password" name="contraseña" placeholder="Contraseña" required>
                        <input class="hvr-grow" type="submit" name="login" value="I N G R E S A R        >">
                    </form>
                </div>
            </div>
            
            <div id="registrar" hidden>
            <h1 style="text-align: center;">Formulario de registro</h1>
                <div class="formulario">
                
                    <form method="post" enctype="multipart/form-data">
                        
                    <div class="f1">
                        <span>Tipo de documento:</span>
                        <select name="tipo_doc" id="select" >
                            <option value="T.I.">Tarjeta de Identidad</option>
                            <option value="C.C.">Cédula de Ciudadanía</option>
                            <option value="C.E.">Cédula de Extranjería</option>
                            <option value="PAS">Pasaporte</option>
                        </select>
                        <br>
                        <br>
                        <input type="text" name="documento"  placeholder="Número de documento" required>
                        <input type="text" name="nombres"  placeholder="Nombres" required>
                        <input type="text" name="apellidos"  placeholder="Apellidos" required>
                        <span>Fecha de nacimiento   <input type="date" name="fenac" value="<?php echo date("Y-m-d");?>"></span>
                        <br>
                        <br>
                        <input type="text" name="ciudad_naci"  placeholder="Ciudad de nacimeinto">
                        </div>
                        <div class="f2">
                        <input type="email" name="email"  placeholder="Correo electrónico">
                        <br> 
                          
                        <span>Curso: <?php 
                        require("connDB.php");

                        $sql = "SELECT nom_curso,ID_curso FROM curso";
                        $result = mysqli_query($link,$sql);

                        echo '<select id="menu" name="ID_curso">';
                        while ($row = mysqli_fetch_array($result)) {
                            if(isset($row2['ID_curso']) && ($row['ID_curso']==$row2['ID_curso'])){
                                echo "<option value='" . $row['ID_curso'] ."' selected='selected'>" . $row['nom_curso'] ."</option>";
                            
                            }else{
                            echo "<option value='" . $row['ID_curso'] ."' >" . $row['nom_curso'] ."</option>";
                            }
                        }
                        echo "</select><br>";
                        mysqli_close($link);
                        ?>   </span>
                        <br>         
                        <span> Foto<input type="file" name="img" ></span>
                        <br>
                        
                        <br>
                        <input type="text" name="usuario" placeholder="Usuario">
                        <input type="password" name="contraseña" placeholder="Contraseña">
                        <input type="password" name="rcontraseña" placeholder="Repetir contraseña">
                        </div><div id="btnregistrar">
                        <input class="hvr-grow" type="submit" name="register" value="R E G I S T R A R        >" > 
                        </div> 
                    </form>
                    <?php
                    if(isset($_POST['login'])) {
                        require("login.php");
                    }if(isset($_POST['register'])){
                        require("reg_user.php");
                    }
                    ?>
                </div>
            </div>
        

        </div>
</body>
<script src="http://socialworksystems.ga/menu_login.js"></script>
</html>
<?php ob_end_flush();?>
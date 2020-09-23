<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialWork Systems</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img id="imagen" src="fondo_login.jpg">
        <div class="container">
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
            
            <div id="ingresar">
                <div class="formulario">
                    <form method="post">
                        <img class="logo" src="https://image.shutterstock.com/image-vector/logo-simple-vector-modern-abstract-260nw-1574945281.jpg" >
                        <h4>SocialWork Systems</h4>
                        <input type="text" name="email" placeholder="Usuario" required>
                        <input type="password" name="contraseña" placeholder="Contraseña" required>
                        <input class="hvr-grow" type="submit" value="I N G R E S A R        >">
                    </form>
                </div>
            </div>
            
            <div id="registrar" hidden>
                <div class="formulario">
                    <form method="post">

                    </form>
                </div>
            </div>
        

        </div>
</body>
<script src="menu_login.js"></script>
</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconecte" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2? familiaMontserrat:wght@100&display-swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Registro</title>
</head>

<!-- MENU -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <i class="fas fa-apple-alt"></i>
    </a>
    <p class="text-black bg-light">
        <?php session_start();
        //session_destroy();
        if (isset($_SESSION['login'])) {
            echo " Bienvenido " . $_SESSION['login'];
        } else {
            echo " Sin session";
        }
        ?>
    </p>
</nav>

<body>
    <main class="container-fluid">
        <div class="row caja-form">
            <section class="col-12 col-md-6 col-sm-12">
                <form id="form-post" name="envia-post_frm" action="grabaRegistro.php" method="post" enctype="application/x-www-form-urlencoded">
                    <h3>Registro</h3>
                    <input class="entrada form-control" type="text" name="nombre" id="input-post" placeholder="correo">
                    <input class="entrada form-control" type="password" name="clave" id="input-post" placeholder="contraseña">
                    <p><a href="#">Acepto las condiciones de uso.</a></p>
                    <input class="boton form-control" type="submit" name="enviar_btn" value="">
                    <p><a href="#">No tengo cuenta.</a></p>
                </form>
            </section>
        </div>
    </main>
    <script src="./js/main.js" type="module"></script>
</body>

</html>
    
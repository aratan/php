<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Logado</title>
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><i class="fas fa-apple-alt"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            <?php session_start();
                            /*if (SESSION_STATUS() == PHP_SESSION_DISABLED) {
                                echo "Desabilitada";
                            }
                            if (SESSION_STATUS() == PHP_SESSION_ACTIVE) {
                                echo "Activa ";
                            }
                            if (SESSION_STATUS() == PHP_SESSION_NONE) {
                                echo "No existen sesiones";
                            }
                            //unset($_SESSION['login']); // destruye solo esta sesion
                            //session_destroy(); // esto destruye todas la sessiones*/

                            if (isset($_SESSION['login'])) {
                                echo "Bienvenido " . $_SESSION['login'];
                            } else {
                                echo "Sin session";
                                header("Location: ./index.php");

                                exit();
                            }
                            ?>
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <!--cuerpo-->
        <section class="container">

		<input type="file" id="upload" />
		    <p id="link"></p>
		<!-- markup created after upload -->

            <div class="row caja-edit">
                <div class="col-12 col-md-4 col-sm-12">
                    <form action="usergraba.php" method="post">
                        <input type="text" name="titulo" placeholder="titulo">
                        <textarea name="resumen" rows="5" cols="40" placeholder="resumen"></textarea>
                        <input type="text" name="foto" placeholder="url de imagen">
                        <input type="text" name="video" placeholder="https://url de video">
                        <input type="text" name="tag" placeholder="tag">
                        <input class="btn btn-primary" name="xy" type="submit" value="envia" />
                    </form>
                </div>
            </div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/ipfs-http-client@30.1.3/dist/index.js"></script>
    <script src="https://bundle.run/buffer@5.2.1"></script>
    <script>
	// Configuración de conexión
const ipfs = window.IpfsHttpClient('ipfs.infura.io', '5001', {
    protocol: 'https'
});


$("#upload").on("change", function () {
    var fichero = new FileReader();

    fichero.onload = function (e) {

        const datos = buffer.Buffer(fichero.result);
        ipfs.add(datos, (err, result) => {
            console.log(err, result);

            let ipfsLink = "<a href='https://ipfs.io/ipfs/" + result[0].hash + "'>https://ipfs.io/ipfs/" + result[0].hash + "</a>";
            document.getElementById("link").innerHTML = ipfsLink;

        })
    }
    fichero.readAsArrayBuffer(this.files[0]);
});

    </script>

        </section>
        <!--***-->
    </main>
    <script src="./js/main.js" type="module"></script>
</body>

</html>
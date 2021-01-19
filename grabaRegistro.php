<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <main>
  <?php 
session_start();
include "ddbb.php";

if (isset($_SESSION['login'])) {
    echo "Bienvenido " . $_SESSION['login'].'<br>';
} else {
    echo "Sin session";
}
/* base de datos */

$usuario  = $_POST['nombre'];
$clave = $_POST['clave'];
$cifrado = md5($clave);
//$token = md5($usuario . $clave);
//echo $token;
$estado = 1;

$sql = "INSERT INTO usuarios (usuario,clave,estado) VALUES ('$usuario','$cifrado','$estado')";
if ($mysqli->query($sql) === TRUE) {
  echo "<p>Ya está registrado como usuario.</p>";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
$mysqli->close();

/*  
echo  $_POST['post'] ;
echo  $_POST ['xy']   ; 
*/
?>
<div class="bg-dark"> hola </div>
  </main>
  <script src="./js/main.js" type="module"></script>
</body>
</html>
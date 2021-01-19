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

$titulo  = $_POST['titulo'];
$resumen = $_POST['resumen'];
$foto    = $_POST['foto'];
$video   = $_POST['video'];
$tag   = $_POST['tag'];
$sql = "INSERT INTO post (nombre,resumen, foto, url,tag) VALUES ('$titulo','$resumen','$foto','$video','$tag')";

if ($mysqli->query($sql) === TRUE) {
  echo "<p>New record created successfully</p>";
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
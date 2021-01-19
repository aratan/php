<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <!-- As a link -->
<!-- Image and text -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="index.php" _msthash="1454479" _msttexthash="75387">Disident</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" _msthidden="A" _msthiddenattr="1375426" _mstaria-label="320099">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">

<ul class="navbar-nav mr-auto">
  
      <li class="nav-item">
        <a class="nav-link" href="index.html" _msthash="574366" _msttexthash="136006">Buscador</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="form.php" _msthash="574743" _msttexthash="95589">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registro.php" _msthash="575120" _msttexthash="110331">Registro</a>
      </li>

    </ul>

  </div>
</nav>

  <?php
include "ddbb.php";
/* devuelve el nombre de la base de datos actualmente seleccionada */
if ($res = $mysqli->query("SELECT * FROM post")) {
	while($row = $res->fetch_array()){
    $nombre = $row['nombre'];
    $resumen = $row['resumen'];
    $foto = $row['foto'];
    $url = $row['url'];
    $tag = $row['tag'];

    echo "
  
    <div id='colocar' class='card container ' style='width: 18rem;'>
      <img class='card-img-top' src='". $foto ."' alt='Card image cap'>
      <div class='card-body '>
        <h5 class='card-title'>" . $nombre  ." </h5>
        <p class='card-text'>". $resumen. "</p>
        <a href='" . $url . "' target='_blank' class='btn btn-primary'>Go somewhere</a>
      </div>
      <p>" . $tag . "</p>
    </div>";
  }
/*
$sql = "INSERT INTO user (username)
VALUES ('John')";

if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
*/
$mysqli->close();
}
?> 


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <sscript src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></sscript>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="./js/main.js" type="module"></script>
</body>
</html>



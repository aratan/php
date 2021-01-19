<?php
session_start();
include("ddbb.php");
$_SESSION['contadorLogin'] = 0;

// si esta creada get esta, enviar_btn
    if(isset($_GET["enviar_btn"])){
        echo 'Lo enviaste por GET '.$_GET["enviar_btn"]." ".$_GET["nombre_txt"]." ".$_GET["password_txt"];
    }else if(isset($_POST["enviar_btn"])){
       // echo 'Lo enviaste por POST '.$_POST["enviar_btn"]." ".$_POST["nombre_txt"]." ".$_POST["password_txt"];
    }


/* devuelve el nombre de la base de datos actualmente seleccionada */
if ($res = $mysqli->query("SELECT * FROM usuarios")) {
	while($row = $res->fetch_array()){
    $nombre = $row['usuario'];
    $password = $row['clave'];
 
    
    $descifrado = md5($_POST["password_txt"]);

        if ($nombre == $_POST["nombre_txt"] && $password == $descifrado && $_SESSION['contadorLogin']<3){  
            $_SESSION['login']='Publisher';
            printf("Validado!!!, session creada  %s.\n", $nombre);   
            header('Location: ./user.php'); 
        } else{
         //printf("¡¡¡ Usuario incorrecto !!!\n");   
    
         //$_SESSION['contadorLogin'] += 1;   
         //if ($_SESSION['contadorLogin']>3) {
            //$res = $mysqli->("UPDATE usuarios SET estado='$_SESSION['contadorLogin']' WHERE usuario='$usuario'");
            //$res= $conn->query($res);
            $mensaje2 = "Lo sentimos, su usuario ha sido desactivado";
            echo "<script type='text/javascript'>alert('$mensaje2');</script>";
            header( "refresh:0.2;url=index.php" );
        //}
         
        

        //break;
            //continue;
        }
   // printf("Resultado:  %s.\n", $nombre);
    /*$result->close();*/
}

$mysqli->close();
}

?>
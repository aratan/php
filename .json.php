<?php /* http://127.0.0.1/ru/back/api/usuarios.php */
header("Content-Type: application/json");
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Authorization');
/* echo $_SERVER['REQUEST_METHOD'] ; */


switch($_SERVER['REQUEST_METHOD']){

    case "GET":
        if(isset($_GET['id'])){
            $resultado['mensaje'] = 'lee usuario' . $_GET['id'];
            echo json_encode($resultado);
            include 'busca.php';
        }else{
            $resultado['mensaje'] = 'lee usuario' ;
            //echo json_encode($resultado);
            include 'busca.php';
        }   
        break;

    case "POST":
        $_POST = json_decode(file_get_contents('php://input'),true);
        $usuario = new Usuario($_POST['nombre'],$_POST['apellido'],$_POST['nacimiento']);
        $resultado['mensaje'] = 'Guardar usuario, info:' . json_encode($_POST);
        echo json_encode($resultado);
        break;

    case "PUT":
        $_PUT = json_decode(file_get_contents('php://input'),true);
        $resultado['mensaje'] = 'Actualizar usuario id:' . 
        $_GET['id'] . " , Info a actualizar: " . json_encode('$_PUT');

        echo json_encode($resultado);
        break;

    case "DELETE":
        $_DELETE = json_decode(file_get_contents('php://input'),true);
        $resultado['mensaje'] = 'Eliminar usuario id:' . $_GET['id'];
        echo json_encode($resultado);
        break;
}
?>
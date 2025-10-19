<?php
session_start();
$ruta_datos = '../usuarios.json';
$json_string = file_get_contents($ruta_datos);
$datos = json_decode($json_string, true);

//recepción de datos enviados mediante POST desde ajax
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';
error_log($ruta_datos);
error_log("usuario");
error_log($datos['usuario']);
error_log("password");
error_log($datos['pass']);

if($usuario === $datos['usuario'] and $password === $datos['pass']){
    $_SESSION["s_usuario"] = $usuario;
    $data = "1";

}else{
    $_SESSION["s_usuario"] = 'falso';
    $data= "0";
}

print json_encode($data);
?>
    





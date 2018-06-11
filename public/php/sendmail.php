<?php
$nombre     = $_POST['nombre'];
$apellido   = $_POST['apellido'];
$telefono   = $_POST['telefono'];
$email      = $_POST['email'];
$mensaje    = $_POST['mensaje'];
echo "el mail esta apunto de ser enviado";
$mail = mail("jesusmilano96@gmail.com","My subject",$mensaje);
if($mail == true){
    echo "Mensaje enviado correctamente";
}else{
    echo "ocurrio un error";
}
?>
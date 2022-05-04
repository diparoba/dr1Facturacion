<?php
/*$enlace = mysqli_connect("127.0.0.1", "root", "", "dr1facturacion");
$link = new mysqli("127.0.0.1", "root", "", "dr1facturacion");
<PDO></PDO>*/

function Conectar(){
    $link = new mysqli("localhost", "root", "", "dr1facturacion") or die("Error al conectar a la BD");
    $link->set_charset("utf8");
    return $link;
}
$mysqli = Conectar();
?>
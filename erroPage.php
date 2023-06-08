<?php

/* Nombre del servidor. */
$serverName = "DESKTOP-ISUTESL\SQLEXPRESS";
/* Usuario y clave.  */
$uid = "";
$pwd = "";
/* Array asociativo con la información de la conexion */
$connectionInfo = array( "UID"=>$uid, "PWD"=>$pwd, "Database"=>"Qrstore");
 
/* Nos conectamos mediante la autenticación de SQL Server . */
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false )
{
echo "No es posible conectarse al servidor.</br>";
die( print_r( sqlsrv_errors(), true));
}else{
    echo "CONECTADO.</br>";

}
?>




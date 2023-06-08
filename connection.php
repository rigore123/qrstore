<?php
       $source= file_get_contents('settings.json'); 
       echo $source;
       $output = json_decode($source,true);
       
       echo $output["configuration"]["server"];
/* 
if($decode=='mysql')
{
    $conn = mysqli_connect("localhost:3307","root","rigo100","qrstore");
    if ($conn == false){
        die("ERROR: coneccion no pudo ser establecida." . mysqli_connect_error());
    }else{
        echo "CONECTADO MYSQL.</br>";
    }
}

if($decode=='sql'){
    $serverName = "DESKTOP-ISUTESL\SQLEXPRESS";
    $uid = "";
    $pwd = "";

    $connectionInfo = array( "UID"=>$uid, "PWD"=>$pwd, "Database"=>"Qrstore");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    if( $conn === false )
    {
        echo "No es posible conectarse al servidor.</br>";
        die( print_r( sqlsrv_errors(), true));
    }else{
        echo "CONECTADO SQL.</br>";

    }
}
 */

?>
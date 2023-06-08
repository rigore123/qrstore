<?php

include('connection.php');
//(session_start();

$var = $_POST['funcion'];
$username = $_POST['username1'];
$usremail = $_POST['usremail1'];
$usrpass2 = $_POST['usrpass2'];

echo $_POST['funcion']. " " .$_POST['username1']. " " .$_POST['usremail1']. " " .$_POST['usrpass2'] 

if($_POST['funcion']=='valusr'){
   //[VALIDA SI EL USUARIO FUE BIEN INGRESADO]
    if(ExisteUsuario=='NO')
    {
        echo "USUARIO NOK";
        break;
    }else{
        if(PassValido()=="NO")
        {
            echo "PASS INVALID!";
            break;
        }else{
            echo "PASS OK";
        }    
    
    }




}

function PassValido($username,$usremail,$usrpass2){

    $usuario = mysqli_query($conn, "SELECT userPassword 
                                        FROM usuarios 
                                        WHERE nombreUsuario = '" .$_POST['username']. "'
                                        AND userPassword= '" .$_POST['usrpassword']. "'");
    $pass= mysqli_fetch_assoc($usuario);

    if (password_verify($usrpass2, $pass)){
        return "SI";
    }else{
        return "NO"
    }
    };


function ExisteUsuario(){
    $registros=mysqli_query($conn, "SELECT count(1) FROM tbl_usuarios WHERE nombreUsuario = '" .$_POST['username']. "'");
    if (mysqli_fetch_assoc($registros) >0){
        return "NO";
    }else{
        return "SI"
    }
    };
}

?>



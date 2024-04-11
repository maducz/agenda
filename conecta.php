<?php
    $servidor="localhost";
    $usuario="escola";
    $senha="123";
    $nomedodb="escola";

    $conn=new mysqli($servidor,$usuario,$senha,$nomedodb);

    if($conn->connect_error){
        die("conexão falhou".$conn->connect_error);
    }
    echo"Cnectado ao Banco de Dados";
    ?>
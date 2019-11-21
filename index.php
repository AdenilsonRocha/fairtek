<?php
include "serviceDAO/Conect.php";

$conn = getConexao();

if($conn = login("ADENILSON", "123")){
    echo "Você esta conectado";

}else{
    echo "Ouve um erro tente novamente";
}

echo "teste";
?>
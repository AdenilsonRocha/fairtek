<?php
define("PORT", "3306");
define("DB", "fairtek");
define("END", "127.0.0.1");
define("USER", "fairtek");
define("PASS", "fairtek2018");
function getConexao() {
    try{    
        $conn = new PDO('mysql:host=' . END . ';port=' . PORT . ';dbname=' . DB . ';charset=utf8', USER, PASS);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
    
    return $conn;
}
function login($login, $senha) {
    $login = mysql_escape_string($login);
    $senha = mysql_escape_string($senha);
    try {
        $sql = "SELECT usuario FROM fairtek.tb_usuarios WHERE nome='$login' AND senha='md5($senha)' LIMIT 1";
        $conn = getConexao();
        $result = $conn->query($sql);
        $row = $result->fetch(PDO::FETCH_OBJ);
         //faça um print_r no $row para fazer o retorno...
        return $result;
    } catch (PDOException $e) {
        return false;
    }
}
  
?>

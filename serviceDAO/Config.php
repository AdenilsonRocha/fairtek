<?php
class config{
    var $user;
    var $passwoed;
    var $link;
    var $db;
    
    function getDb(){
        return $this->db;
    }
    function setDb($db){
        $this->db;
    }
    function getLink(){
        return $this->link;
    }
    function setLink($link){
        $this->link = $link;
    }
    function getUser() {
        return $this->user;
    }
    function setUser($user) {
        $this->user= $user;
    }
    function setPassword($pass){
        $this->password = $pass;
    }
    function getPassword(){
        return $this->password;
    }
}
?>
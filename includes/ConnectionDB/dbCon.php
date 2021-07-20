<?php 
    //Connection database  using PDO
try{

    $con = new PDO('mysql:host=localhost;dbname=creatixstudiodb;charset=utf8','root','');


}catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}

?>
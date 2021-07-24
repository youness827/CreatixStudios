<?php 
    //Connection database  using PDO
try{

 $con = new PDO('mysql:host=localhost;dbname=creatixstudiodb;charset=utf8','root','');
  // $con = new PDO('mysql:host=epiz_29192350;dbname=epiz_29192350_db_creatix_center;charset=utf8','epiz_29192350','m6twtyqtTtQZu');


}catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}

?>
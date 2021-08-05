<?php 
    if(isset($_GET["lang"])){
        $lang=$_GET["lang"];
      
    }else{
        $lang="fr";
    }

    switch($lang){
        case "fr":
            $lang_file="lang.fr.php";
            break;
        case "an":
            $lang_file="lang.an.php";
            break;
        default:
            $lang_file="lang.fr.php";

    }

include_once 'includes/languages/'.$lang_file;

?>
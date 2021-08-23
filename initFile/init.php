<?php

    //connectionDB
    include("includes/ConnectionDB/dbCon.php");


    //Routing
    $templates='includes/templates/';
    $function='includes/functions/';
    $css='layouts/css/';
    $bootstrap='layouts/bootstrap/';
    $images='layouts/images/';
    $js='layouts/js/';
    $fonts = 'layouts/fonts/';
    $libraries = 'libraries/';
    $video='layouts/videos/';

    //include header
    include($function."functions.php");
    include($templates."header.php");


    //No NavBar
    if(!isset($nonavbar)){ 

    include "includes/languages/comman.php";





        include($templates."navbar.php");
    }
 

    if(isset($navbaradmin)){ 

        include "includes/languages/comman.php";
    
    
    
    
    
            include($templates."navbaradmin.php");
        }
     


?>
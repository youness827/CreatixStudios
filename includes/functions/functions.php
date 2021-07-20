<?php 

/* Dynamic title */
function getTitlePage(){
    global $titlePage;
    if(isset($titlePage) && !empty($titlePage)){
        echo $titlePage;
        
    }else{
        $titlePage="Default Page";
        echo $titlePage;
    }
}




?>
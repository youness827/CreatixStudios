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



/*Service function */
function service($con,$var){
    $stmt = $con->prepare("select *from service where ID_SERVICE = ?");
    $stmt->execute(array($var));
    $rows = $stmt->fetch();
    return $rows;
}



?>
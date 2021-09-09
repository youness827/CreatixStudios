<?php
session_start();
$titlePage = "Creatix Studio";
$nonavbar="nn";
$navbaradmin="yes";
include("initFile/init.php");

    if(isset($_SESSION["admin"])){



?>





<?php 
               
               if(isset($_GET["compteadmin"]) && $_GET["compteadmin"]=="true"){
                    include "compteadmin.php";
                } if(isset($_GET["listeadmin"]) && $_GET["listeadmin"]=="true"){
                    include "compteadmin.php";
                }if(isset($_GET["editadmin"]) && $_GET["editadmin"]=="true" && isset($_GET["idclient"])){
                    include "compteadmin.php";
                }if(isset($_GET["deleteadmin"]) && $_GET["deleteadmin"]=="true" && isset($_GET["idclient"])){
                    include "compteadmin.php";
                   
                }

                 if(isset($_GET["listeclient"]) && $_GET["listeclient"]=="true"){
                    include "affichclient.php";
                }     
                 if(isset($_GET["listecommnadeclient"]) && $_GET["listecommnadeclient"]=="true"){
                    include "listecommnadeclient.php";
                }
                if(isset($_GET["listecommnadeclientFormation"]) && $_GET["listecommnadeclientFormation"]=="true"){
                    include "listecommnadeclientFormation.php";
                }
                if(isset($_GET["messagecl"]) && $_GET["messagecl"]=="true"){
                    include "messagesclient.php";
                }

                if(isset($_GET["servicegestion"])&& $_GET["servicegestion"]=="true"){
                    include "gestion_service.php";
                } if(isset($_GET["listeService"]) && $_GET["listeService"]=="true"){
                    include "gestion_service.php";
                }if(isset($_GET["editservice"]) && $_GET["editservice"]=="true" && isset($_GET["idservice"])){
                    include "gestion_service.php";
                } 


                if(isset($_GET["serviceformation"])&& $_GET["serviceformation"]=="true"){
                    include "gestion_formation.php";
                } if(isset($_GET["listeformation"]) && $_GET["listeformation"]=="true"){
                    include "gestion_formation.php";
                }if(isset($_GET["editformation"]) && $_GET["editformation"]=="true" && isset($_GET["idformation"])){
                    include "gestion_formation.php";
                }
?>








<?php
  }else{?>
    <script>
    window.location.href="index.php?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>";
     </script>
 <?php }
include("includes/templates/footer.php");

?>
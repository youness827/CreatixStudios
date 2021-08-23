<?php
session_start();
$titlePage = "Se Connecter";
include("initFile/init.php");

$msg="";


           
if(isset($_SESSION["admin"]) || isset($_SESSION["USER"]) ){ 
    header("location:index.php");
    exit();
}else{


  if(isset($_SESSION["checktrue"]) && $_SESSION["checktrue"]=="true" ){

   


   if(isset($_POST["demander"])){
                            $pass = htmlspecialchars(trim($_POST["pass"])); 
                            
                            $passwordreset=sha1($pass);
                            $stmt=$con->prepare("update compte set MOTE_DE_PASS = ? where email = ?");
                            $stmt->execute(array($passwordreset,$_SESSION["email"]));
                            $row=$stmt->rowCount();
                            if($row>0){
                                    ?> 
                 
                                    <script>
                                    window.location.href="login.php?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>";
                                     </script>


                                    <?php

                            }else{
                            
                            
                                if(isset($_GET["lang"])){
                                                
                                            
                                    $lgs = $_GET["lang"];
                                    if($lgs=="an"){
                
                                        
                                        $msg = "failed to reset password";
                                    }else {
                
                                        $msg = "échec de la réinitialisation du mot de passe";
                
                                    }
                
                                    }
                            }
   }


     
       

      








?>
<br> <br><br><br> 

<div class="container">
    <div class="row">
        <div class="col">


            <div class="loginForm shadow-lg p-3 mb-5 bg-body rounded ">
                <div class="card mb-3" style="width:100%">
                    <div class="row g-0">
                        <div class="col-md-7">
                            <img class="img-fluid rounded-start" src="<?php echo $images ?>passwords.png">

                        </div>
                        <div class="col-md-5">
                            <div class="card-body">
                                <div class="contenu">
                             
 
                           <form action="#" method="post"  autocomplete="off">
                                    <br><br> <br><br><br><br> <br><br>
                                    <h2 class="text-center ">rénitialiser mote de pass
                                    </h2>
                                    <?php if(isset($msg)){
                                            ?>
                                            <p class="text-center text-danger"><?= $msg?></p>
                                        <?php
                                    }?>
                                    <br>
                                    
                                    <div class="inputwithicon"> 
                                        <input type="password" id="password" class="form-control" required id="inputPassword" name="pass" placeholder="<?= $lang["motedepass"]?>">
                                        
                                        <i id="eye" class="fas fa-eye"></i>
                                        </div>
                                        <br> 
                    
                                      

                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <input  class="btn btn-outline-primary " type="submit" name="demander" value="<?=$lang['demander']?>"/>

                                    </div>
                                     
                                </form>
                                <br>
            
                            
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>











        </div>
    </div>
</div>


<br> <br><br>
<br> <br><br>


<?php
}else{?>
    <script>
    window.location.href="index.php?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>";
     </script>
     <?php
}

}
include("includes/templates/footer.php");

?>
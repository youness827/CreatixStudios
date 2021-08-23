<?php
session_start();
$titlePage = "Se Connecter";
include("initFile/init.php");

$msg="";
$testing = false;

$mg="";
if(isset($_SESSION["admin"]) || isset($_SESSION["USER"]) ){ 
    header("location:index.php");
    exit();
}else{
    if($_SERVER["REQUEST_METHOD"]=="POST"){


    /*login */

    if(isset($_POST["submit"])){
      
        $testing = false;
      
            $email = htmlspecialchars(trim($_POST["email"])); 
           


            $stmt = $con->prepare("SELECT *from compte where EMAIL = ? LIMIT 1");
            $stmt->execute(array($email));
            $row=$stmt->fetch();
            $row = $stmt->rowCount();

            if($row > 0){        //exist email in database

                    $emaildirection=$email;
                    $codeVerification=rand(10112,99999); 
                    $_SESSION["email"]=$email;
                    $_SESSION["codeverif"]=$codeVerification;
                    include 'phpmaile.php';// sending email
                
                    $testing=true;


                      



            }else{  //exist does not exist email 
                
                    if(isset($_GET["lang"])){
                                                
                                            
                        $lgs = $_GET["lang"];
                        if($lgs=="an"){
    
                            
                            $msg = "Email does not exist";
                        }else {
    
                            $msg = "L'email n'existe pas";
    
                        }
    
                        }
            }
                    

        }
        
        if(isset($_POST["envoyer"])){
           

        
                if(!empty($_POST["codeverification"])){
                    $codeverif = htmlspecialchars(trim($_POST["codeverification"]));
                    if($codeverif==$_SESSION["codeverif"]){
                      
                        $_SESSION["checktrue"]="true";
                        
                        ?>
                          <script>
                                    window.location.href="renitialisation.php?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>";
                                     </script>
                        <?php
                    }else{

                        if(isset($_GET["lang"])){
                                                
                                            
                            $lgs = $_GET["lang"];
                            if($lgs=="an"){
        
                                
                                $mg = "the verification code is inccorect please try again";
                            }else {
        
                                $mg = "le code de vérification est inccorect s'il vous plaît essayez de nouveau";
        
                            }
        
                            }

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
                            <img class="img-fluid rounded-start" src="<?php echo $images ?>reni.png">

                        </div>
                        <div class="col-md-5">
                            <div class="card-body">
                                <div class="contenu">
                                <?php
                   if($testing==false){ 
                            ?>

                                <form action="#" method="post"  autocomplete="off">
                                    <br><br> <br><br><br><br> <br><br>
                                    <h2 class="text-center ">Retrouvez votre compte
                                    </h2> 
                                    <h6 class="text-danger text-center"><?= $mg;?> 
                                    <br> <br>
                                    <h6 class="text-danger text-center"><?= $msg;?> 
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input type="email" class="form-control" required id="exampleFormControlInput1" name="email" placeholder="name@example.com">
                                        <i class="fas fa-search"></i> 
                                        </div>
                                    </div>
                              
                                    
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <input  class="btn btn-outline-primary " type="submit" name="submit" value="Rechercher"/>

                                    </div>
                                     
                                </form>
                                <br>
                                <p class="text-muted text-center">

                                Vous n’avez pas de compte? <a href="sign_up.php?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>">S'inscrire</a> 

                                </p>
                        <?php
                  }else if( isset($testing) &&  $testing==true ){ 
                            ?>
 
                            <form action="#" method="post"  autocomplete="off">
                                    <br><br> <br><br><br><br> <br><br>
                                    <h2 class="text-center ">Verification code 
                                    </h2> <br> 
                                    <p class="text-primary text-left">nous avons envoyé votre code de vérification, veuillez vérifier votre boîte de réception.</p>
                                    
                                    
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input type="text" class="form-control" required  name="codeverification" placeholder="Verification Code">
                                        <i class="fas fa-check-circle"></i>
                                        </div>
                                        <br> 
                    
                                      
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <input  class="btn btn-outline-primary " type="submit" name="envoyer" value="<?=$lang['demander']?>"/>

                                    </div>
                                     
                                </form>
                                <br>
   
                <?php    }
                        ?>
                          
                            
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
}
include("includes/templates/footer.php");

?>
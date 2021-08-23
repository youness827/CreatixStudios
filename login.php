<?php
session_start();
$titlePage = "Se Connecter";
include("initFile/init.php");

$msg="";


if(isset($_SESSION["admin"]) || isset($_SESSION["USER"]) ){ 
    header("location:index.php");
    exit();
}else{ 
    if(isset($_POST["submit"])){

    if($_SERVER["REQUEST_METHOD"]=="POST"){

    /*login */

            $email = htmlspecialchars(trim($_POST["email"])); 
            $pass = htmlspecialchars(trim($_POST["pass"]));
            $password = sha1($pass);
            
             if(!(empty($email) && empty($apss))) {

                    
                    $stmt = $con->prepare("SELECT 
                                         *FROM compte 
                                        where   email = ? 
                                        AND mote_de_pass = ?
                                           ");
                    $stmt->execute(array($email,$password));
                    $rows= $stmt->fetch();
                    $count=$stmt->rowCount();
                    if($count>0){

                            if($rows['STATUT']==0){
                                            //Admin
                                    $stmt=$con->prepare("SELECT *FROM client 
                                                        where ID_CLIENT = ?");
                                    $stmt->execute(array($rows['ID_CLIENT']));
                                    $rowcl = $stmt->fetch();
                                    $count =$stmt->rowCount();
                                    if($count>0){


                                    //Creation session admin  
                                    $_SESSION["admin"]=$rowcl["NOM"].' '.$rowcl["PRENOM"];
                                     $_SESSION["idadmins"]=$rowcl["ID_CLIENT"];

                                    //go to dashbord admin
                                    ?>

                                                    
                                    <script>
                                    window.location.href="index.php?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>";
                                     </script>
                               
                                    
                                    <?php
                                   

                                    }


                            }else if($rows['STATUT']==1){
                                //USER
                    
                                $stmt=$con->prepare("SELECT *FROM client 
                                where ID_CLIENT = ?");
                                    $stmt->execute(array($rows['ID_CLIENT']));
                                    $rowcl = $stmt->fetch();
                                    $count =$stmt->rowCount();
                                    if($count>0){


                                    //Creation session USER  
                                    $_SESSION["USER"]=$rowcl["NOM"].' '.$rowcl["PRENOM"];
                                     $_SESSION["iduser"]=$rowcl["ID_CLIENT"];

                                    //go to USER
                                    ?>

                                                    
                                    <script>
                                    window.location.href="index.php?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>";
                                     </script>
                               
                               <?php
                                   
                                    }
                
                                    
                                
                          
                          
                                }




                    }else{ 
                        if(isset($_GET["lang"])){
                                                    
                                                
                            $lgs = $_GET["lang"];
                            if($lgs=="an"){
        
                                
                                $msg = "incorrect email or password !!";
                            }else {
        
                                $msg = "email ou mot de passe incorrect !!";
        
                            }
        
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
                            <img class="img-fluid rounded-start" src="<?php echo $images ?>login.png">

                        </div>
                        <div class="col-md-5">
                            <div class="card-body">
                                <div class="contenu">

                            
                                <form action="#" method="post"  autocomplete="off">
                                    <br><br> <br><br><br><br> 
                                    <h2 class="text-center "><?= $lang["sdentifier"]?></h2>
                                    <br> <br>
                                    <?php if(isset($msg) && !empty($msg)){
                                        ?>
                                        <h6 class="text-danger text-center"><?= $msg;?> 
 <a href="reni.php?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>"> <?= $lang["motedepasseoublié"] ?></a> </h6> 
                                        <p class="text-muted text-center">


</p>
                                        <?php }?>
                                
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input type="email" class="form-control" required id="exampleFormControlInput1" name="email" placeholder="name@example.com">
                                        <i class="fas fa-user"></i> 
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input type="password" id="password" class="form-control" required id="inputPassword" name="pass" placeholder="<?= $lang["motedepass"]?>">
                                        
                                        <i id="eye" class="fas fa-eye"></i>
                                        </div>
                                    </div>
                                    
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <input  class="btn btn-outline-primary " type="submit" name="submit" value="<?= $lang["sdentifier"]?>"/>

                                    </div>
                                     
                                </form>
                                <br>
                                <p class="text-muted text-center">

                                <?=$lang["Vousnavezpasdecompte"]?> <a href="sign_up.php?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>"><?= $lang["Sinscrire"]?></a> 

                                </p> 
                                <p class="text-muted text-center">
 <a href="reni.php?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>"> <?= $lang["motedepasseoublié"] ?></a>
                                    </p>
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

include("includes/templates/footer.php");

?>
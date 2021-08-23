<?php

$titlePage = "Se Connecter";
include("initFile/init.php");
$msgs="";
if($_SERVER["REQUEST_METHOD"]=="POST"){

    /*login */

    if(isset($_POST["submit"])){

        $nom = htmlspecialchars(trim($_POST["nom"])); 
        $prénom = htmlspecialchars(trim($_POST["prénom"]));
        $adresse = htmlspecialchars(trim($_POST["adresse"])); 
        $tel = htmlspecialchars(trim($_POST["tel"])); 
        $email = htmlspecialchars(trim($_POST["email"])); 
        $pass = htmlspecialchars(trim($_POST["pass"]));
        $statut = 1;//USER 
            
             if(!(empty($email) && empty($apss) && empty($nom) && empty($prénom) && empty($adresse) && empty($tel) && $statut!=0)) {


                $stmt = $con->prepare('SELECT *from compte where EMAIL = ? LIMIT 1');
                $stmt->execute(array($email));
                $rows_c=$stmt->fetch();    
                $rows_c = $stmt->rowCount();
if($rows_c >0){
    if(isset($_GET["lang"])){
                                                    
                                                
        $lgs = $_GET["lang"];
        if($lgs=="an"){

            
            $msgs ="this account already exists";

         
        }else {

            $msgs = "ce compte déja existe";

            

        }

        }

}else{



                        $stmt = $con->prepare('INSERT INTO client
                                              (NOM,PRENOM,ADRESS,TEL) 
                                              values (?,?,?,?)   ');
                        $stmt->execute(array($nom,$prénom,$adresse,$tel));
                      
                        $row_cl = $stmt->rowCount();
                  
                        if($row_cl>0){
                         
                          $stmt = $con->prepare("SELECT * FROM client 
                                                    ORDER BY ID_CLIENT 
                                                    DESC LIMIT 1");
                            $stmt->execute(array());
                           $row_cll = $stmt->fetch();
                           $row_count= $stmt->rowCount();
                                   
                           if($row_count>0){




                                            $stmt = $con->prepare('INSERT INTO compte
                                            (ID_CLIENT,EMAIL,MOTE_DE_PASS,STATUT) 
                                            values (?,?,?,?)   ');
                                            $stmt->execute(array($row_cll['ID_CLIENT'],$email,sha1($pass),$statut));
                                            $row_cmpt = $stmt->rowCount();
                                            if($row_cmpt>0){

                                                    ?>


                                                <script>
                                                window.location.href="login.php?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>";
                                                 </script>
                                           
                                           <?php
                                               
                                              


                                            }else{

                                              ?>

                                                    
                                                <script>
                                                window.location.href="sign_up.php?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>";
                                                 </script>
                                           
                                           <?php
                                                

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
                                <form action="#" method="post" autocomplete="off" >
                                    <br><br> <br>
                                    <h2 class="text-center "><?= $lang["Sinscrire"] ?></h2>
                                    <br>
                                    <h5 class="text-danger text-center"><?php if(isset($msgs)) echo $msgs;?></h5>
                                    
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input autocomplete="off" type="text" class="form-control" required  name="nom" placeholder="<?= $lang["nom"]?>">
                                        <i class="fas fa-user-edit"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input autocomplete="off" type="text" class="form-control" required  name="prénom" placeholder="<?= $lang["prenom"]?>">
                                        <i class="fas fa-user-edit"></i>
                                        </div>
                                    </div> 
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input autocomplete="off" type="text" class="form-control" required  name="adresse" placeholder="<?= $lang["adress"]?>">
                                        <i class="fas fa-map-marked"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input autocomplete="off" type="tel" class="form-control" required  name="tel" placeholder="00-00-00-00-00">
                                        <i class="fas fa-phone-alt"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input autocomplete="off" type="email" class="form-control" required  name="email" placeholder="name@example.com">
                                        <i class="fas fa-at"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input  type="password" id="password" class="form-control" required  autocomplete="new-password" id="inputPassword" name="pass" placeholder="<?= $lang["motedepass"]?>">
                                        
                                        <i id="eye" class="fas fa-eye"></i>
                                        </div> 
                                        
                                    </div>
                                    
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <input  class="btn btn-outline-primary btnbtn" type="submit" name="submit" value="<?= $lang["sdentifier"]?>"/>

                                    </div> 
                                </form>
                                <br>
                                <p class="text-muted text-center">

                               <?= $lang["Sivousavezdéjàun ompteIdentifiez-vous!!"]?> <a href="login.php?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>"><?= $lang["sdentifier"]?></a> 

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
<?php

$titlePage = "Se Connecter";
include("initFile/init.php");


    /*login */

    if(isset($_POST["submit"])){
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
                    print_r($rows);
                    $count=$stmt->rowCount();
                    if($count>0){
                        header("location:dashbordAdmin/indexAd.php");
                        exit();
                    }else{
                        header("location:login.php");
                        exit();
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
                                    <h2 class="text-center ">S'identifier</h2>
                                    <br><br> 
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input type="email" class="form-control" required id="exampleFormControlInput1" name="email" placeholder="name@example.com">
                                        <i class="fas fa-user"></i> 
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input type="password" id="password" class="form-control" required id="inputPassword" name="pass" placeholder="mote de pass">
                                        
                                        <i id="eye" class="fas fa-eye"></i>
                                        </div>
                                    </div>
                                    
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <input  class="btn btn-outline-primary" type="submit" name="submit" value="S'identifier"/>

                                    </div>
                                     
                                </form>
                                <br>
                                <p class="text-muted text-center">

                                Vous n’avez pas de compte? <a href="sign_up.php">S'inscrire</a> 

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
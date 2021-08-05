<?php
session_start();
$titlePage = "Se Connecter";
include("initFile/init.php");

$msg="";


if(isset($_SESSION["admin"]) || isset($_SESSION["USER"]) ){ 
    header("location:index.php");
    exit();
}else{
    if($_SERVER["REQUEST_METHOD"]=="POST"){

    /*login */

    if(isset($_POST["submit"])){
            $email = htmlspecialchars(trim($_POST["email"])); 
           


                    


            




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

                            
                                <form action="#" method="post"  autocomplete="off">
                                    <br><br> <br><br><br><br> <br><br>
                                    <h2 class="text-center ">Retrouvez votre compte
</h2>
                                    <br> <br>
                                    <?php if(isset($msg) && !empty($msg)){
                                        ?>
                                        <h6 class="text-danger text-center"><?= $msg?> 
 <a href="reni.php"> mote de passe oublié?</a> </h6> 
                                        <p class="text-muted text-center">


</p>
                                        <?php }?>
                                
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
}
include("includes/templates/footer.php");

?>
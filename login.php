<?php

$titlePage = "Se Connecter";
include("initFile/init.php");

?>
<br> <br><br><br> 

<div class="container">
    <div class="row">
        <div class="col">


            <div class="loginForm shadow-lg p-3 mb-5 bg-body rounded ">
                <div class="card mb-3" style="width:100%">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img class="img-fluid rounded-start" src="<?php echo $images ?>login.png">

                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="contenu">

                            
                                <form action="#" method="post">
                                    <br><br> <br><br><br><br> 
                                    <h2 class="text-center ">S'identifier</h2>
                                    <br><br> 
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" id="inputPassword" placeholder="mote de pass">

                                    </div>
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <input  class="btn btn-outline-primary" type="submit" value="S'identifier"/>

                                    </div> 
                                </form>

                                <p class="text-muted text-center">

                                Vous n’avez pas de compte? S'inscrire

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
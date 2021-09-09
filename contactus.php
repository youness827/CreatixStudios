<?php
session_start();

$titlePage = "Creatix Studio";
include("initFile/init.php");

if (isset($_POST["envoyermsg"])) {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_SESSION["USER"]) && isset($_SESSION["iduser"])) {
                $msgenv = htmlspecialchars(trim($_POST["msgs"]));
                $stmt=$con->prepare("INSERT INTO meassagrie (ID_CLIENT,ID_CREATIX,DESCRIPTION,datemsg ) values (?,?,?,?) ");
                $stmt->execute(array($_SESSION["iduser"],1,$msgenv,date('y-m-d')));
               
                $count=$stmt->rowCount();
                if($count>0){
                    ?>
                    <script type="module">
                        swal({
                       title:"envoyer le message",
                       text: "le message bien envoyer",
                       icon: "success",
                       });                   
                     </script>
           
                   
           
                    <?php 
                            
                
                }else{
                     ?>
                     <script type="module">
                         swal({
                        title:"envoyer le message",
                        text: "fait avec échec",
                        icon: "error",
                        });                   
                      </script>
            
                    
            
                     <?php  }
                


        }else{
?>
            <script>
            window.location.href="login.php?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>";
             </script>
     <?php   }
    }
}
?>
<br><br><br><br>
<div class="contenu">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-left fw-normal">creatix studio
                   <?=$lang["LEADER"]?> </h2>
                <br>
                <h5 class="text-left text-muted fw-normal">
                <?=$lang["paragcont"]?>
                </h5>
                <br>
                <div class="contact-info">

                    <div class="contact text-center fw-normal" style="font-size: 19px;">
                        <br><br>
                        <p class=" text-muted fw-normal"> Adress:place al hansali imm ben zerwal étage 3 appt 55 24000 El Jadida, Maroc</p> &nbsp;&nbsp;
                        <a class="text-danger" href="mailto:contact@creatixstudio.ma">contact@creatixstudio.ma</a>

                        &nbsp;&nbsp;

                        <a class="text-danger" href="tel:+212656253574">+212656253574</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br><br>
<div class="contenu">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center fw-bolder" style="font-size:40px"><?=$lang["ENTRERENCONTACT"]?></h1>
                <br>
                <h5 class="text-center text-muted fw-normal">
                  <?=$lang["Noussommesla"]?>
                    <a href="login.php?lang=<?php if (isset($_GET["lang"])) echo $_GET["lang"]; ?>" class="text-danger"><?= $lang["vousbesoinsdevous"]?></a>

                </h5>
                <br><br><br>

               <form method="post" action="">
                   
                    <div class="form-floating">
                        <textarea class="form-control" style="border: 1px solid #080808; height:250px"  name="msgs" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Messages</label>
                    </div>
                    <br> <br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <input type="submit" class="btn btn-outline-danger btn-md me-md-2" name="envoyermsg" value="MESSAGE">

                    </div>
                </form>



                <br>
            </div>
        </div>
    </div>
</div>






<div class="contenu">
    <div class="container-sm">
        <div class="row">
            <div class="col">

                <p class="text-muted"><?= $lang["adresse"] ?></p>


                <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d13346.0306305018!2d-8.5035655!3d33.2531996!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0xda91d12ab555fd9%3A0xa61ec1320528fe96!2sCreatix%20School%20Center%2C%20place%20el%20hanssali%2C%20immeuble%20ben%20zeroual%2C%203eme%20etage%2C%20appart%2055%2C%20El%20Jadida%2024000!3m2!1d33.253199599999995!2d-8.503565499999999!5e0!3m2!1sfr!2sma!4v1626783989520!5m2!1sfr!2sma" width="100%" height="500" style="border:0;" allowfullscreen loading="lazy"></iframe>
            </div>
        </div>
    </div>

</div>
<br><br>

<div class="contenu">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4 class="text-left fw-bolder"><?=$lang["DEPUISPLUSDE5ANS"]?></h4>
                <br>
                <h5 class="text-left text-muted fw-normal">
          <?= $lang["pardepuis"] ?>
                </h5>
                <br><br><br>




                <br>
            </div>
        </div>
    </div>
</div>

</div>



<?php

include("includes/templates/footer.php");
?>
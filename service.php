<?php
session_start();


$titlePage = "Nos services";
include("initFile/init.php");
$msg = "";



    if (isset($_POST["demander"])) {
 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_SESSION["USER"]) && isset($_SESSION["iduser"])) {


            if ($_POST["selectservice"] != "NosService") {



                // demande dun service 


                //table commande 

                $stmt = $con->prepare("INSERT INTO commande(ID_CLIENT,DATE) VALUES (?,?)");
                $stmt->execute(array($_SESSION["iduser"], date('y-m-d')));
                $count = $stmt->rowCount();
                if ($count > 0) {

                    $stmt = $con->prepare("SELECT *from commande order by ID_COMMANDE desc LIMIT 1");
                    $stmt->execute(array());
                    $rowcmd = $stmt->fetch();
                    $countcmd = $stmt->rowCount();
                    if ($countcmd > 0) {

                        $stmt = $con->prepare("INSERT INTO detailservice(ID_COMMANDE,ID_SERVICE) VALUES (?,?)");
                        $stmt->execute(array($rowcmd["ID_COMMANDE"], $_POST["selectservice"]));
                        $countserv = $stmt->rowCount();
                        if ($countserv > 0) {
                                                if(isset($_GET["lang"])){
                                                    
                                                
                                                $lgs = $_GET["lang"];
                                                if($lgs=="an"){

                                                    
                                                    $msg = "your request is taken into account";
                                                    $title="success";
                                                
                                                }else {

                                                    $msg = "votre demande est bien prise en compte";
                                                    $title="succés";

                                                }

                                                }

                           
                      
                      
                        }
                    }
                }
            } else {
                if(isset($_GET["lang"])){
                                                    
                                                
                    $lgs = $_GET["lang"];
                    if($lgs=="an"){

                        
                        $msg ="please select a service";

                        $title="Warning";
                    }else {

                        $msg = "veuillez choisir un service";

                        $title="Attention";

                    }

                    }


          
          
            }



        } else {?>


                        <script>
                            window.location.href="login.php?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>";
                        </script>
<?php
        }
    }
}

?>

<div class="bodyIndex">

    <div class="container">
        <div class="row ">
            <div class="col">
                <div class="contenu ">
                    <br> <br> <br> <br> <br>
                    <h2 data-aos="fade-down" data-aos-duration="1800"><?= $lang["titleservice"]?></h2>
                    <br> 
                        <div class="text-center " data-aos="fade-up-right" data-aos-duration="2100">
</div>
 <br> <br>
                    <p data-aos="fade-down" data-aos-duration="2800"><?= $lang["parservice"];?></p>

                    <br> <br> <br> <br>
                    <p data-aos="fade-down" class="shadow p-3 mb-5 bg-light rounded " data-aos-duration="2400"> <span class="sp "> <?= $lang["agriculture"];?> :</span><?= $lang["paragriculture"];?></p>
                    <br>
                    <p data-aos="fade-down" class="shadow p-3 mb-5 bg-light rounded" data-aos-duration="2400"> <span class="sp"> <?= $lang["topographiephotogrammétrie"];?> :</span><?= $lang["partopographiephotogrammétrie"];?></p>
                    <br>
                    <p data-aos="fade-down" class="shadow p-3 mb-5 bg-light rounded" data-aos-duration="2400"><span class="sp"> <?= $lang["inspectionindustrielle"];?> :</span> <?= $lang["parinspectionindustrielle"];?></p>
                    <br>
                    <p data-aos="fade-down" class="shadow p-3 mb-5 bg-light rounded" data-aos-duration="2400"> <span class="sp"> <?= $lang["audiovisuel"];?> :</span><?= $lang["paraudiovisuel"];?> </p>
                    <br>

                </div>
            </div>

        </div>
    </div>
    <div class="contenu ">

        <br> <br> 
        <h6 class="text-center text-muted"><?=$lang["contacter"];?> :<a href="contactus.php" class="text-danger" >Nous contacter</a> </h6> 
        <br><br>  <br><br><br>
        
        <h2><?= $lang["nosservice"]?></h2>
        <br> <br>
        <div class="container">


            <div class="row  row-cols-1 row-cols-lg-1 g-5">
<?php 

if(isset($_GET["lang"])){
    
    $type="";
    $description="";

  $lgs = $_GET["lang"];
  if($lgs=="an"){

    $type="typeinan";
    $description="descriptionan";

  
   
  }else {

    $type="TYPE";
    $description="DESCRIPTION";


  }

}

$stmt = $con->prepare("select *from service");
                $stmt->execute(array());
                $rows = $stmt->fetchAll(); 

                foreach($rows as $rr){
                    ?>
                    <div class="col">
                    <div class="card border mb-3 mycardcards" data-aos="fade-down" data-aos-duration="2000">
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                <?php 
                                
                                
                                echo $rr[$type];

                                ?></h5>
                            <p class="card-text">


                                <?=
                                 $rr[$description];

                                ?>
                        </div>
                    </div>
                </div>


     <?php
                }
    
    ?>
                

            
            </div>

        </div>
    </div>
        
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="contenu">
                    <br><br><br>
                    <h2><?= $lang["CEQUENOUSOFFRONS"];?></h2>

                    <br>
                    <p class="text-center"><?= $lang["parCEQUENOUSOFFRONS"]?></p>
                    <br> <br>
                    <div class="accordion" id="accordionExample">
                        <!-- according begin-->


                        <div class="accordion-item shadow  p-3 mb-5 bg-body rounded" data-aos="fade-down" data-aos-duration="2000">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <h3><?= $lang["traitementagricole"];?></h3>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                
                                        <?= $lang["partraitementagricole"]?>

                                    <div class="container">
                                        <div class="row row-cols-1 row-cols-lg-3 g-5">
                                            <div class="col ">
                                                <img src="<?php echo $images ?>p4m-agric.jpg">
                                            </div>
                                            <div class="col">
                                                <img src="<?php echo $images ?>agras-t20-traitement.png">
                                            </div>
                                            <div class="col">
                                                <img src="<?php echo $images ?>agriculturedrone.jpg">
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- item 1 -->

                        <div class="accordion-item shadow p-3 mb-5 bg-body rounded" data-aos="fade-down" data-aos-duration="2300">
                            <h2 class="accordion-header" id="headingTow">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTow" aria-expanded="false" aria-controls="collapseTow">
                                    <h3><?= $lang["PHOTOGRAPHIEIMMOBILIÈRE"]?></h3>
                                </button>
                            </h2>
                            <div id="collapseTow" class="accordion-collapse collapse" aria-labelledby="headingTow" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <?= $lang["parPHOTOGRAPHIEIMMOBILIÈRE"]?>

                                    <div class="container">
                                        <div class="row row-cols-1 row-cols-lg-3 g-5">
                                            <div class="col ">
                                                <img class="img" src="<?php echo $images ?>thumbs_golf.jpg">
                                            </div>
                                            <div class="col">
                                                <img class="img" src="<?php echo $images ?>thumbs_hotel.jpg">
                                            </div>
                                            <div class="col">
                                                <img class="img" src="<?php echo $images ?>thumbs_projet-luxe-2.jpg">
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- item 2 -->

                        <div class="accordion-item shadow p-3 mb-5 bg-body rounded" data-aos="fade-down" data-aos-duration="2500">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <h3><?= $lang["SITESURVEYEETSUIVIDESOUVRAGES"]?></h3>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <?= $lang["parSITESURVEYEETSUIVIDESOUVRAGES"]?>

                                    <div class="container">
                                        <div class="row row-cols-1 row-cols-lg-3 g-5">
                                            <div class="col ">
                                                <img class="img" src="<?php echo $images ?>thumbs_chantier-2-1.jpg">
                                            </div>
                                            <div class="col">
                                                <img class="img" src="<?php echo $images ?>thumbs_chantier-4.jpg">
                                            </div>
                                            <div class="col">
                                                <img class="img" src="<?php echo $images ?>thumbs_chantier-1.jpg">
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- item 3 -->


                        <div class="accordion-item shadow p-3 mb-5 bg-body rounded" data-aos="fade-down" data-aos-duration="2700">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <h3><?= $lang["INSPECTIONINDUSTRIELLE"]?></h3>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <?= $lang["parINSPECTIONINDUSTRIELLE"]?>

                                    <div class="container">
                                        <div class="row row-cols-1 row-cols-lg-3 g-5">
                                            <div class="col ">
                                                <img class="img" src="<?php echo $images ?>thumbs_stack6-768x498.jpg">
                                            </div>
                                            <div class="col">
                                                <img class="img" src="<?php echo $images ?>thumbs_telecom.jpg">
                                            </div>
                                            <div class="col">
                                                <img class="img" src="<?php echo $images ?>thumbs_chemine.jpg">
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- item 4 -->

                    </div> <!-- according end-->
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="contenu">
                        <br><br><br>


                        <h2><?= $lang["Demanderunservice"]?> </h2>
                        <br>
                       <h6 class="text-primary text-center"> <?= $lang["conditiondemende"]?></h6>
                        <br>

                        <?php
                        if (isset($msg) && !empty($msg)) {
                            if ($msg == "votre demande est bien prise en compte" ||  $msg == "your request is taken into account") { ?>
                            <script type="module">
                                swal({
                                title:"<?=$title;?>",
                                text: "<?= $msg;?>",
                                icon: "success",
                                });                
                             </script>

                           

                            <?php  } else { ?>
                                <script type="module">
                                swal({
                                title:"<?=$title;?>",
                                text: "<?= $msg;?>",
                                icon: "warning",
                                });                
                             </script>
                            <?php   }

                            ?>

                        <?php } ?>
                        <form action="" method="post">

                            <select class="form-select" aria-label="Default select example" name="selectservice">
                                <option selected value="NosService"><?= $lang["nosservice"]?></option>
                                <?php

if(isset($_GET["lang"])){
    
    $type="";
    $description="";

  $lgs = $_GET["lang"];
  if($lgs=="an"){

    $type="typeinan";
 

  
   
  }else {

    $type="TYPE";
  

   
    

  }

}
$stmt = $con->prepare("select *from service");
                                $stmt->execute(array());
                                $rows = $stmt->fetchAll();
                                $count = $stmt->rowCount();
                                if ($count > 0) {
                                    foreach ($rows as $rr) {
                                ?>
                                        <option style="font-weight:700;" class="text-center" value="<?php echo $rr["ID_SERVICE"] ?>"><?php echo $rr[$type] ?></option>
                                <?php

                                    }
                                }

                                ?>


                            </select>

                            <br>

                           <?php if(!isset($_SESSION["ADMIN"])) {
                               ?>
                                 <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <input type="submit" class="btn btn-outline-primary btn-lg me-md-2" name="demander" value="<?= $lang["demander"]?>">

                            </div>
                              
                               <?php
                           }
                              ?>   
                         
                        </form>

                    </div>
                </div>
            </div>



        </div>



    </div>
<br> <br> <br>



    <?php
    include("includes/templates/footer.php");

    ?>
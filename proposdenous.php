<?php
session_start();

$titlePage = "Creatix Studio";
include("initFile/init.php");


?>
<div class="about_us">
    <br><br><br>
    <br><br><br><br><br><br>
    <h2 class="text-center fw-bolder">Creatix Studio</h2>
    <h1 class="text-center fw-bolder "><?=$lang["LEADER"]?></h1>
    <h3 class="text-center fw-bolder"><?=$lang["quisomme"]?></h3>


    <a href="#mm" id="hh" class="position-absolute bottom-0 start-50 translate-middle-x shortdown">
    <i class="fas fa-sort-down"></i>
    </a>
</div>
<br><br><br>
<div id="mm"></div>

<div class="container">
    <div class="row">
        <div class="col">

            <h1 class="fw-bolder" data-aos="zoom-in-down" data-aos-duration="2000">
            <?=$lang["dronesol"];?>

            </h1>
            <div class="card mb-3 cardabout " data-aos="zoom-in" data-aos-duration="2000">
                <div class="row g-0">
                    <div class="col-lg-4">

                        <img src="<?php echo $images ?>dronepropos.jpg" class="img-fluid rounded-start " alt="...">
                    </div>
                    <div class="col-lg-8">
                        <div class="card-body">
                            <h2 class="card-title"><?=$lang["Opérateur"]?>
                            </h2>
                            <p class="card-text shadow-lg p-3 mb-5 bg-body rounded">
                          <?= $lang["opérateutpar"] ?>
                          </p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<br><br><br>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="about">
                <h1 class="text-center fw-bolder" >
                    CREATIX STUDIO
                </h1>
                <h2 class="fw-normal text-lg-start" >
                <?= $lang["proposeservice"] ?>
                </h2>
                <br><br><br><br>

                <h2 class="fst-italic text-center text-muted fw-bolder"><?=$lang["faitpartie"]?> <br> </h2>
<br><br>

                <div class="card mb-3 cardabout">
                    <div class="row g-0">

                        <div class="col-xxl-7">
                            <div class="card-body">
                                <br><br>
                                <h2 class="card-title text-muted  fw-bolder font-italic text-lowercase"><?=$lang["imagerie"]?></h2>
                                <h4 class="card-text fw-bolder shadow-lg p-3 mb-5 bg-body rounded" data-aos="fade-right" data-aos-duration="2000">
                              <?= $lang["prestationpardrone"]   ?>  
                              </h4>
                            </div>
                        </div>
                        <div class="col-xxl-5">
                            <img src="<?php echo $images ?>photoabout.jpg" data-aos="zoom-in-up" data-aos-duration="2000" height="70" class="img-fluid rounded-start myimgabout " alt="...">
                            <br>
                            
                            <h2 class="fw-bold text-lg-start text-lowercase"data-aos="fade-right" data-aos-duration="2000"><?=$lang["pourquoi"]?></h2>
                            <p class="text-muted text-uppercase"><?= $lang["exper"]?>
                            </p>
                            <img src="<?php echo $images ?>audiovs.jpg" data-aos="zoom-out" data-aos-duration="3000" height="70" class="img-fluid rounded-start myimgabout22  card-text shadow-lg p-3 mb-5 bg-body rounded" alt="...">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<br><br>
<div class="container">
<div class="row">
    <div class="col">
    <div class="about__">
                <h1 class="text-left fw-bolder" data-aos="zoom-out-down" data-aos-duration="2700">
   <?= $lang["Spécialistédelaprise"]?>

                </h1>
                <br>
    <h2 class="fw-normal shadow-lg p-3 mb-5 bg-body rounded" data-aos="zoom-out-down" data-aos-duration="2000">
<?= $lang["Noussommes"]?>
  </h2>
    </div>
    </div>
</div>

</div>
<br><br><br><br>

<div class="container">
<h1 class="text-left fw-bolder">
    <?= $lang["nosservice"]?>
                </h1>
                <h5 class="text-center text-muted"><?= $lang["Pourplusdétails"]?> :<a href="service.php" class="text-danger" >Services</a> </h5> 

    <br><br>
    <div class=" row row-cols-1 row-cols-lg-2 g-5 ">
   
    <div class="col">
       
        <div class="card border-light mb-3 cardabout " data-aos="zoom-in-right"
     data-aos-duration="2000">
          <div class="card-body">
            <h4 class="card-title text-center shadow-lg p-3 mb-5 bg-body rounded"  style="font-weight: 800;"> &nbsp;&nbsp;<?=$lang["Modélisation3Dpardrone"]?>
</h4>
            <p class="card-text text-md-start text-muted"  >
            <img src="<?php echo $images ?>modelisation3dabout.jpg" height="70" class="img-fluid rounded-start imgser" alt="...">
            </p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card border-light mb-3 cardabout "  data-aos="zoom-in-left"
     data-aos-duration="2500" >
          <div class="card-body">
            <h4 class="card-title text-center shadow-lg p-3 mb-5 bg-body rounded" style="font-weight: 800;" > &nbsp;&nbsp;<?=$lang["Photogrammétrie"]?></h4>
            <br>
            <p class="card-text text-md-start text-muted">

            <img src="<?php echo $images ?>photogtamatique.jpg" height="70" class="img-fluid rounded-start imgser" alt="...">
            </p>
          </div>
        </div>
      </div>
   


   
   <div class="col">
      
       <div class="card border-light mb-3 cardabout" data-aos="zoom-in-right"
    data-aos-duration="2000">
         <div class="card-body">
           <h4 class="card-title text-center shadow-lg p-3 mb-5 bg-body rounded"  style="font-weight: 800;">  &nbsp;&nbsp;<?=$lang["Prestationspardrone"]?>
</h4>
           <br>
           <p class="card-text text-md-start text-muted"  >
           <img src="<?php echo $images ?>immoblierabout.jpg" height="70" class="img-fluid rounded-start imgser" alt="...">
           </p>
         </div>
       </div>
     </div>

     <div class="col">
       <div class="card border-light mb-3 cardabout"  data-aos="zoom-in-left"
    data-aos-duration="2500" >
         <div class="card-body">
           <h4 class="card-title text-center shadow-lg p-3 mb-5 bg-body rounded" style="font-weight: 800;" > &nbsp;&nbsp;<?=$lang["inspectiontemp"]?>
</h4>
           <br>
           <p class="card-text text-md-start text-muted">            <img src="<?php echo $images ?>inspectionaboutreel.jpg" height="70" class="img-fluid rounded-start imgser" alt="...">
</p>
         </div>
       </div>
     </div>
     <div class="col">
       <div class="card border-light mb-3 cardabout" data-aos="zoom-in-right"
    data-aos-duration="2000" >
         <div class="card-body">
           <h4 class="card-title text-center shadow-lg p-3 mb-5 bg-body rounded"  style="font-weight: 800;"> &nbsp;&nbsp;<?=$lang["Orthophotographieaérienne"]?>
</h4>
           <br>
           <p class="card-text text-md-start text-muted" >

           <img src="<?php echo $images ?>Orthophotographie.jpg" height="70" class="img-fluid rounded-start imgser" alt="..."></p>
         </div>
       </div>
     </div>

   
   


   
   <div class="col">
      
       <div class="card border-light mb-3 cardabout " data-aos="zoom-in-left"
    data-aos-duration="2500">
         <div class="card-body">
           <h4 class="card-title text-center shadow-lg p-3 mb-5 bg-body rounded"  style="font-weight: 800;">  &nbsp;&nbsp;<?=$lang["Réalitévirtuelle"]?>
</h4>
           <br>
           <p class="card-text text-md-start text-muted"  >
           <img src="<?php echo $images ?>virtuelle.jpg" height="70" class="img-fluid rounded-start imgser" alt="...">
           </p>
         </div>
       </div>
     </div>

     <div class="col">
       <div class="card border-light mb-3 cardabout"  data-aos="zoom-in-right"
    data-aos-duration="2000" >
         <div class="card-body">
           <h4 class="card-title text-center shadow-lg p-3 mb-5 bg-body rounded" style="font-weight: 800;" > &nbsp;&nbsp;<?=$lang["inspectionouvrage"]?>

</h4>
           <br>
           <p class="card-text text-md-start text-muted">
               <img src="<?php echo $images ?>ouvrage.jpg" height="70" class="img-fluid rounded-start imgser" alt="...">
</p>
         </div>
       </div>
     </div>
     <div class="col">
       <div class="card border-light mb-3 cardabout" data-aos="zoom-in-left"
    data-aos-duration="2500" >
         <div class="card-body">
           <h4 class="card-title text-center shadow-lg p-3 mb-5 bg-body rounded"  style="font-weight: 800;"> &nbsp;&nbsp;<?=$lang["sécuritébâtiment"]?>
</h4>
           <br>
           <p class="card-text text-md-start text-muted" >

           <img src="<?php echo $images ?>securitébati.jpg" height="70" class="img-fluid rounded-start imgser" alt="..."></p>
         </div>
       </div>
     </div>

   
    </div>
</div>
    <br><br>
    <h5 class="text-center text-muted"><?= $lang["contacter"]?> :<a href="service.php" class="text-danger" >contactez nous</a> </h5> 

    <br>
    <div class="notrequalité"> 

<div class="contenu"  > 
  <h2 class="text-center text-light "><?= $lang["NOUSSOMMES"]?></h2> 
  <br><br><br>
<div class="container">
<div class=" row row-cols-1 row-cols-lg-3 g-5 ">


<div class="col">
   
    <div class="card border-light mb-3 " data-aos="zoom-out-down"
 data-aos-duration="1500">
      <div class="card-body">
        <h4 class="card-title text-center shadow-lg p-3 mb-5 bg-body rounded"  style="font-weight: 800;"><i class="fas fa-clipboard-check"></i>  &nbsp;&nbsp;<?= $lang["QUALITÉ"]?></h4>
        <br>
        <p class="card-text text-md-start text-muted"  ><?= $lang["qualitepar"]?></p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card border-light mb-3 "  data-aos="zoom-out-down"
 data-aos-duration="1500" >
      <div class="card-body">
        <h4 class="card-title text-center shadow-lg p-3 mb-5 bg-body rounded" style="font-weight: 800;" > <i class="fas fa-gem"></i> &nbsp;&nbsp;<?= $lang["PROFESSIONNEL"]?></h4>
        <br>
        <p class="card-text text-md-start text-muted">
        <?= $lang["profpar"]?>

        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card border-light mb-3 " data-aos="zoom-out-down"
 data-aos-duration="1500" >
      <div class="card-body">
        <h4 class="card-title text-center shadow-lg p-3 mb-5 bg-body rounded"  style="font-weight: 800;"> <i class="fas fa-handshake"></i> &nbsp;&nbsp;<?= $lang["CONFIANCE"]?></h4>
        <br>
        <p class="card-text text-md-start text-muted" >
<?= $lang["confpar"]?>
</p>
      </div>
    </div>
  </div>

</div>
</div>
</div>
</div>

<br><br><br><br>
<br><br>
<div class="container">
  <div class="row">
    <div class="col">
    <div class="card  cardabout">
      
  <div class="row g-0">
    
    <div class="col-lg-4">
    <img src="<?php echo $images ?>fondateur.jpg"   style="overflow: hidden;"  class="img-fluid rounded-start myfondateurcard " alt="..."></p>
    </div>

    <div class="col-lg-8">
    <br>
      <div class="card-body shadow-lg p-3 mb-5 bg-body rounded">
        <h1 class="card-title text-muted font-italic fw-bolder"><?= $lang["Fondateur"]?>: Abdel ElmekkaouiI</h1>
        <p class="card-text">

        <ul class="fw-bolder" style="font-size: 20px;">
         
     <?= $lang["fondateurpar"]?>
 
        </ul> 
        </p>
     
      </div>
    </div>
  </div>
</div>

    </div>
  </div>
</div>







<?php

include("includes/templates/footer.php");
?>
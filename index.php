<?php
session_start();

$titlePage = "Creatix Studio";
include("initFile/init.php");


?>

<!-- Carsouual -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-aos="zoom-in" data-aos-duration="1500" data-bs-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo $images; ?>AgrasT20.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-sm-block">
        <h4>AgrasT20</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo $images; ?>drone.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-sm-block">
        <h4>M300RTK</h4>
      </div>
    </div>

    <div class="carousel-item">
      <img src="<?php echo $images; ?>Matric-210-3.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-sm-block">
        <h4>MATRICE-200 SERIES V2</h4>
      </div>
    </div>

    <div class="carousel-item">
      <img src="<?php echo $images; ?>M600PRO.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-sm-block">
        <h4>MATRICE 600 PRO</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo $images; ?>aeroscope-1.png" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-sm-block">
        <h4>Aeroscope-1</h4>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Body index -->
<div class="bodyIndex">
  <br><br>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="contenu">
          <h2 class="text-center" ><?= $lang["DRONEDOMAINEDUTILISATION"]?></h2>
          <br>
          <!-- index pardronedomaine file languages -->
          <p class="text-md-start"data-aos="zoom-out-up" data-aos-duration="2000"><?= $lang["pardronedomaine"]?></p>
        </div>
      </div>
    </div>
  </div>

  <br>
  <br>
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-5">
      <div class="col">
        <div class="card shadow p-3 mb-5 bg-body rounded mycard">
          <img src="<?php echo $images; ?>livraison-par-drone.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $lang["danslalogistique"]?> </h5>
            <h6   class="card-title text-right text-danger">en savoir plus </h6>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow p-3 mb-5 bg-body rounded mycard">
          <img src="<?php echo $images; ?>vue-aerienne-agriculture.jpg" class="card-img-top" alt="...">
          <div class="card-body ">
            <h5 class="card-title"><?= $lang["danslaagriculture"]?></h5>
            <h6   class="card-title text-right text-danger">en savoir plus </h6>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow p-3 mb-5 bg-body rounded mycard" >
          <img src="<?php echo $images; ?>drone-controle.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $lang["danslasécurité"]?></h5>
            <h6   class="card-title text-right text-danger">en savoir plus </h6>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card shadow p-3 mb-5 bg-body rounded mycard" >
          <img src="<?php echo $images; ?>vue-aerienne-satellite-drone.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $lang["aménagementduterritoire"]?></h5>
            <h6   class="card-title text-right text-danger">en savoir plus </h6>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow p-3 mb-5 bg-body rounded mycard">
          <img src="<?php echo $images; ?>drone-camera.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $lang["dronedinspection"]?></h5>
            <h6   class="card-title text-right text-danger">en savoir plus </h6>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow p-3 mb-5 bg-body rounded mycard" >
          <img src="<?php echo $images; ?>drone-vue-aerienne-port.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"> <?= $lang["laudiovisuel"]?></h5>
            <h6   class="card-title text-right text-danger">en savoir plus </h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br> <br>
  <div class="container">
    <div class="row">
     
        <div class="contenu">
          <h2 class="text-center"  ><?= $lang["DRONEAVANTAGESSOLUTIONSPERSONNALISÉES"] ?></h2>
          <br>
          <p class="text-md-start" ><?= $lang["pardroneavantages"] ?></p>
          <br><br><br>
          <h2 class="text-left" ><?= $lang["TECHNOLOGIES"] ?>:</h2>
          <br>
          <p class="text-md-start" ><?= $lang["partechnologies"] ?></p>
          <br><br><br>
          <h2 class="text-left" ><?= $lang["SERVICE"] ?>:</h2>
          <br>
          <p class="text-md-start"  ><?= $lang["parservice"] ?></p>
          <br><br><br>
          <h2 class="text-left" ><?= $lang["FORMATION"] ?></h2>
          <br>
          <p class="text-md-start"  ><?= $lang["parformation"] ?></p>
          <br><br><br>
      </div>
    </div>
  </div>

  <br> <br>  <br> <br>
  <div class="contenu"  > 
  <div class="container">
    <div class=" row row-cols-1 row-cols-md-3 g-5 ">
   
    
    <div class="col">
       
        <div class="card border mb-3 mycard" data-aos="zoom-in-right"
     data-aos-duration="1500">
          <div class="card-body">
            <h2 class="card-title text-center shadow-lg p-3 mb-5 bg-body rounded" ><?= $lang["LAVUEAÉRIEN"]?></h2>
            <br>
            <p class="card-text text-md-start text-muted"  ><?= $lang["parlavuaerien"]?></p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card border mb-3 mycard"  data-aos="zoom-in"
     data-aos-duration="1500" >
          <div class="card-body">
            <h2 class="card-title text-center shadow-lg p-3 mb-5 bg-body rounded" ><?= $lang["4K/5K/6KVIDEOS"]?></h2>
            <br>
            <p class="card-text text-md-start text-muted"><?= $lang["par4k5k6kvideo"]?></p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card border mb-3 mycard" data-aos="zoom-in-left"
     data-aos-duration="1500" >
          <div class="card-body">
            <h2 class="card-title text-center shadow-lg p-3 mb-5 bg-body rounded" > <?= $lang["PROJET"]?> </h2>
            <br>
            <p class="card-text text-md-start text-muted" ><?= $lang["parprojet"]?></p>
          </div>
        </div>
      </div>

    </div>
    </div>
  </div>
  
<br><br><br><br>




<br><br><br><br>

<div class="notreexpertise">

<div class="" ta-aos="zoom-out"
     data-aos-duration="1500">
<div class="contenu">
  <div class="container">
    <div class="row">
      <div class="col">
        <br><br>
      <h2 class="text-light" ><?= $lang["topservices"]?></h2>
      <br> <br>

        <p class="text-left"  ><?= $lang["partopservices"]?>
</p>
      <br> <br>
      </div>
  
    </div>
  </div>
  
<div class="container">
  <div class="row row-cols-1 row-cols-lg-4 g-5">
  <div class="col ">
  <div class="card shadow p-3 mb-5 bg-body rounded mycard" data-aos="zoom-in"
     data-aos-duration="2000" >
  <img src="<?php echo $images?>agras-eight.jpg" class="card-img-top" alt="...">
  <div class="card-body ">
    <p class="card-text ">
      <ul class="a">
        <li> <?= $lang["Traimtement"];?> </li>
        <li> <?= $lang["Semidesgraines"];?></li>
        <li> <?= $lang["Pollinisation"];?> </li>
        <li> <?= $lang["Applicationdesfertilisants"];?> 
</li>
      </ul>
  
  </p>
  </div>
</div>
  </div>  

  <div class="col">
  <div class="card shadow p-3 mb-5 bg-body rounded mycard" data-aos="zoom-in"
     data-aos-duration="2000">
  <img src="<?php echo $images?>hotel-270x361.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">   
         <ul class="a">
        <li><?= $lang["Immobiliercommercial"];?></li>
        <li><?= $lang["Projetrésidentielshaut"];?></li>
        <li><?= $lang["Clubs/Hôtel/terrains"];?></li>
        <li><?= $lang["Écoles/Universités"];?>
      </li>
      </ul>
    </p>
  </div>
</div>
  </div>   
  
  <div class="col">
  <div class="card shadow p-3 mb-5 bg-body rounded mycard" data-aos="zoom-in"
     data-aos-duration="2000" >
  <img src="<?php echo $images?>thermique-1-270x361.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">
      <ul class="a">
        <li><?= $lang["Installationsindustriellespétrolières"];?></li>
        <li><?= $lang["Parcéoliennespanneauxphotovoltaïques."];?></li>
       
</li>
      </ul>
    </p>
  </div>
</div>
  </div>  

  <div class="col">
  <div class="card shadow p-3 mb-5 bg-body rounded mycard" data-aos="zoom-in"
     data-aos-duration="2000" >
  <img src="<?php echo $images?>chantier-2-1-270x361.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">      
       <ul class="a">
        <li><?= $lang["Suiviprécis"];?></li>
        <li><?= $lang["Photogrammétriedessol"];?></li>
       
      </li>
      </ul>
    </p>
  </div>
</div>
  </div>  

</div>
    
</div>

</div>
</div> 
</div>
<!--
<div class="creatixvideo shadow-lg p-3 mb-5 bg-body rounded">
    <video style="width: 100%;" autoplay muted>
  <source src="<?php echo $video?>creatix.mp4" type="video/mp4">
  </video> 
</div>-->
<br> <br><br><br><br><br><br><br>

<div class="contenu "> 
        <div class="container">
          <div class="row">
            <div class="col">
              <br> <br><br>
              <h2 class="text-left"><?= $lang["notreexpertise"]?> </h2>
              <br><br><br><br>
         <p class="text-lg-start">
         <?= $lang["parnotreexpertise"]?> 
         </p>

       
            </div>
          </div>
        </div>
      </div>
    
    <div class="container">
      <div class="row">
        <div class="col">
        <br><br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="#" class="btn btn-outline-danger  btn-md me-md-2 shadow-md p-3 mb-5 bg-blue rounded"><?= $lang["contacteznous"]?> </a>
</div>
        </div>
      </div>
    </div>
    <br><br><br><br>
    <div class="notrequalité"> 

    <div class="contenu"  > 
      <h2 class="text-center text-light ">NOUS SOMMES SUR LA QUALITÉ ET LA CONFIANCE.</h2> 
      <br><br><br>
  <div class="container">
    <div class=" row row-cols-1 row-cols-lg-3 g-5 ">
   
    
    <div class="col">
       
        <div class="card border-light mb-3 mycard" data-aos="zoom-in-right"
     data-aos-duration="1500">
          <div class="card-body">
            <h4 class="card-title text-center shadow-lg p-3 mb-5 bg-body rounded"  style="font-weight: 800;"><i class="fas fa-clipboard-check"></i>  &nbsp;&nbsp;QUALITÉ</h4>
            <br>
            <p class="card-text text-md-start text-muted"  >Nos services sont de haute qualité, et nous continuons à améliorer nos processus pour toujours répondre à vos attentes</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card border-light mb-3 mycard"  data-aos="zoom-in"
     data-aos-duration="1500" >
          <div class="card-body">
            <h4 class="card-title text-center shadow-lg p-3 mb-5 bg-body rounded" style="font-weight: 800;" > <i class="fas fa-gem"></i> &nbsp;&nbsp;PROFESSIONNEL</h4>
            <br>
            <p class="card-text text-md-start text-muted">Une équipe de professionnels experts est à votre disposition pour vous écouter, vous assister et réussir ensemble vos projets</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card border-light mb-3 mycard" data-aos="zoom-in-left"
     data-aos-duration="1500" >
          <div class="card-body">
            <h4 class="card-title text-center shadow-lg p-3 mb-5 bg-body rounded"  style="font-weight: 800;"> <i class="fas fa-handshake"></i> &nbsp;&nbsp;CONFIANCE</h4>
            <br>
            <p class="card-text text-md-start text-muted" >

Vous nous confiez vos projets, nous seront à la hauteur de votre confiance et nous traiterons vos projets dans la totale discrétion.</p>
          </div>
        </div>
      </div>

    </div>
    </div>
  </div>
    </div>

<br><br><br><br><br><br>
<div class="contenu"> 
<div class="container">
  <div class="row">
    <div class="col"> 
      <br> 
      <br>
      <p class="text-muted"><?= $lang["adresse"]?></p>
   
      
      <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d13346.0306305018!2d-8.5035655!3d33.2531996!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0xda91d12ab555fd9%3A0xa61ec1320528fe96!2sCreatix%20School%20Center%2C%20place%20el%20hanssali%2C%20immeuble%20ben%20zeroual%2C%203eme%20etage%2C%20appart%2055%2C%20El%20Jadida%2024000!3m2!1d33.253199599999995!2d-8.503565499999999!5e0!3m2!1sfr!2sma!4v1626783989520!5m2!1sfr!2sma" width="100%" height="500" style="border:0;" allowfullscreen loading="lazy"></iframe>
    </div>
  </div>
</div>

</div>


</div>



<?php

include("includes/templates/footer.php");
?>
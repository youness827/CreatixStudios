<?php
session_start();

$titlePage = "Creatix Studio";
include("initFile/init.php");


?>

<!-- Carsouual -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" >
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
          <h2 class="text-center" data-aos="fade-down-right" data-aos-duration="700"><?= $lang["DRONEDOMAINEDUTILISATION"]?></h2>
          <br>
          <!-- index pardronedomaine file languages -->
          <p class="text-md-start" data-aos="fade-down-left" data-aos-duration="900"><?= $lang["pardronedomaine"]?></p>
        </div>
      </div>
    </div>
  </div>

  <br>
  <br>
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-5">
      <div class="col">
        <div class="card shadow p-3 mb-5 bg-body rounded" data-aos="fade-down-left" data-aos-duration="1200">
          <img src="<?php echo $images; ?>livraison-par-drone.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $lang["danslalogistique"]?> </h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow p-3 mb-5 bg-body rounded" data-aos="fade-down" data-aos-duration="1400">
          <img src="<?php echo $images; ?>vue-aerienne-agriculture.jpg" class="card-img-top" alt="...">
          <div class="card-body ">
            <h5 class="card-title"><?= $lang["danslaagriculture"]?></h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow p-3 mb-5 bg-body rounded" data-aos="fade-down-right" data-aos-duration="1600">
          <img src="<?php echo $images; ?>drone-controle.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $lang["danslasécurité"]?></h5>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card shadow p-3 mb-5 bg-body rounded" data-aos="fade-down-left" data-aos-duration="1800">
          <img src="<?php echo $images; ?>vue-aerienne-satellite-drone.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $lang["aménagementduterritoire"]?></h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow p-3 mb-5 bg-body rounded" data-aos="fade-down" data-aos-duration="2000">
          <img src="<?php echo $images; ?>drone-camera.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $lang["dronedinspection"]?></h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow p-3 mb-5 bg-body rounded" data-aos="fade-down-right" data-aos-duration="2200">
          <img src="<?php echo $images; ?>drone-vue-aerienne-port.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"> <?= $lang["laudiovisuel"]?></h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br> <br>
  <div class="container">
    <div class="row">
     
        <div class="contenu">
          <h2 class="text-center" data-aos="fade-up" data-aos-duration="2000"><?= $lang["DRONEAVANTAGESSOLUTIONSPERSONNALISÉES"] ?></h2>
          <br>
          <p class="text-md-start" data-aos="fade-up" data-aos-duration="2500"><?= $lang["pardroneavantages"] ?></p>
          <br><br><br>
          <h2 class="text-left" data-aos="fade-up-left" data-aos-duration="2000"><?= $lang["TECHNOLOGIES"] ?>:</h2>
          <br>
          <p class="text-md-start" data-aos="fade-up" data-aos-duration="2500"><?= $lang["partechnologies"] ?></p>
          <br><br>
          <h2 class="text-left" data-aos="fade-up-left" data-aos-duration="2000"><?= $lang["SERVICE"] ?>:</h2>
          <br>
          <p class="text-md-start" data-aos="fade-up" data-aos-duration="2500"><?= $lang["parservice"] ?></p>
          <br><br>
          <h2 class="text-left" data-aos="fade-up-left" data-aos-duration="2000"><?= $lang["FORMATION"] ?></h2>
          <br>
          <p class="text-md-start" data-aos="fade-up" data-aos-duration="2500"><?= $lang["parformation"] ?></p>

      </div>
    </div>
  </div>

  <br> <br>  <br> <br>
  <div class="contenu"  > 
  <div class="container">
    <div class=" row row-cols-1 row-cols-md-3 g-5 ">
   
    
    <div class="col">
       
        <div class="card border-light mb-3" data-aos="fade-down" data-aos-duration="2000">
          <div class="card-body">
            <h2 class="card-title text-center shadow-lg p-3 mb-5 bg-body rounded"  data-aos="fade-down-right" data-aos-duration="2600"><?= $lang["LAVUEAÉRIEN"]?></h2>
            <br>
            <p class="card-text text-md-start text-muted"  data-aos="fade-right" data-aos-duration="2600"><?= $lang["parlavuaerien"]?></p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card border-light mb-3" data-aos="fade-down" data-aos-duration="2000" >
          <div class="card-body">
            <h2 class="card-title text-center shadow-lg p-3 mb-5 bg-body rounded"  data-aos="fade-down" data-aos-duration="2600"><?= $lang["4K/5K/6KVIDEOS"]?></h2>
            <br>
            <p class="card-text text-md-start text-muted"  data-aos="fade-down" data-aos-duration="2600"><?= $lang["par4k5k6kvideo"]?></p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card border-light mb-3" data-aos="fade-down" data-aos-duration="2000" >
          <div class="card-body">
            <h2 class="card-title text-center shadow-lg p-3 mb-5 bg-body rounded"  data-aos="fade-down-left" data-aos-duration="2600"> <?= $lang["PROJET"]?> </h2>
            <br>
            <p class="card-text text-md-start text-muted" data-aos="fade-left" data-aos-duration="2000"><?= $lang["parprojet"]?></p>
          </div>
        </div>
      </div>

    </div>
    </div>
  </div>
  
<br><br><br><br>




     

<div class="notreexpertise">

<div data-aos="fade-up" data-aos-duration="1700">
<div class="contenu">
  <div class="container">
    <div class="row">
      <div class="col">
        <br><br>
      <h2 class="text-light"><?= $lang["topservices"]?></h2>
      <br> <br>

        <p class="text-left"><?= $lang["partopservices"]?>
</p>
      <br> <br>
      </div>
  
    </div>
  </div>
  
<div class="container">
  <div class="row row-cols-1 row-cols-lg-4 g-5">
  <div class="col">
  <div class="card shadow p-3 mb-5 bg-blue rounded" data-aos="fade-down" data-aos-duration="2000" >
  <img src="<?php echo $images?>agras-eight.jpg" class="card-img-top" alt="...">
  <div class="card-body">
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
  <div class="card shadow p-3 mb-5 bg-body rounded"  data-aos="fade-down" data-aos-duration="2100" >
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
  <div class="card shadow p-3 mb-5 bg-body rounded"  data-aos="fade-down" data-aos-duration="2200" >
  <img src="<?php echo $images?>thermique-1-270x361.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">
      <ul class="a">
        <li><?= $lang["Installationsindustriellespétrolières"];?></li>
        <li><?= $lang["Parcéoliennespanneauxphotovoltaïques."];?></li>
        <li><?= $lang["InstallationtoursélectriquesetTélécoms"];?></li>
        <li><?= $lang["Structureettravauxsousmarins"];?>
</li>
      </ul>
    </p>
  </div>
</div>
  </div>  

  <div class="col">
  <div class="card shadow p-3 mb-5 bg-body rounded" data-aos="fade-down" data-aos-duration="2300" >
  <img src="<?php echo $images?>chantier-2-1-270x361.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">      
       <ul class="a">
        <li><?= $lang["Suiviprécis"];?></li>
        <li><?= $lang["Photogrammétriedessol"];?></li>
        <li><?= $lang["Cartographieetgénérationmodèles3D"];?></li>
        <li><?= $lang["Créationdecartesvolumétriques"];?>
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
<br> <br><br>

<div class="contenu "> 
        <div class="container">
          <div class="row">
            <div class="col">
              <br> <br>
              <h2 class="text-center"><?= $lang["notreexpertise"]?> </h2>
              <br>
         <p class="text-md-start shadow p-3 mb-5 bg-light rounded">
         <?= $lang["parnotreexpertise"]?> 
         </p>

       
            </div>
          </div>
        </div>
      </div>
    
    <div class="container">
      <div class="row">
        <div class="col">
       
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="#" class="btn btn-outline-primary  btn-lg me-md-2 shadow p-3 mb-5 bg-blue rounded"><?= $lang["contacteznous"]?> </a>
</div>
        </div>
      </div>
    </div>
    

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
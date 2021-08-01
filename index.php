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
          <h2 class="text-center" data-aos="fade-down-right" data-aos-duration="700">DRONE DOMAINE D'UTILISATION</h2>
          <br>
          <p class="text-md-start" data-aos="fade-down-left" data-aos-duration="900">Le drone est de plus en plus répandu dans les entreprises, pour son apport d’information nouvelle, son autonomie et sa rapidité.
            L’utilisation d’un drone ne va pas tarder à bouleverser de nombreux domaines</p>
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
            <h5 class="card-title">Dans la logistique</h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow p-3 mb-5 bg-body rounded" data-aos="fade-down" data-aos-duration="1400">
          <img src="<?php echo $images; ?>vue-aerienne-agriculture.jpg" class="card-img-top" alt="...">
          <div class="card-body ">
            <h5 class="card-title">Dans L'Agriculture</h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow p-3 mb-5 bg-body rounded" data-aos="fade-down-right" data-aos-duration="1600">
          <img src="<?php echo $images; ?>drone-controle.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Dans la sécurité</h5>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card shadow p-3 mb-5 bg-body rounded" data-aos="fade-down-left" data-aos-duration="1800">
          <img src="<?php echo $images; ?>vue-aerienne-satellite-drone.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Pour l’aménagement du territoire</h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow p-3 mb-5 bg-body rounded" data-aos="fade-down" data-aos-duration="2000">
          <img src="<?php echo $images; ?>drone-camera.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Le drone d’inspection</h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow p-3 mb-5 bg-body rounded" data-aos="fade-down-left" data-aos-duration="2200">
          <img src="<?php echo $images; ?>drone-vue-aerienne-port.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"> les métiers de l’audiovisuel</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br> <br>
  <div class="container">
    <div class="row">
     
        <div class="contenu">
          <h2 class="text-center" data-aos="fade-left" data-aos-duration="1000">DRONE AVANTAGES & SOLUTIONS PERSONNALISÉES</h2>
          <br>
          <p class="text-md-start" data-aos="fade-left" data-aos-duration="1000">Les grandes industries, les exploitations agricoles, les compagnies d’assurance, les promoteurs BTP, les autres domaines et bien plus encore nous font confiance pour fournir les aperçus globaux et les données tangibles nécessaires à leurs activités en utilisant nos drones DJI. De la photographie aérienne de haute précision à la cartographie topographique et altimétrique, en passant par l’inspection vidéo en direct de l’architecture verticale, nous maîtrisons la technologie et l’expertise pour répondre à vos besoins, quel que soit votre secteur d’activité.</p>
          <br><br><br>
          <h2 class="text-left" data-aos="fade-left" data-aos-duration="1050">technologies:</h2>
          <br>
          <p class="text-md-start" data-aos="fade-left" data-aos-duration="1050">Utilisant des systèmes aériens sans pilote de pointe, nous vous fournit des données de précision de la plus haute précisions. Nous nous spécialisons dans une gamme complète d’applications d’inspection par drones, à travers les industries qui profitent le plus de l’observation aérienne, la photographie et la cartographie. Nos capacités comprennent également l’imagerie 3D, la cartographie de la chaleur thermique (thermographie), la topographie LIDAR, l’analyse hyper-spectrale et la vidéo 4K haute résolution. Grâce à cette diversité de services, nous sommes en mesure de répondre aux besoins de collecte de données de tous les projets auxquels nous sommes chargés, à un niveau sans précédent.</p>
          <br><br>
          <h2 class="text-left" data-aos="fade-left" data-aos-duration="1100">sevices:</h2>
          <br>
          <p class="text-md-start" data-aos="fade-left" data-aos-duration="1100">Nous offrons une multitude de service drone dans chaque domaine d’activité. Tous nos pilotes ont leur certification avancée de pilotage et ont d’innombrables heures d’utilisation de drones (RPAS). La sécurité est notre priorité absolue dans toutes nos missions. Nous avons des équipements certifiés et pouvons voler dans l’espace aérien de jour comme de nuit. Nous pouvons fournir à nos clients des délais d’exécution rapides sur la planification des missions et être prêts à voler dans les plus court délai.</p>
          <br><br>
          <h2 class="text-left" data-aos="fade-left" data-aos-duration="1150">formation:</h2>
          <br>
          <p class="text-md-start" data-aos="fade-left" data-aos-duration="1150">Creatix Studio propose aussi à ses clients des formations professionnelles, pointues et intégrales allant de la formation sur le pilotage de drone, passant par la formation sur la gestion des situations d’urgence et risques, à la formation sur les métiers liés au drone (Mapping 3D, Photogrammétrie, Inspection industrielle réseau électrique, panneaux solaire, éolienne et installations industrielles, Sécurité publique, Tournage cinéma par drone,..etc).</p>

      </div>
    </div>
  </div>

  <br> <br>  <br> <br>
  <div class="contenu"  > 
  <div class="container">
    <div class=" row row-cols-1 row-cols-md-3 g-5 ">
   
    
    <div class="col">
       
        <div class="card border-light mb-3" data-aos="fade-down-right" data-aos-duration="1200">
          <div class="card-body">
            <h2 class="card-title text-center shadow-lg p-3 mb-5 bg-body rounded"> la vue aérien</h2>
            <br>
            <p class="card-text text-md-start text-muted">Creatix center vous ouvre de nouvelles perspectives avec ses solutions de drones. Ce n’est que lorsque vous survolez vos projets que vous réalisez à quel point une vue aérienne est incroyablement utile et à grande valeur ajoutée!</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card border-light mb-3" data-aos="fade-down" data-aos-duration="1200" >
          <div class="card-body">
            <h2 class="card-title text-center shadow-lg p-3 mb-5 bg-body rounded">4k/5k/6k videos</h2>
            <br>
            <p class="card-text text-md-start text-muted">Qu’est-ce que 4K? <br> Nous pouvons vous dire avec certitude que ce n’est pas une définition standard, pas une haute définition, <br> et pas une résolution HD!
              <br> 4K est 4 fois HD!</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card border-light mb-3" data-aos="fade-down-left" data-aos-duration="1200" >
          <div class="card-body">
            <h2 class="card-title text-center shadow-lg p-3 mb-5 bg-body rounded"> projet </h2>
            <br>
            <p class="card-text text-md-start text-muted">Chez Creatix Studio, nous sommes extrêmement enthousiastes à l’idée de répondre à vos besoins. Si vous avez choisi une idée pour votre projet (vidéo, photo, AI, Machine-learning,…etc.), nous vous aiderons à le réaliser!</p>
          </div>
        </div>
      </div>

    </div>
    </div>
  </div>
  
<br><br><br><br>




     



<div class="notreservice shadow-lg p-3 mb-5 bg-body rounded"  data-aos="fade-up" data-aos-duration="1700">
<div class="contenu">
  <div class="container">
    <div class="row">
      <div class="col">
        <br><br>
      <h2 class="shadow-lg p-3 mb-5 bg-body rounded">Top services</h2>
      <br> <br>

        <p class="text-left">Nous offrons une multitude de service drone dans chaque domaine d’activité. Tous nos pilotes ont leur certification avancée de pilotage et ont d’innombrables heures d’utilisation de drones (RPAS). La sécurité est notre priorité absolue dans toutes nos missions. Nous avons des équipements certifiés et pouvons voler dans l’espace aérien de jour comme de nuit. Nous pouvons fournir à nos clients des délais d’exécution rapides sur la planification des missions et être prêts à voler dans les plus court délai.
</p>
      <br> <br>
      </div>
  
    </div>
  </div>
  
<div class="container">
  <div class="row row-cols-1 row-cols-lg-4 g-5">
  <div class="col">
  <div class="card shadow p-3 mb-5 bg-body rounded" data-aos="fade-down" data-aos-duration="2000" >
  <img src="<?php echo $images?>agras-eight.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text ">
      <ul class="a">
        <li>Traimtement.</li>
        <li>Semi des graines.</li>
        <li>Pollinisation.</li>
        <li>Application des fertilisants.
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
        <li>Immobilier commercial.</li>
        <li>Projet résidentiels haut de gamme de luxe.</li>
        <li>Clubs / Hôtel / terrains de golf.</li>
        <li>Écoles / Universités.
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
        <li>Installations industrielles, pétrolières et gazières.</li>
        <li>Parc d’éoliennes et panneaux photovoltaïques.</li>
        <li>Installation tours électriques et Télécoms.</li>
        <li>Structure et travaux sous-marins.
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
        <li>Suivi précis des chantiers de construction.</li>
        <li>Photogrammétrie des sols et modèle orthographique 2D.</li>
        <li>Cartographie et génération des modèles 3D détaillés (Mapping).</li>
        <li>Création de cartes volumétriques des stocks de matériaux pour les sociétés minières.
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

<div class="creatixvideo shadow-lg p-3 mb-5 bg-body rounded">
    <video style="width: 100%;" autoplay muted>
  <source src="<?php echo $video?>creatix.mp4" type="video/mp4">
  </video> 
</div>
<br> <br><br>
<div class="notreexpertise  shadow-lg p-3 mb-5 bg-body rounded">
<div class="contenu "> 
        <div class="container">
          <div class="row">
            <div class="col">
              <br> <br>
              <h1>NOTRE EXPERTISE</h1>
              <br>
         <p class="text-md-start shadow p-3 mb-5 bg-blue rounded">
         Depuis plus de 15 ans, nos clients nous font confiance pour étudier et réaliser ensemble leur projet drone. Nous offrons des drones et des prestations de service drone de haut niveau tant en qualité qu’en professionnalisme avec une expérience confirmée. <br> <br>

Nous offrons une multitude de produit drone et de service drone dans chaque domaine d’activité. Nos drones sont certifiés et tous nos pilotes ont leur certification avancée de pilotage et ont d’innombrables heures d’utilisation de drones (UAV/RPAS). La sécurité est notre priorité absolue dans toutes nos projets et missions. Nous avons des équipements certifiés et pouvons voler dans l’espace aérien de jour comme de nuit. Nous pouvons fournir à nos clients des délais d’exécution rapides sur la planification des missions et être prêts à voler dans les plus court délai. Nos clients nous confient leur projet drone, nous les étudions et les réalisons en garantissant les meilleurs résultats et la meilleure qualité au normes internationales du domaine de l’aviation civile et du domaine des drones.
         </p>

       
            </div>
          </div>
        </div>
      </div>
    
    <div class="container">
      <div class="row">
        <div class="col">
       
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="#" class="btn btn-outline-light  btn-lg me-md-2 shadow p-3 mb-5 bg-blue rounded">contactez nous</a>
</div>
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
      <p class="text-muted">place al hansali imm ben zerwal <br>étage 3 appt 55<br> 24000 El Jadida, Morocco</p>
   
      
      <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d13346.0306305018!2d-8.5035655!3d33.2531996!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0xda91d12ab555fd9%3A0xa61ec1320528fe96!2sCreatix%20School%20Center%2C%20place%20el%20hanssali%2C%20immeuble%20ben%20zeroual%2C%203eme%20etage%2C%20appart%2055%2C%20El%20Jadida%2024000!3m2!1d33.253199599999995!2d-8.503565499999999!5e0!3m2!1sfr!2sma!4v1626783989520!5m2!1sfr!2sma" width="100%" height="500" style="border:0;" allowfullscreen loading="lazy"></iframe>
    </div>
  </div>
</div>

</div>


</div>



<?php

include("includes/templates/footer.php");
?>
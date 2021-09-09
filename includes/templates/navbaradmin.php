
<?php
$languages="?lang=fr";

?>

<!-- pre loader_bg-->

<div class="loader_bg">
    <div class="loader"></div>
</div>

<nav class="navbar navbar-light bg-white text-end">

  <p class="text-center">
  
<?= $lang["lang"]; ?> - 
<a name="langs" href="?lang=fr"  > <?= $lang["fr"] ?> / </a>
<a name="langs" href="?lang=an"  >  <?= $lang["an"] ?>  </a>

</p>

<div class="socialmedia">
<ul>
  <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
  
  <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
  <li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
  <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
</ul>
</div>


</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-white ">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto" >
        <li class="nav-item">
          <a class="btn btn-outline-dark" aria-current="page" href="index.php?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>"><i class="fas fa-home"></i> <?= $lang["acceuil"] ?></a>
        </li>
     
      </ul>  
      <ul class="navbar-nav mx-auto" >
      <li class="nav-item">
      <a class=" btn btn-outline-primary" href="indexAd.php?compteadmin=true&lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>"><i class="fas fa-user-cog"></i>&nbsp;Compte Admin</a>
          
      </li> 
     
  
      </ul>  
      <ul class="navbar-nav mx-auto" >
      <li class="nav-item">
          <a  class="btn btn-outline-primary" href="indexAd.php?listeclient=true&lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>"  ><i class="fas fa-user-cog"></i>&nbsp; Client</a>
          
      </li> 
     
  
      </ul>  

      <ul class="navbar-nav mx-auto" >
      <li class="nav-item">
          <a  class=" btn btn-outline-primary" href="indexAd.php?servicegestion=true&lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>" ><i class="fas fa-user-cog"></i>&nbsp; services</a>
          
      </li> 
     
  
      </ul>  

      <ul class="navbar-nav mx-auto" >
      <li class="nav-item">
      <a   class=" btn btn-outline-primary" href="indexAd.php?serviceformation=true&lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>"  > <i class="fas fa-user-cog"></i>&nbsp;   Formation</a>
          
      </li>
      

      </ul> 
     
  
      <button class="btn btn-outline-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"> <i class="far fa-bookmark"></i>&nbsp;&nbsp;  Commandes/Messages</button>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">

    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <br><br><br>  <br><br><br>  <br><br><br>
  <h3 class="text-left">Les Commandes</h3>
  <br><br> 
  <ul class="navbar-nav mx-auto" >
      <li class="nav-item">
      <a   class=" btn btn-outline-danger"  href="?listecommnadeclient=true"  >&nbsp;&nbsp;  Services</a>
          
      </li>
      

      </ul> 
      <br><br>
  <ul class="navbar-nav mx-auto" >
      <li class="nav-item">
      <a   class=" btn btn-outline-danger" href="indexAd.php?listecommnadeclientFormation=true"  >&nbsp;  Formations</a>
          
      </li>
      

      </ul> 
      <br>

      <br><br>
      <h3 class="text-left">Les Messages des Clients</h3>

      <br><br>
      <ul class="navbar-nav mx-auto" >
      <li class="nav-item">
      <a   class=" btn btn-outline-danger" href="indexAd.php?messagecl=true"  >&nbsp;   Messages Client</a>
          
      </li>
      

      </ul> 


  </div>
</div>


 



      <ul class="navbar-nav mx-auto" >
      <li class="nav-item">
          <a  class=" btn btn-outline-danger" href="logout.php?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>"><i class="fas fa-sign-out-alt"></i>&nbsp;<?=  $lang["sedeconnecter"]; ?></a>
          
      </li>

      </ul>

      


   

    </div>
  </div>
</nav> 







<!-- back to top-->
<a href="#" class="to-top">
<i class="fas fa-angle-double-up"></i>
</a>
 

<!-- folow cureseur desgin-->


<div class="curseur"></div>
<div class="curseur2"></div>
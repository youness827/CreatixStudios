
<?php
$languages="?lang=fr";

?>

<!-- pre loader_bg-->

<div class="loader_bg">
    <div class="loader"></div>
</div>

<nav class="navbar navbar-light bg-light text-end">

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
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto" >
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>"> <?= $lang["acceuil"] ?></a>
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
      
      <ul class="navbar-nav mx-auto" >
      <li class="nav-item">
          <a  class=" btn btn-outline-primary" href="indexAd.php?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>"><i class="fas fa-user-cog"></i>&nbsp;  Commande</a>
          
      </li>
      
  
      </ul> 
      
     
      
   

 



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
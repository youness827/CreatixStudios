
<?php
$languages="?lang=fr";

?>

<!-- pre loader_bg-->
<div class="loader_bg">
    <div class="loader"></div>
</div>

<nav class="navbar navbar-light bg-light">
 
    <p class="text-center">

            <?= $lang["lang"]; ?> - 



<a name="langs" href="?lang=fr"  > <?= $lang["fr"] ?> / </a>
<a name="langs" href="?lang=an"  >  <?= $lang["an"] ?>  </a>
   

</p>
  
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light  ">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#">Creatix Center School</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto" >
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>"> <?= $lang["acceuil"] ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service.php?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>"> <?= $lang["nosservice"] ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>"> <?= $lang["nofromation"] ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>"> <?= $lang["proposdenous"] ?></a>
        </li> 
       
      
         
        </li>
       
      </ul> 
      <ul class="navbar-nav mx-auto" >
      <li class="nav-item">
          <a class="nav-link" href="#?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>" id="contacter" > <?= $lang["nouscontacter"] ?></a>
          
      </li> 
      <li class="nav-item">
          <a  class="nav-link " href="tel:0656253574" id="contacter" > <i class="fas fa-phone-volume"></i>  <?= $lang["télephoner"] ?></a>
          
      </li> 
  
      </ul>  

   <!-- if is set admin session-->
   <?php
        // if is set admin session
        if(isset($_SESSION["admin"])){
        
  ?>
      <ul class="navbar-nav mx-auto" >
      <li class="nav-item">
          <a  class=" btn btn-outline-primary" href="dashbordAdmin/indexAd.php?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>"><i class="fas fa-user-cog"></i>&nbsp;Dashboard Admin</a>
          
      </li>
      
      </ul> 
   <?php   }else  if(isset($_SESSION["USER"])){?>
    <ul class="navbar-nav mx-auto" >
      <li class="nav-item">
          <a  class=" btn btn-outline-primary" href="#?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>"><i class="fas fa-user-cog"></i>&nbsp;<?php echo $_SESSION["USER"];?></a>
          
      </li>
      
      </ul> 
  <?php } ?>


<?php  // if session exist  se deconnecter enabled
      if(isset($_SESSION["admin"]) || isset($_SESSION["USER"])){
        ?>
    

      <ul class="navbar-nav mx-auto" >
      <li class="nav-item">
          <a  class=" btn btn-outline-danger" href="logout.php"  ><i class="fas fa-sign-out-alt"></i>&nbsp; Se deconnecter</a>
          
      </li>

      </ul>
      <?php }else if(!(isset($_SESSION["admin"]) || isset($_SESSION["USER"])))
      {
        ?>
        <ul class="navbar-nav mx-auto" >
        <li class="nav-item">
            <a  class=" btn btn-outline-primary" href="login.php?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>"  ><i class="fas fa-user-plus"></i> <?= $lang["seconnecter"] ?></a>
            
        </li>
  
        </ul>
      
  <?php    }?>

   

    </div>
  </div>
</nav> 



<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Navbar</span>
  </div>
</nav>




<!-- back to top-->
<a href="#" class="to-top">
<i class="fas fa-angle-double-up"></i>
</a>
 

<!-- folow cureseur desgin-->


<div class="curseur"></div>
<div class="curseur2"></div>
<?php
$languages = "?lang=fr";

?>

<!-- pre loader_bg-->

<div class="loader_bg">
  <div class="loader"></div>
</div>

<nav class="navbar navbar-wihte bg-white text-end ">

  <p class="text-center languagess">

    <span class="fw-bolder"> <?= $lang["lang"]; ?>
      --</span> &nbsp;
    <img src="https://img.icons8.com/color/30/000000/france.png" /> <a class="fw-bolder" name="langs" href="?lang=fr"> <?= $lang["fr"] ?> </a>&nbsp;/&nbsp;
    <img src="https://img.icons8.com/color/30/000000/england.png" /> <a class="fw-bolder" name="langs" href="?lang=an"> <?= $lang["an"] ?> </a>

  </p>


  <div class="socialmedia">
    <ul>
      <li>
        <!-- Facebook -->
        <a class="btn btn-primary" style="background-color: #3b5998;" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
      </li>

      <li><a class="btn btn-primary" style="background-color: #55acee;" href="#!" role="button"><i class="fab fa-twitter"></i></a></li>
      <li>
        <!-- Google -->
        <a class="btn btn-primary" style="background-color: #dd4b39;" href="#!" role="button"><i class="fab fa-google"></i></a>
      </li>
      <li><a class="btn btn-primary" style="background-color: #0082ca;" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a></li>

      <li><a class="btn btn-primary" style="background-color: #25d366;" href="#!" role="button"><i class="fab fa-whatsapp"></i></a></li>
    </ul>
  </div>


</nav>
<nav class="navbar navbar-expand-xxl navbar-light bg-white ">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item" data-aos="zoom-in" data-aos-duration="2000">
          <a class="nav-link" aria-current="page" href="index.php?lang=<?php if (isset($_GET["lang"])) echo $_GET["lang"]; ?>"> <?= $lang["acceuil"] ?></a>
        </li>
        <li class="nav-item" data-aos="zoom-in" data-aos-duration="2000">
          <a class="nav-link" href="service.php?lang=<?php if (isset($_GET["lang"])) echo $_GET["lang"]; ?>"> <?= $lang["nosservice"] ?></a>
        </li>
        <li class="nav-item" data-aos="zoom-in" data-aos-duration="2000">
          <a class="nav-link" href="#?lang=<?php if (isset($_GET["lang"])) echo $_GET["lang"]; ?>"> <?= $lang["nofromation"] ?></a>
        </li>
        <li class="nav-item" data-aos="zoom-in" data-aos-duration="2000">
          <a class="nav-link" href="proposdenous.php?lang=<?php if (isset($_GET["lang"])) echo $_GET["lang"]; ?>"> <?= $lang["proposdenous"] ?></a>
        </li>



      </ul>
      <ul class="navbar-nav mx-auto">
        <li class="nav-item" data-aos="zoom-in" data-aos-duration="2000">
          <a class="nav-link" href="contactus.php?lang=<?php if (isset($_GET["lang"])) echo $_GET["lang"]; ?>" id="contacter"> <?= $lang["nouscontacter"] ?></a>

        </li>
        <li class="nav-item" data-aos="zoom-in" data-aos-duration="2000">
          <a class="nav-link " href="tel:+212656253574" id="contacter"> <i class="fas fa-phone-volume"></i> <?= $lang["télephoner"] ?></a>

        </li>

      </ul>

      <!-- if is set admin session-->
      <?php
      // if is set admin session
      if (isset($_SESSION["admin"])) {

      ?>
        <ul class="navbar-nav mx-auto">
          <li class="nav-item" data-aos="zoom-in" data-aos-duration="2000">
            <a class=" btn btn-outline-primary pulse-danger " href="indexAd.php?compteadmin=true&lang=<?php if (isset($_GET["lang"])) echo $_GET["lang"]; ?>"><i class="fas fa-user-cog"></i>&nbsp;Dashboard Admin</a>

          </li>


        </ul>



      <?php   } else  if (isset($_SESSION["USER"])) { ?>
        <ul class="navbar-nav mx-auto">
          <li class="nav-item" data-aos="zoom-in" data-aos-duration="2000">
            <h5 class="text-balck"><i class="fas fa-user"></i>&nbsp;<?php echo $_SESSION["USER"]; ?></h5>

          </li>

        </ul>
      <?php } ?>


      <?php  // if session exist  se deconnecter enabled
      if (isset($_SESSION["admin"]) || isset($_SESSION["USER"])) {
      ?>


        <ul class="navbar-nav mx-auto">
          <li class="nav-item" data-aos="zoom-in" data-aos-duration="2000">
            <a class=" btn btn-outline-danger" href="logout.php?lang=<?php if (isset($_GET["lang"])) echo $_GET["lang"]; ?>"><i class="fas fa-sign-out-alt"></i>&nbsp;<?= $lang["sedeconnecter"]; ?></a>

          </li>

        </ul>
      <?php } else if (!(isset($_SESSION["admin"]) || isset($_SESSION["USER"]))) {
      ?>
        <ul class="navbar-nav mx-auto">
          <li class="nav-item" data-aos="zoom-in" data-aos-duration="2000">

            <a class=" btn btn-outline-primary" href="login.php?lang=<?php if (isset($_GET["lang"])) echo $_GET["lang"]; ?>"> <i class="fas fa-user-plus"></i> <?= $lang["seconnecter"]; ?></a>

          </li>

        </ul>

      <?php   } ?>



    </div>
  </div>
</nav>



<nav class="navbar navbar-light bg-white ">

</nav>

<!-- back to top-->
<a href="#" class="to-top">
  <i class="fas fa-angle-double-up"></i>
</a>


<!-- folow cureseur desgin-->


<div class="curseur"></div>
<div class="curseur2"></div>
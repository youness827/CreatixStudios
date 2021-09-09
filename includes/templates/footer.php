

<section class=""> 
  
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #03284cd9 ">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <?php
$languages = "?lang=fr";

?>




<nav class="navbar navbar-wihte bg-blue text-end ">

  <p class="text-center">

  <span class="fw-bolder"> <?= $lang["lang"]; ?>
--</span> &nbsp;
    <img src="https://img.icons8.com/color/30/000000/france.png"/>  <a class="fw-bolder" name="langs" href="?lang=fr"> <?= $lang["fr"] ?> </a>&nbsp;/&nbsp;
    <img src="https://img.icons8.com/color/30/000000/england.png"/> <a class="fw-bolder" name="langs" href="?lang=an"> <?= $lang["an"] ?> </a>

  </p>



</nav>
<nav class="navbar navbar-expand-lg navbar-body bg-blue">
  <div class="container-fluid ">
  
 
      <ul class="navbar-nav ml-auto">
        <li class="nav-item" >
          <a class="nav-link text-white" aria-current="page" href="index.php?lang=<?php if (isset($_GET["lang"])) echo $_GET["lang"]; ?>"> <?= $lang["acceuil"] ?></a>
        </li>
        <li class="nav-item" >
          <a class="nav-link text-white" href="service.php?lang=<?php if (isset($_GET["lang"])) echo $_GET["lang"]; ?>"> <?= $lang["nosservice"] ?></a>
        </li>
        <li class="nav-item" >
          <a class="nav-link text-white" href="#?lang=<?php if (isset($_GET["lang"])) echo $_GET["lang"]; ?>"> <?= $lang["nofromation"] ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="proposdenous.php?lang=<?php if (isset($_GET["lang"])) echo $_GET["lang"]; ?>"> <?= $lang["proposdenous"] ?></a>
        </li>


        <li class="nav-item" >
          <a class="nav-link text-white" href="contactus.php?lang=<?php if (isset($_GET["lang"])) echo $_GET["lang"]; ?>" id="contacter"> <?= $lang["nouscontacter"] ?></a>

        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="tel:+212656253574" id="contacter"> <i class="fas fa-phone-volume"></i> <?= $lang["télephoner"] ?></a>

        </li>

      </ul>
   


  



  </div>
</nav>



<nav class="navbar navbar-light bg-blue ">
 
</nav>


 <div class="container">
   <div class="row">
     <div class="col">
<!-- Facebook -->
<a class="btn btn-primary" style="background-color: #3b5998;" href="#!" role="button"
  ><i class="fab fa-facebook-f"></i
></a>
&nbsp;&nbsp;&nbsp;
<!-- Twitter -->
<a class="btn btn-primary" style="background-color: #55acee;" href="#!" role="button"
  ><i class="fab fa-twitter"></i
></a>
&nbsp;&nbsp;&nbsp;

<!-- Google -->
<a class="btn btn-primary" style="background-color: #dd4b39;" href="#!" role="button"
  ><i class="fab fa-google"></i
></a>

&nbsp;&nbsp;&nbsp;

<!-- Linkedin -->
<a class="btn btn-primary" style="background-color: #0082ca;" href="#!" role="button"
  ><i class="fab fa-linkedin-in"></i
></a>
&nbsp;&nbsp;&nbsp;

<!-- Whatsapp -->
<a class="btn btn-primary" style="background-color: #25d366;" href="#!" role="button"
  ><i class="fab fa-whatsapp"></i
></a>
&nbsp;&nbsp;&nbsp;

     </div>
   </div>
 </div>


      <!-- Section: CTA -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="">CreatixStudio</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section> 

<script src="<?php echo $js;?>jquery.min.js"></script>
<script src="<?php echo $js;?>bootstrap.min.js"></script> 

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/28087c3627.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

 <script>
            AOS.init();
    </script> 
  

<script src="<?php echo $js;?>myjs.js"></script> 
<script src="<?php echo $js;?>myloder.js"></script> 
<!-- libraries sweet -->
<script src="<?php echo $js;?>unpkg.js"></script> 
<script src="<?php echo $js;?>jsdliver.js"></script> 





</body>

</html>
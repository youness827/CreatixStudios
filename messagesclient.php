<?php

$msgs = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {


}
?>
<br> <br> <br> <br>

<?php if (isset($_GET["messagecl"]) && $_GET["messagecl"] == "true") {  ?>


    <div class="container">
        <div class="row">
            <div class="col">
                <div class="loginForm shadow-lg p-3 mb-5 bg-body rounded ">
                    <div class="card mb-3" style="width:100%">
                        <div class="row g-0">

                            <div class="col-md-12">
                                <div class="card-body">
                                    <h3>Liste des messages client </h3>
                                    <br> <br><br>
                                    <div class="d-grid gap-2 d-xl-flex justify-content-xl-end">

                                    <form action="" method="POST" class="d-flex">
        <input class="form-control me-2" type="date" placeholder="Search" name="datessr" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" name="searching"> <i class="fas fa-search"></i></button>
      </form>

</div>
<?php if(isset($_POST["searching"]) && isset($_POST["datessr"])){
?>
 <br> <br>
                                    <div class="table-responsive-xl">

                                        <table class="table table-bordered  table-hover" style="width: 100%;">

                                            <thead class="table-dark">
                                                <tr>
                                                    <th scope="col">ID Client</th>
                                                    <th scope="col">Nom Complet</th>
                                                    <th scope="col">Adress</th>
                                                    <th scope="col">Tél</th>
                                                    <th scope="col">Email</th>
                                                  
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Date message</th>
                                                 

                                                </tr>
                                            </thead>
                                            <tbody class="">
                                                <?php
                                             
                                                $stmt = $con->prepare("SELECT *from  meassagrie m , client cl ,compte co
                                                where  cl.ID_CLIENT = co.ID_CLIENT
                                                AND m.ID_CLIENT =cl.ID_CLIENT 
                                                 AND  m.datemsg >= ?;
                                         
                                          ");
                          
                                  $stmt->execute(array( $_POST["datessr"]));
                                 
                                                $rows = $stmt->fetchAll();
                                                $counts = $stmt->rowCount();
                                                if ($counts > 0) {
                                                  foreach($rows as $row){

                                                 
                                                ?>

                                                        <tr>
                                                        <th><?= $row["ID_CLIENT"]; ?></th>
                                                            <th><?= $row["NOM"] . " " . $row["PRENOM"]; ?></th>
                                                            <th><?= $row["ADRESS"]; ?></th>
                                                            <th><?= $row["TEL"]; ?></th>
                                                            <th><?= $row["EMAIL"] ?>;</th>
                                                            <th><?= $row["DESCRIPTION"]; ?></th>
                                                            <th><?= date('d-m-Y', strtotime($row["datemsg"])); 
                                                  ?>
                                                        </th>




                                                        </tr>

                                                <?php
                                                     }
                                                }

                                                ?>


                                            </tbody>
                                        </table>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                                            <p class="text-muted" style="font-weight:600"> nombres des messages &nbsp;&nbsp; <?= $counts ?></p>

                                        </div>

                                    </div>
                                    <br>

<?php }else{?>
                          
        
                                    <br> <br>
                                    <div class="table-responsive-xl">

                                        <table class="table table-bordered  table-hover" style="width: 100%;">

                                        <thead class="table-dark">
                                        <tr>
                                                    <th scope="col">ID Client</th>
                                                    <th scope="col">Nom Complet</th>
                                                    <th scope="col">Adress</th>
                                                    <th scope="col">Tél</th>
                                                    <th scope="col">Email</th>
                                                  
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Date message</th>
                                                 

                                                </tr>
                                            </thead>
                                            <tbody class="">
                                                <?php
                                         $stmt = $con->prepare("SELECT *from  meassagrie m , client cl ,compte co
                                         where  cl.ID_CLIENT = co.ID_CLIENT
                                         AND m.ID_CLIENT =cl.ID_CLIENT 
                                          order By  m.datemsg asc ; ");
                                         
                                          
                                                $stmt->execute(array());
                                                $rows = $stmt->fetchAll();
                                                $counts = $stmt->rowCount();
                                                if ($counts > 0) {


                                                    foreach ($rows as $row) {
                                                ?>
  <tr>
                                                        <th><?= $row["ID_CLIENT"]; ?></th>
                                                            <th><?= $row["NOM"] . " " . $row["PRENOM"]; ?></th>
                                                            <th><?= $row["ADRESS"]; ?></th>
                                                            <th><?= $row["TEL"]; ?></th>
                                                            <th><?= $row["EMAIL"] ?>;</th>
                                                            <th><?= $row["DESCRIPTION"]; ?></th>
                                                            <th><?= date('d-m-Y', strtotime($row["datemsg"])); 
                                                  ?>
                                                        </th>




                                                        </tr>
                                                <?php
                                                    }
                                                }

                                                ?>


                                            </tbody>
                                        </table>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                                            <p class="text-muted" style="font-weight:600"> nombres des messages &nbsp;&nbsp; <?= $counts ?></p>

                                        </div>

                                    </div>
                                    <br>


<?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>
<br> <br>
<br> <br><br>
<br> <br><br>
<br> <br>
<br> <br><br><br> <br>
<br> <br><br>
<br> <br><br>

<?php
include("includes/templates/ff.php");

?>

<script>
    $(document).ready(function() {

        $('.annuler').on('click', function() {
            $('#exampleModalCenter').modal('hide');
        })


        $('.deletebtn').on('click', function() {

            $('#exampleModalCenter').modal('show');


            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            $('#idsupprimerss').val(data[0]);
        });
    });
</script>




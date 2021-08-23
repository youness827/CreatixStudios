<?php

$msgs="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
 
 
    if(isset($_POST["supprimer"])){


    // supprimer
   
       
    $stmt=$con->prepare("DELETE  commande , detailservice
    from commande
    inner join detailservice on commande.ID_COMMANDE=detailservice.ID_COMMANDE
     where commande.ID_CLIENT = ?");
    $stmt->execute(array($_POST['suppressionid']));
 
    $stmt=$con->prepare("DELETE  commande , detailformation
    from commande
    inner join detailformation on commande.ID_COMMANDE=detailformation.ID_COMMANDE
     where commande.ID_CLIENT = ?");
    $stmt->execute(array($_POST['suppressionid']));

    $count11=$stmt->rowCount();
    $stmt=$con->prepare("DELETE from compte 
            where ID_CLIENT = ?" );
        $stmt->execute(array($_POST['suppressionid']));
        $count1=$stmt->rowCount();

        $stmt=$con->prepare("DELETE from client 
        where ID_CLIENT = ?" );
        $stmt->execute(array($_POST['suppressionid']));
        $count2=$stmt->rowCount();


       


    if( $count1>0 && $count2>0 ){
        ?>
        <script type="module">

swal({
            title:"suppression Client",
            text: "fait avec succès",
            icon: "success",
            });                   
         </script>
  
       

        <?php  }else{
         ?>
         <script type="module">
             swal({
            title:"suppression Client",
            text: "fait avec échec",
            icon: "error",
            });                   
          </script>

        

         <?php  }





            




}
              







}
?>
<br> <br> <br> <br>

<?php  if(isset($_GET["listeclient"]) && $_GET["listeclient"]=="true" ){  ?> 


    
<div class="container">
    <div class="row">
        <div class="col">
            <div class="loginForm shadow-lg p-3 mb-5 bg-body rounded ">
                <div class="card mb-3" style="width:100%">
                    <div class="row g-0">
                       
                        <div class="col-md-12">
                            <div class="card-body">
                            <h3>Liste des Clients</h3>
                            <br> 
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <a  class="btn btn-outline-primary btnbtn"  href="indexAd.php?clientfidéle=true&lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>" > <i class="fas fa-users"></i>&nbsp;&nbsp;Les client fidéle</a> 

                                   
                                    

</div>
                            <br> 
                            <div class="table-responsive-md">

                                <table class="table table-bordered  table-hover" style="width: 100%;">
                                       
                                        <thead class="table-dark">
                                            <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">NOM</th>
                                            <th scope="col">PRENOM</th>
                                            <th scope="col">ADRESSE</th>
                                            <th scope="col">TEL</th>
                                           <th scope="col">EMAIL</th>
                                           
                                            <th scope="col">Opération</th>
                                        </tr>
                                        </thead>
                                        <tbody class="">
                                          <?php 
                                          $stmt=$con->prepare("SELECT *from compte co , client cl 
                                          where co.id_client=cl.id_client and statut = ?");
                                          $stmt->execute(array(1));
                                           $rows=$stmt->fetchAll();
                                           $counts=$stmt->rowCount();
                                           if($counts>0){
                                                foreach($rows as $row){
                                                    ?>

                                            <tr>
                                            <td><?= $row["ID_CLIENT"];?></td> 
                                           <td><?= $row["NOM"];?></td> 
                                            <th><?= $row["PRENOM"];?></th>
                                            <td><?= $row["ADRESS"];?></td>
                                            <th><?= $row["TEL"];?></th>
                                            <td><?= $row["EMAIL"];?></td>

                                            
                                            <td> 
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                     
                                            <a class="btn btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Commande client"  href="?commandeclient=true&idclient=<?= urlencode(base64_encode($row["ID_CLIENT"]))?>"><i class="fas fa-clipboard-list"></i></a> 

                                                &nbsp;&nbsp;
                                        <button type="button" class="btn btn-outline-danger deletebtn">
                                        <i class="fas fa-trash-alt"></i>
                                        </button>
                                        </div>   
                                        </td>
                                            </tr>

                                                    <?php
                                                }
                                                    



                                           }
                                          
                                          ?>
                                            
                                         
                                        </tbody>
                                        </table> 
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  
                                        <p class="text-muted" style="font-weight:600"> nombres des client  &nbsp;&nbsp; <?= $counts?></p>

                                    </div> 
                                       
                            </div>
                                <br>
                               
                             

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php


} if( isset($_GET["clientfidéle"]) && $_GET["clientfidéle"]=="true" ){
    ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="loginForm shadow-lg p-3 mb-5 bg-body rounded ">
                <div class="card mb-3" style="width:100%">
                    <div class="row g-0">
                       
                        <div class="col-md-12">
                            <div class="card-body">
                            <h3>Liste des Clients</h3>
                            <br> 
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <a  class="btn btn-outline-primary btnbtn"  href="indexAd.php?clientfidéle=true&lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>" > <i class="fas fa-users"></i>&nbsp;&nbsp;Les client fidéle</a> 

                                   
                                    

</div>
                            <br> 
                            <div class="table-responsive-md">

                                <table class="table table-bordered  table-hover" style="width: 100%;">
                                       
                                        <thead class="table-dark">
                                            <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">NOM</th>
                                            <th scope="col">PRENOM</th>
                                            <th scope="col">ADRESSE</th>
                                            <th scope="col">TEL</th>
                                           <th scope="col">EMAIL</th>
                                           
                                            <th scope="col">Opération</th>
                                        </tr>
                                        </thead>
                                        <tbody class="">
                                          <?php 
                                          $stmt=$con->prepare("SELECT *from compte co , client cl 
                                          where co.id_client=cl.id_client and statut = ?");
                                          $stmt->execute(array(1));
                                           $rows=$stmt->fetchAll();
                                           $counts=$stmt->rowCount();
                                           if($counts>0){
                                                foreach($rows as $row){
                                                    ?>

                                            <tr>
                                            <td><?= $row["ID_CLIENT"];?></td> 
                                           <td><?= $row["NOM"];?></td> 
                                            <th><?= $row["PRENOM"];?></th>
                                            <td><?= $row["ADRESS"];?></td>
                                            <th><?= $row["TEL"];?></th>
                                            <td><?= $row["EMAIL"];?></td>

                                            
                                            <td> 
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                     
                                  
                                                &nbsp;&nbsp;
                                        <button type="button" class="btn btn-outline-danger deletebtn">
                                        <i class="fas fa-trash-alt"></i>
                                        </button>
                                        </div>   
                                        </td>
                                            </tr>

                                                    <?php
                                                }
                                                    



                                           }
                                          
                                          ?>
                                            
                                         
                                        </tbody>
                                        </table> 
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <p class="text-muted" style="font-weight:600"> nombres des client fidéle  &nbsp;&nbsp; <?= $counts?></p>

                                    </div> 
                                       
                            </div>
                                <br>
                               
                             

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php } ?>
  
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">voulez vous le supprimer !!!</h5>
     
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <form action="#" method="post">
         <input type="hidden" name="suppressionid" id="idsupprimerss"> 
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary annuler" data-dismiss="modal">Annuler</button>
     <input type="submit" class="btn btn-outline-success"  name="supprimer"value="Confirmer">
      </div>
     </form>
    </div>
  </div>
</div>
<?php 
include("includes/templates/ff.php");

?>

<script>

$(document).ready(function(){

        $('.annuler').on('click',function(){
            $('#exampleModalCenter').modal('hide');
        })


    $('.deletebtn').on('click',function(){

     $('#exampleModalCenter').modal('show');
     

        $tr=$(this).closest('tr');
        var data = $tr.children("td").map(function(){
                        return $(this).text();
        }).get();

        $('#idsupprimerss').val(data[0]);
    });
});

</script>

     

<br> <br>
<br> <br><br>
<br> <br><br>

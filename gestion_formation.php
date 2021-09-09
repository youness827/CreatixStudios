<?php

$msgs="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
if(isset($_POST["ajouter"])){
$id_creatix=1;
$typeforFR=htmlspecialchars(trim( $_POST["typeforFR"]));
$descriptFR=htmlspecialchars(trim( $_POST["descriptFR"]));;
$typeforAN=htmlspecialchars(trim( $_POST["typeforAN"]));
$descriptAN =htmlspecialchars(trim( $_POST["descriptAN"]));

$stmt=$con->prepare("INSERT into  formation 
(ID_CREATIX,TYPE,DESCRIPTION,type_an,descran) values
(?,?,?,?,?);
   ");
$stmt->execute(array($id_creatix,$typeforFR,$descriptFR,$typeforAN,$descriptAN));
$count = $stmt->rowCount();
if($count>0){
?>
     <script type="module">
                 swal({
                 title:"formation ",
                 text: "l'ajoute fait avec succès",
                 icon: "success",
                 });                
              </script>
<?php


}else{
    ?>
    <script type="module">
                swal({
                title:"Service",
                text: "l'ajoute fait avec échec",
                icon: "error",
                });                
             </script>
<?php
}


}else if(isset($_POST["modifier"])){
    $id_formation=base64_decode($_GET["idformation"]);
    $typeforFRmod = htmlspecialchars(trim($_POST["typeforFRmod"])); 
    $descriptFRmod = htmlspecialchars(trim($_POST["descriptFRmod"]));
    $typeforANmod = htmlspecialchars(trim($_POST["typeforANmod"])); 
    $descriptANmod = htmlspecialchars(trim($_POST["descriptANmod"])); 

      

    // Update
         
        

    $stmt=$con->prepare("UPDATE formation 
    set  TYPE = ? , DESCRIPTION = ?,type_an=?,descran=?
    where ID_FORMATION = ?" );
    $stmt->execute(array($typeforFRmod,$descriptFRmod,$typeforANmod,$descriptANmod,$id_formation));
    $count1=$stmt->rowCount();


    if($count1>0){
        ?> 
             
        <script type="module">

          swal({
            title:"Modification Formation",
            text: "fait avec succès",
            icon: "success",
            });                
         </script>
 
     

        <?php  }else{
         ?>
         <script type="module">
             swal({
               title:" Modification Formation",
                text: "fait avec échec",
                icon: "error",
             });                
          </script>

        

         <?php  }
}else if(isset($_POST["supprimer"])){


    // supprimer
   

 


       

    $stmt=$con->prepare("DELETE from formation 
    where id_formation = ?" );
    $stmt->execute(array($_POST['suppressionid']));
    $count=$stmt->rowCount();

    if( $count>0){
        ?>
        <script type="module">

swal({
            title:"suppression Formation",
            text: "fait avec succès",
            icon: "success",
            });                   
         </script>
  
       

        <?php  }else{
         ?>
         <script type="module">
             swal({
            title:"suppression Formation",
            text: "fait avec échec",
            icon: "error",
            });                   
          </script>

        

         <?php  }





            
























}
              


















}
?>
<br> <br> <br> <br>

<?php if(!isset($_GET["listeformation"]) && !isset($_GET["editformation"]) ){
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="loginForm shadow-lg p-3 mb-5 bg-body rounded ">
                <div class="card mb-3" style="width:100%">
                    <div class="row g-0">
                        <div class="col-lg-7"> 
                            <br><br>
                            <img class="myimages" src="<?php echo $images ?>forma.png">

                        </div>
                        <div class="col-lg-5">
                            <div class="card-body">
                                <div class="contenu">
                                <form action="#" method="post" autocomplete="off" >
                                    <br><br> <br>
                                    <h2 class="text-center ">nouveau formation</h2>
                                    <br>
                                    <h5 class="text-danger text-center"><?php if(isset($msgs)) echo $msgs;?></h5>
                                    <h5 class="text-left  text-muted">en français</h5>
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input autocomplete="off" type="text" class="form-control" required placeholder="Nom ( français )"   name="typeforFR">
                                 
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" required placeholder="Description  ( français )" name="descriptFR" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Description ( français )</label>
                                        </div>
                                        </div>
                                    </div>  
                                    <h5 class="text-left text-muted ">en anglais</h5>
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input autocomplete="off" type="text" class="form-control" required  name="typeforAN" placeholder="Nom ( anglais )"  >
                                     
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here"  requiredid="floatingTextarea2" placeholder="Description ( anglais )"  name="descriptAN"  style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Description ( anglais )</label>
                                        </div>
                                       
                                        </div>
                                    </div>

                                    
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <input  class="btn btn-outline-primary btnbtn" type="submit" name="ajouter" value="Ajouter"/>

                                   
                                        <a  class="btn btn-outline-success btnbtn"  href="?listeformation=true">Liste Des Formations </a>

                                    </div> 
                                </form>
                                <br>
                               
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php } if(isset($_GET["listeformation"]) && $_GET["listeformation"]=="true" ){  ?> 


    
<div class="container">
    <div class="row">
        <div class="col">
            <div class="loginForm shadow-lg p-3 mb-5 bg-body rounded ">
                <div class="card mb-3" style="width:100%">
                    <div class="row g-0">
                       
                        <div class="col-md-12">
                            <div class="card-body">
                            <h3>Liste des Formations</h3>
                            <br>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <a  class="btn btn-outline-primary btnbtn"  href="indexAd.php?serviceformation=true&lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>" ><i class="fas fa-plus-circle"></i>&nbsp;&nbsp;nouveau formation</a> 

                                   
                                    

                                    </div> <br> 
                            <div class="table-responsive-xl">

                                <table class="table table-bordered  table-hover" style="width: 100%;">
                                       
                                        <thead class="table-dark">
                                            <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">NOM FR</th>
                                            <th scope="col">DESCRIPTION FR</th>
                                            <th scope="col">NOM AN</th>
                                           <th scope="col">DESCRIPTION AN</th>
                                           
                                            <th scope="col">Opération</th>
                                        </tr>
                                        </thead>
                                        <tbody class="">
                                          <?php 
                                          $stmt=$con->prepare("SELECT *from formation");
                                          $stmt->execute(array());
                                           $rows=$stmt->fetchAll();
                                           $counts=$stmt->rowCount();
                                           if($counts>0){
                                                foreach($rows as $row){
                                                    ?>

                                            <tr>
                                           <td><?= $row["ID_FORMATION"];?></td> 
                                            <th><?= $row["TYPE"];?></th>
                                            <td><?= $row["DESCRIPTION"];?></td>
                                            <th><?= $row["type_an"];?></th>
                                            <td><?= $row["descran"];?></td>

                                            
                                            <td> 
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                     
                                  
                                            <a class="btn btn-outline-primary" href="?editformation=true&idformation=<?= urlencode(base64_encode($row["ID_FORMATION"]))?>"><i class="fas fa-edit"></i></a> 
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
                                        <p class="text-muted" style="font-weight:600"> nombres des formations  &nbsp;&nbsp; <?= $counts?></p>

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


} if( isset($_GET["editformation"]) && $_GET["editformation"]=="true" && isset($_GET["idformation"]) ){
    ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="loginForm shadow-lg p-3 mb-5 bg-body rounded ">
                <div class="card mb-3" style="width:100%">
                    <div class="row g-0">
                        <div class="col-lg-7"><br><br><br><br><br>
                            <img class="myimages" src="<?php echo $images ?>upd.png">

                        </div>
                        <div class="col-lg-5">
                            <div class="card-body">
                                <div class="contenu">
                                    <?php 
                                    $stmt=$con->prepare("SELECT *from formation 
                                    where id_formation= ?"
                                    );
                                    $stmt->execute(array(base64_decode($_GET["idformation"])));
                                    $rows=$stmt->fetch();
                                    $counts=$stmt->rowCount();
                                    if($counts>0) {

                                   
                                    
                                    ?><br>
                               <form action="#" method="post" autocomplete="off" >

                                    <br><br> <br>
                                    <h2 class="text-center ">Modifier formation</h2>
                                    <br>
                                    <h5 class="text-danger text-center"><?php if(isset($msgs)) echo $msgs;?></h5>
                                    <h5 class="text-left  text-muted">en français</h5>
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input autocomplete="off" type="text" class="form-control"   name="typeforFRmod" value="<?= $rows["TYPE"]?>">
                                 
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <div class="form-floating">
                                        <textarea class="form-control"   name="descriptFRmod"   style="height: 100px"><?= $rows["DESCRIPTION"]?></textarea>
                                      
                                        </div>
                                        </div>
                                    </div>  
                                    <h5 class="text-left text-muted ">en anglais</h5>
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input autocomplete="off" type="text" class="form-control"   name="typeforANmod"   value="<?= $rows["type_an"]?>" placeholder="Nom ( anglais )"  >
                                     
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <div class="form-floating">
                                        <textarea class="form-control"   name="descriptANmod"   style="height: 100px"><?= $rows["descran"]?></textarea>
                                        </div>
                                       
                                        </div>
                                    </div>

                                    
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <input  class="btn btn-outline-primary btnbtn" type="submit" name="modifier" value="Modifier"/>

                                   
                                        <a  class="btn btn-outline-success btnbtn"  href="?listeformation=true">Liste Des Formations </a>

                                    </div> 
                                </form>
                            <?php }
                        
                                ?>
                                <br>
                               
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php
}
?>

  
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

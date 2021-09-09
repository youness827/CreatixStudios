<?php

$msgs="";
if($_SERVER["REQUEST_METHOD"]=="POST"){

    /*login */

    if(isset($_POST["ajouter"])){

        $nom = htmlspecialchars(trim($_POST["nom"])); 
        $prénom = htmlspecialchars(trim($_POST["prénom"]));
        $adresse = htmlspecialchars(trim($_POST["adresse"])); 
        $tel = htmlspecialchars(trim($_POST["tel"])); 
        $email = htmlspecialchars(trim($_POST["email"])); 
        $pass = htmlspecialchars(trim($_POST["pass"]));
        $statut = 0;//admin 
            
             if(!(empty($email) && empty($apss) && empty($nom) && empty($prénom) && empty($adresse) && empty($tel) && $statut==0)) {


                $stmt = $con->prepare('SELECT *from compte where EMAIL = ? and STATUT = ? LIMIT 1');
                $stmt->execute(array($email,0));
                $rows_c=$stmt->fetch();    
                $rows_c = $stmt->rowCount();
if($rows_c >0){
    if(isset($_GET["lang"])){
                                                    
                                                
        $lgs = $_GET["lang"];
        if($lgs=="an"){

            
            $msgs ="this account already exists";

         
        }else {

            $msgs = "ce compte déja existe";

            

        }

        }

}else{



                        $stmt = $con->prepare('INSERT INTO client
                                              (NOM,PRENOM,ADRESS,TEL) 
                                              values (?,?,?,?)   ');
                        $stmt->execute(array($nom,$prénom,$adresse,$tel));
                      
                        $row_cl = $stmt->rowCount();
                  
                        if($row_cl>0){
                         
                          $stmt = $con->prepare("SELECT * FROM client 
                                                    ORDER BY ID_CLIENT 
                                                    DESC LIMIT 1");
                            $stmt->execute(array());
                           $row_cll = $stmt->fetch();
                           $row_count= $stmt->rowCount();
                                   
                           if($row_count>0){




                                            $stmt = $con->prepare('INSERT INTO compte
                                            (ID_CLIENT,EMAIL,MOTE_DE_PASS,STATUT) 
                                            values (?,?,?,?)   ');
                                            $stmt->execute(array($row_cll['ID_CLIENT'],$email,sha1($pass),$statut));
                                            $row_cmpt = $stmt->rowCount();
                                            if($row_cmpt>0){

                                                ?>
                                                <script type="module">
                                                swal({
                                                title:"Bien Ajouter",
                                                text: "Bien Ajouter",
                                                icon: "success",
                                                });                
                                             </script>
                                            <?php 
                                            
                                            }else{

                                                ?>
                                                <script type="module">
                                                swal({
                                                title:"nn Ajouter",
                                                text: "nn Ajouter",
                                                icon: "warning",
                                                });                
                                             </script>
                                            <?php 
                                            
                                                

                                            }
                           }

                           
                         

                        }
                    
                   
                    }

            }



    }else if(isset($_POST["modifier"])){
        $id_client=base64_decode($_GET["idclient"]);
        $nommod = htmlspecialchars(trim($_POST["nommod"])); 
        $prénommod = htmlspecialchars(trim($_POST["prénommod"]));
        $adressemod = htmlspecialchars(trim($_POST["adressemod"])); 
        $telmod = htmlspecialchars(trim($_POST["telmod"])); 
        $emailmod = htmlspecialchars(trim($_POST["emailmod"])); 
        $statutmod = $_POST["statutselect"]; 
          

        // Update
            //compte creatix 
            
     

  // supprimer
  $stmt=$con->prepare("SELECT *from compte 
  where ID_CLIENT = ? and STATUT = ? LIMIT 1" );
$stmt->execute(array($id_client,0));
$rows=$stmt->fetch();

if($_SESSION["idadmins"]==1){

    $stmt=$con->prepare("UPDATE client 
    set  NOM = ? , PRENOM = ?,ADRESS=?,TEL=?
    where ID_CLIENT = ?" );
    $stmt->execute(array($nommod,$prénommod,$adressemod,$telmod,$id_client));
    $count1=$stmt->rowCount();

    $stmt=$con->prepare("UPDATE compte 
    set  EMAIL = ?
    where ID_CLIENT = ?" );
    $stmt->execute(array($emailmod,$id_client));
    $count2=$stmt->rowCount();

    if($count1>0 || $count2>0){
        ?> 
         
        <script type="module">

          swal({
            title:"success",
            text: "success",
            icon: "success",
            });                
         </script>
 
     
        <?php  }else{
         ?>
         <script type="module">
             swal({
             title:"Error",
             text: "Error",
             icon: "error",
             });                
          </script>

    
         <?php  }

}else if($rows["ID_CLIENT"]!=1 && $rows["ID_COMPTE"]!=1){

        $stmt=$con->prepare("UPDATE client 
        set  NOM = ? , PRENOM = ?,ADRESS=?,TEL=?
        where ID_CLIENT = ?" );
        $stmt->execute(array($nommod,$prénommod,$adressemod,$telmod,$id_client));
        $count3=$stmt->rowCount();

        $stmt=$con->prepare("UPDATE compte 
        set  EMAIL = ? , STATUT = ?
        where ID_CLIENT = ?" );
        $stmt->execute(array($emailmod,$statutmod,$id_client));
        $count4=$stmt->rowCount();

        if($count3>0 || $count4>0){
            ?> 
             
            <script type="module">

              swal({
                title:"success",
                text: "success",
                icon: "success",
                });                
             </script>
     
        

            <?php  }else{
             ?>
             <script type="module">
                 swal({
                 title:"Error ",
                 text: "Error",
                 icon: "error",
                 });                
              </script>
 
            
 
             <?php  }
  }else{
    ?>
    <script type="module">
     swal ( "Oops" ,  "vous ne pouvez pas le droit de  modifier ce compte" ,  "error" );

     </script>



    <?php
  }
                  



    }else if(isset($_POST["supprimer"])){


        // supprimer
        $stmt=$con->prepare("SELECT *from compte 
        where ID_CLIENT = ? and STATUT = ? LIMIT 1" );
    $stmt->execute(array($_POST['suppressionid'],0));
    $rows=$stmt->fetch();
 
        if($rows['EMAIL']!="creatixstudio@gmail.com" && $rows["ID_CLIENT"]!=1 && $rows["ID_COMPTE"]!=1){


     
            $stmt=$con->prepare("DELETE from compte 
            where ID_CLIENT = ?" );
        $stmt->execute(array($_POST['suppressionid']));
        $count1=$stmt->rowCount();

        $stmt=$con->prepare("DELETE from client 
        where ID_CLIENT = ?" );
        $stmt->execute(array($_POST['suppressionid']));
        $count2=$stmt->rowCount();

        if($count1>0 && $count2>0){
            ?>
            <script type="module">

              swal({
                title:"Bien Supprimer",
                text: "Bien Supprimer",
                icon: "success",
                });                
             </script>
       
           

            <?php  }else{
             ?>
             <script type="module">
                 swal({
                 title:"Bien Modifier",
                 text: "Bien Modifier",
                 icon: "success",
                 });                
              </script>
 
            
 
             <?php  }





                }else{
                    ?>
                    <script type="module">
                     swal ( "Oops" ,  "vous ne pouvez pas supprimer ce compte" ,  "error" );
   
                     </script>
        
                   
        
                    <?php
                }
























    }




}

?>
<br> <br> <br> <br>
<?php if(!isset($_GET["listeadmin"]) && !isset($_GET["editadmin"]) && !isset($_GET["deleteadmin"]) ){
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="loginForm shadow-lg p-3 mb-5 bg-body rounded ">
                <div class="card mb-3" style="width:100%">
                    <div class="row g-0">
                        <div class="col-lg-7">
                            <img class="img-fluid rounded-start" src="<?php echo $images ?>add.png">

                        </div>
                        <div class="col-lg-5">
                            <div class="card-body">
                                <div class="contenu">
                                <form action="#" method="post" autocomplete="off" >
                                    <br><br> <br>
                                    <h2 class="text-center ">Nouvelle Admin</h2>
                                    <br>
                                    <h5 class="text-danger text-center"><?php if(isset($msgs)) echo $msgs;?></h5>
                                    
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input autocomplete="off" type="text" class="form-control" required  name="nom" placeholder="<?= $lang["nom"]?>">
                                        <i class="fas fa-user-edit"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input autocomplete="off" type="text" class="form-control" required  name="prénom" placeholder="<?= $lang["prenom"]?>">
                                        <i class="fas fa-user-edit"></i>
                                        </div>
                                    </div> 
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input autocomplete="off" type="text" class="form-control" required  name="adresse" placeholder="<?= $lang["adress"]?>">
                                        <i class="fas fa-map-marked"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input autocomplete="off" type="tel" class="form-control" required  name="tel" placeholder="00-00-00-00-00">
                                        <i class="fas fa-phone-alt"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input autocomplete="off" type="email" class="form-control" required  name="email" placeholder="name@example.com">
                                        <i class="fas fa-at"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input  type="password" id="password" class="form-control" required  autocomplete="new-password" id="inputPassword" name="pass" placeholder="<?= $lang["motedepass"]?>">
                                        
                                        <i id="eye" class="fas fa-eye"></i>
                                        </div> 
                                        
                                    </div>
                                    
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <input  class="btn btn-outline-primary btnbtn" type="submit" name="ajouter" value="Ajouter"/>

                                   
                                        <a  class="btn btn-outline-success btnbtn"  href="?listeadmin=true">Liste Admin </a>

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

<?php } if(isset($_GET["listeadmin"]) && $_GET["listeadmin"]=="true"){
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="loginForm shadow-lg p-3 mb-5 bg-body rounded ">
                <div class="card mb-3" style="width:100%">
                    <div class="row g-0">
                       
                        <div class="col-md-12">
                            <div class="card-body">
                            <h3>Liste d'administrateur</h3>
                            <br>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <a  class="btn btn-outline-primary btnbtn"  href="indexAd.php?compteadmin=true&lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>" ><i class="fas fa-plus-circle"></i>&nbsp;&nbsp;nouveau admin</a> 

                                   
                                    

                                    </div> <br> 
                            <div class="table-responsive-xl">

                                <table class="table table-bordered  table-hover" style="width: 100%;">
                                       
                                        <thead class="table-dark">
                                            <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">NOM</th>
                                            <th scope="col">PRENOM</th>
                                            <th scope="col">ADRESS</th>
                                            <th scope="col">TEL</th>
                                            <th scope="col">EMAIL</th>
                                            <th scope="col">STATUS</th>
                                            <th scope="col">Opération</th>
                                        </tr>
                                        </thead>
                                        <tbody class="">
                                          <?php 
                                          $stmt=$con->prepare("SELECT *from CLIENT C, COMPTE CO
                                           where C.id_client=CO.id_client 
                                           and CO.STATUT= ? ");
                                           $stmt->execute(array(0));
                                           $rows=$stmt->fetchAll();
                                           $counts=$stmt->rowCount();
                                           if($counts>0){
                                                foreach($rows as $row){
                                                    ?>

                                            <tr>
                                           <td><?= $row["ID_CLIENT"];?></td> 
                                            <td><?= $row["NOM"];?></td>
                                            <td><?= $row["PRENOM"];?></td>
                                            <td><?= $row["ADRESS"];?></td>
                                            <td><?= $row["TEL"];?></td>
                                            <td><?= $row["EMAIL"];?></td>
                                            <td><?php if($row["STATUT"]==0) echo "Admin";?></td>
                                            
                                            <td> 
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                     
                                  
                                                <a class="btn btn-outline-primary" href="?editadmin=true&idclient=<?= urlencode(base64_encode($row["ID_CLIENT"]))?>"><i class="fas fa-user-edit"></i></a> 
                                                &nbsp;&nbsp;
                                      <!--   <a href="?deleteadmin=true&idclient=<?= urlencode(base64_encode($row["ID_CLIENT"]))?>"><i class="fas fa-trash-alt"></i></a>-->
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
                                        <p class="text-muted" style="font-weight:600"> nombres des admins  &nbsp;&nbsp; <?= $counts?></p>

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


} if( isset($_GET["editadmin"]) && $_GET["editadmin"]=="true" && isset($_GET["idclient"]) ){
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
                                    $stmt=$con->prepare("SELECT *from CLIENT C, COMPTE CO
                                    where C.id_client=CO.id_client 
                                    and CO.STATUT= ? 
                                    and C.ID_CLIENT = ? 
                                    LIMIT 1"
                                    );
                                    $stmt->execute(array(0,base64_decode($_GET["idclient"])));
                                    $rows=$stmt->fetch();
                                    $counts=$stmt->rowCount();
                                    if($counts>0) {

                                   
                                    
                                    ?><br><br><br>
                                <form action="#" method="post" autocomplete="off" >
                                    <br><br> <br>
                                    <h2 class="text-center ">Modifier Admin</h2>
                                    <br>
                                    <h5 class="text-danger text-center"><?php if(isset($msgs)) echo $msgs;?></h5>
                                    
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input autocomplete="off" type="text" class="form-control" required  name="nommod" value="<?=$rows['NOM']?>" placeholder="<?= $lang["nom"]?>">
                                        <i class="fas fa-user-edit"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input autocomplete="off" type="text" class="form-control" required  name="prénommod"   value="<?=$rows['PRENOM']?>" placeholder="<?= $lang["prenom"]?>">
                                        <i class="fas fa-user-edit"></i>
                                        </div>
                                    </div> 
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input autocomplete="off" type="text" class="form-control" required  name="adressemod"  value="<?=$rows['ADRESS']?>" placeholder="<?= $lang["adress"]?>">
                                        <i class="fas fa-map-marked"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input autocomplete="off" type="tel" class="form-control" required  name="telmod"  value="<?=$rows['TEL']?>" placeholder="00-00-00-00-00">
                                        <i class="fas fa-phone-alt"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                        <input autocomplete="off" type="email" class="form-control" required  name="emailmod"  value="<?=$rows['EMAIL']?>" placeholder="name@example.com">
                                        <i class="fas fa-at"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="inputwithicon"> 
                                       
           
                                            <select class="form-select" name="statutselect">
                                              
                                                <option value="0" selected>accorder Admin</option>
                                                <option value="1">révoquer Admin</option>
                                              
                                            </select>
                                                                                
                                        </div>
                                    </div>
                                    
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <input  class="btn btn-outline-primary btnbtn" type="submit" name="modifier" value="Modifier"/>

                                   
                                        <a  class="btn btn-outline-success btnbtn"  href="?listeadmin=true">Liste Admin </a>

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









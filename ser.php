<?php
session_start();


$titlePage = "Nos services";
include("initFile/init.php");
$msg = "";



    if (isset($_POST["demander"])) {
 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_SESSION["USER"]) && isset($_SESSION["iduser"])) {


            if ($_POST["selectservice"] != "NosService") {



                // demande dun service 


                //table commande 

                $stmt = $con->prepare("INSERT INTO commande(ID_CLIENT,DATE) VALUES (?,?)");
                $stmt->execute(array($_SESSION["iduser"], date('d-m-y h:i:s')));
                $count = $stmt->rowCount();
                if ($count > 0) {

                    $stmt = $con->prepare("SELECT *from commande order by ID_COMMANDE desc LIMIT 1");
                    $stmt->execute(array());
                    $rowcmd = $stmt->fetch();
                    $countcmd = $stmt->rowCount();
                    if ($countcmd > 0) {

                        $stmt = $con->prepare("INSERT INTO detailservice(ID_COMMANDE,ID_SERVICE) VALUES (?,?)");
                        $stmt->execute(array($rowcmd["ID_COMMANDE"], $_POST["selectservice"]));
                        $countserv = $stmt->rowCount();
                        if ($countserv > 0) {
                            $msg = "votre demande est bien prise en compte";
                        }
                    }
                }
            } else {
                $msg = "veuillez choisir un service";
            }



        } else {?>


                        <script>
                            window.location.href="login.php?lang=<?php if(isset($_GET["lang"])) echo $_GET["lang"];?>";
                        </script>
<?php
        }
    }
}

?>

<div class="bodyIndex">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="contenu ">
                    <br> <br> <br> <br> <br>
                    <h2 data-aos="fade-down" data-aos-duration="1800"><?= $lang["titleservice"]?></h2>
                    <br> 
                        <div class="text-center " data-aos="fade-up-right" data-aos-duration="2100">
<img src="<?php echo $images?>servicess.png" class="img-fluid" alt="..."> 
</div>
 <br> <br>
                    <p data-aos="fade-down" data-aos-duration="2800"><?= $lang["parservice"];?></p>

                    <br> <br> <br> <br>
                    <p data-aos="fade-down" class="shadow p-3 mb-5 bg-body rounded" data-aos-duration="2400"> <span class="sp "> <?= $lang["agriculture"];?> :</span><?= $lang["paragriculture"];?></p>
                    <br>
                    <p data-aos="fade-down" class="shadow p-3 mb-5 bg-body rounded" data-aos-duration="2400"> <span class="sp"> <?= $lang["topographiephotogramm??trie"];?> :</span><?= $lang["partopographiephotogramm??trie"];?></p>
                    <br>
                    <p data-aos="fade-down" class="shadow p-3 mb-5 bg-body rounded" data-aos-duration="2400"><span class="sp"> <?= $lang["inspectionindustrielle"];?> :</span> <?= $lang["parinspectionindustrielle"];?></p>
                    <br>
                    <p data-aos="fade-down" class="shadow p-3 mb-5 bg-body rounded" data-aos-duration="2400"> <span class="sp"> <?= $lang["audiovisuel"];?> :</span><?= $lang["paraudiovisuel"];?> </p>
                    <br>

                </div>
            </div>

        </div>
    </div>
    <div class="contenu ">

        <br> <br><br><br>
        <h2>Nos Service</h2>
        <br> <br>
        <div class="container">

            <div class="row  row-cols-1 row-cols-lg-2 g-5">
<?php  $stmt = $con->prepare("select *from service");
                $stmt->execute(array());
                $rows = $stmt->fetchAll(); 

                foreach($rows as $rr){
                    ?>
                    <div class="col">
                    <div class="card shadow-lg p-3 mb-5 bg-body rounded" data-aos="fade-down" data-aos-duration="2000">
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                <?php 
                                
                                
                                echo $rr["TYPE"];

                                ?></h5>
                            <p class="card-text">


                                <?=
                                 $rr["DESCRIPTION"];

                                ?>
                        </div>
                    </div>
                </div>


     <?php
                }
    
    ?>
                

            
            </div>

        </div>
    </div>
        
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="contenu">
                    <br><br><br>
                    <h2>CE QUE NOUS OFFRONS</h2>

                    <br>
                    <p class="text-center">Creatix Studio vous ouvre de nouvelles perspectives avec ses solutions de drones. Ce n???est que lorsque vous survolez vos projets que vous r??alisez ?? quel point une vue a??rienne est incroyablement utile et ?? grande valeur ajout??e!</p>
                    <br> <br>
                    <div class="accordion" id="accordionExample">
                        <!-- according begin-->


                        <div class="accordion-item shadow  p-3 mb-5 bg-body rounded" data-aos="fade-down" data-aos-duration="2000">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <h3> traitement agricole</h3>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> <strong>Nous fournissons des services allant de l???analyse multispectrale ?? l?????pandage des traitements phytosanitair</strong> En utilisant notre technologie de drone de pointe, nous accompagnons nos clients dans leur d??veloppement technologique en leur offrant des solutions d??di??es et l???expertise d???une ??quipe attentive.</p>
                                    <p>Imagerie par drone

                                        RGB, Multispectral ou Infrarouge, l???analyse par l???image donne acc??s ?? une grande quantit?? d???informations qui est souvent invisible ?? l?????il nu.

                                        Nos ??quipes SIG se servent de ces donn??es ?? des fins d???analyses et pour vous accompagner dans le plan d???actions ?? mener sur vos cultures.</p>


                                    <div class="container">
                                        <div class="row row-cols-1 row-cols-lg-3 g-5">
                                            <div class="col ">
                                                <img src="<?php echo $images ?>p4m-agric.jpg">
                                            </div>
                                            <div class="col">
                                                <img src="<?php echo $images ?>agras-t20-traitement.png">
                                            </div>
                                            <div class="col">
                                                <img src="<?php echo $images ?>agriculturedrone.jpg">
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- item 1 -->

                        <div class="accordion-item shadow p-3 mb-5 bg-body rounded" data-aos="fade-down" data-aos-duration="2300">
                            <h2 class="accordion-header" id="headingTow">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTow" aria-expanded="false" aria-controls="collapseTow">
                                    <h3>PHOTOGRAPHIE IMMOBILI??RE</h3>
                                </button>
                            </h2>
                            <div id="collapseTow" class="accordion-collapse collapse" aria-labelledby="headingTow" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> <strong>Creatix Studio</strong> vous aide ?? vous d??marquer de la concurrence avec nos photographies de qualit?? sup??rieure. Nous vous livrons des images et vid??os grand angle et de haute r??solution pour mettre en valeur votre propri??t?? et votre projet. Les images et les vid??os sont tourn??es avec des appareils photos et vid??os professionnels et des objectifs grand angle pour garantir le meilleur rendu et ainsi des photos/vid??os avec des perspectives a??riennes uniques.</p>
                                    <h5>Type de projet : </h5>
                                    <ul>
                                        <li>Immobilier commercial,</li>
                                        <li>Clubs / H??tel / Terrains de golf,</li>
                                        <li>??coles / Universit??s,</li>
                                        <li>Projet r??sidentiels haut de gamme de luxe,</li>
                                    </ul>

                                    <div class="container">
                                        <div class="row row-cols-1 row-cols-lg-3 g-5">
                                            <div class="col ">
                                                <img class="img" src="<?php echo $images ?>thumbs_golf.jpg">
                                            </div>
                                            <div class="col">
                                                <img class="img" src="<?php echo $images ?>thumbs_hotel.jpg">
                                            </div>
                                            <div class="col">
                                                <img class="img" src="<?php echo $images ?>thumbs_projet-luxe-2.jpg">
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- item 2 -->

                        <div class="accordion-item shadow p-3 mb-5 bg-body rounded" data-aos="fade-down" data-aos-duration="2500">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <h3>SITE SURVEY ET SUIVI DES OUVRAGES D???ARTS/CHANTIERS</h3>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> <strong>Creatix Studio </strong> documente chaque phase de votre projet de construction depuis l?????tude initiale du site jusqu???au projet finalis??/livr??. Nos drones fournissent des images a??riennes qui am??liorent les rapports d???avancement mensuels et fournissent ?? toute personne associ??e au projet des informations pr??cieuses tout en leur faisant gagner du temps et de l???argent (capture de riches donn??es a??riennes et g??n??ration des mod??les 3D d??taill??s).</p>
                                    <h5>Les Types de projets qui peuvent ??tre ex??cut??s ?? l???aide de drones couvrent toute la gamme : </h5>
                                    <ul>
                                        <li>Suivi pr??cis des chantiers de construction,</li>
                                        <li>Photogramm??trie des sols et mod??le orthographique 2D,</li>
                                        <li>Cartographie et g??n??ration des mod??les 3D d??taill??s(Mapping, Photogramm??trie : Mod??le Orthophoto, MNT, MNS,???etc),</li>
                                        <li>Cr??ation de cartes volum??triques des stocks de mat??riaux pour les soci??t??s mini??res,</li>
                                        <li>Inspection des b??timents et localisation des d??fauts de construction,</li>

                                    </ul>

                                    <div class="container">
                                        <div class="row row-cols-1 row-cols-lg-3 g-5">
                                            <div class="col ">
                                                <img class="img" src="<?php echo $images ?>thumbs_chantier-2-1.jpg">
                                            </div>
                                            <div class="col">
                                                <img class="img" src="<?php echo $images ?>thumbs_chantier-4.jpg">
                                            </div>
                                            <div class="col">
                                                <img class="img" src="<?php echo $images ?>thumbs_chantier-1.jpg">
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- item 3 -->


                        <div class="accordion-item shadow p-3 mb-5 bg-body rounded" data-aos="fade-down" data-aos-duration="2700">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <h3>INSPECTION INDUSTRIELLE</h3>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>La technique d???inspection par drone offre des inspections structurelles, qui sont plus rapides et plus s??res que les m??thodes d???acc??s conventionnelles. Notre technique d???inspection r??duit les co??ts en supprimant l???exigence de grandes surfaces d?????chafaudage et am??liore la s??curit?? en r??duisant le besoin de travailler en hauteur. Toutes les inspections sont effectu??es par des pilotes experts.</p>
                                    <h5>Creatix Studio : </h5>
                                    <ul>
                                        <li>Des inspections visuelles et thermiques rapproch??es et des enqu??tes sur les structures hautes, vivantes et difficiles ?? atteindre des installations industrielles, p??troli??res et gazi??res onshores et offshores,</li>
                                        <li>Des inspections et des enqu??tes dans le secteur des ??nergies renouvelables, en aidant nos clients ?? effectuer des inspections des ??oliennes et de champ de panneaux photovolta??ques,</li>
                                        <li>Cartographie et g??n??ration des mod??les 3D d??taill??s(Mapping, Photogramm??trie : Mod??le Orthophoto, MNT, MNS,???etc),</li>
                                        <li>Des inspections et des ??tudes pour le secteur de l?????lectricit?? et des t??l??communications. Nous assistons nos clients dans l???inspection des tours de transmission et de distribution,</li>
                                        <li>Des inspections et des enqu??tes dans le secteur maritimes, en aidant nos clients ?? inspecter leurs structures et travaux sous-marins ainsi que les zones difficilement accessibles,</li>

                                    </ul>

                                    <div class="container">
                                        <div class="row row-cols-1 row-cols-lg-3 g-5">
                                            <div class="col ">
                                                <img class="img" src="<?php echo $images ?>thumbs_stack6-768x498.jpg">
                                            </div>
                                            <div class="col">
                                                <img class="img" src="<?php echo $images ?>thumbs_telecom.jpg">
                                            </div>
                                            <div class="col">
                                                <img class="img" src="<?php echo $images ?>thumbs_chemine.jpg">
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- item 4 -->

                    </div> <!-- according end-->
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="contenu">
                        <br><br><br>


                        <h2>Demander un service </h2>
                        <br><br>

                        <?php
                        if (isset($msg) && !empty($msg)) {
                            if ($msg == "votre demande est bien prise en compte") { ?>
                                <h5 class="text-success text-center"><?= $msg; ?></h5>

                            <?php  } else { ?>
                                <h5 class="text-danger text-center"><?= $msg; ?></h5>
                            <?php   }

                            ?>

                        <?php } ?>
                        <form action="" method="post">

                            <select class="form-select" aria-label="Default select example" name="selectservice">
                                <option selected value="NosService">Nos Service</option>
                                <?php

                                $stmt = $con->prepare("SELECT *from service ");
                                $stmt->execute(array());
                                $rows = $stmt->fetchAll();
                                $count = $stmt->rowCount();
                                if ($count > 0) {
                                    foreach ($rows as $rr) {
                                ?>
                                        <option value="<?php echo $rr["ID_SERVICE"] ?>"><?php echo $rr["TYPE"] ?></option>
                                <?php

                                    }
                                }

                                ?>


                            </select>

                            <br>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <input type="submit" class="btn btn-outline-primary btn-lg me-md-2" name="demander" value="Demandez">

                            </div>
                        </form>

                    </div>
                </div>
            </div>



        </div>



    </div>
<br> <br> <br>



    <?php
    include("includes/templates/footer.php");

    ?>
<?php
session_start();


$titlePage = "Nos services";
include("initFile/init.php");
$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (isset($_POST["demander"])) {

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
        } else {
            header("location:login.php");
            exit();
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
                    <h2 data-aos="fade-down" data-aos-duration="1800">NOUS OFFRONS DES PRESTATIONS DE SERVICE DRONE DE HAUT NIVEAU TANT EN QUALITÉ QU’EN PROFESSIONNALISME AVEC UNE EXPÉRIENCE DE PLUS DE 15 ANS</h2>
                    <br> 
                        <div class="text-center " data-aos="fade-up-right" data-aos-duration="2100">
<img src="<?php echo $images?>servicess.png" class="img-fluid" alt="..."> 
</div>
 <br> <br>
                    <p data-aos="fade-down" data-aos-duration="2800">Nous offrons une multitude de service drone dans chaque domaine d’activité. Tous nos pilotes ont leur certification avancée de pilotage et ont d’innombrables heures d’utilisation de drones (RPAS). La sécurité est notre priorité absolue dans toutes nos missions. Nous avons des équipements certifiés et pouvons voler dans l’espace aérien de jour comme de nuit. Nous pouvons fournir à nos clients des délais d’exécution rapides sur la planification des missions et être prêts à voler dans les plus court délai.</p>

                    <br> <br> <br> <br>
                    <p data-aos="fade-down" class="shadow p-3 mb-5 bg-body rounded" data-aos-duration="2400"> <span class="sp "> Agriculture :</span>Analyse des signes de stress ou de maladies des plantes, Créée des cartes NDVI pour mieux gérer les cultures, Optimisation des ressources d’irrigation, Gestion intelligente des fertilisants, Traitement phytosanitaire smart et précis, Pollinisation artificielle par drone, Distribution des semences et bien d’autres applications !</p>
                    <br>
                    <p data-aos="fade-down" class="shadow p-3 mb-5 bg-body rounded" data-aos-duration="2400"> <span class="sp"> Topographie/Photogrammétrie :</span>Levée Topographique, Calcul des stocks/cubatures, Évaluation du volume des travaux, Suivi du chantier, Modélisation 3D/BIM et bien d’autres applications!Effectuer des inspections sûres et efficaces, Inspection massive et précise des unités industrielles : gaz, pétrole, pétrochimie, centrales solaires. Effectuer des inspections d’éoliennes avec une résolution et une précision élevées, Assurer la haute disponibilité des installations industrielles et de production de l’énergie, et bien d’autres applications !</p>
                    <br>
                    <p data-aos="fade-down" class="shadow p-3 mb-5 bg-body rounded" data-aos-duration="2400"><span class="sp"> Inspection industrielle :</span> Effectuer des inspections sûres et efficaces, Inspection massive et précise des unités industrielles : gaz, pétrole, pétrochimie, centrales solaires. Effectuer des inspections d’éoliennes avec une résolution et une précision élevées, Assurer la haute disponibilité des installations industrielles et de production de l’énergie, et bien d’autres applications !</p>
                    <br>
                    <p data-aos="fade-down" class="shadow p-3 mb-5 bg-body rounded" data-aos-duration="2400"> <span class="sp"> Audio-visuel :</span>Prise de photos 4K, Tournage vidéos en 4K/5K/6K, Tournage aérien avec des caméras professionnelles, Couverture distante des événements avec transmission UHD à la régie et bien d’autres applications </p>
                    <br>
                    <p data-aos="fade-down" class="shadow p-3 mb-5 bg-body rounded" data-aos-duration="2400"><span class="sp"> Agriculture :</span> Analyse des signes de stress ou de maladies des plantes, Créée des cartes NDVI pour mieux gérer les cultures, Optimisation des ressources d’irrigation, Gestion intelligente des fertilisants, Traitement phytosanitaire smart et précis, Pollinisation artificielle par drone, Distribution des semences et bien d’autres applications !</p>

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

                <div class="col">
                    <div class="card shadow-lg p-3 mb-5 bg-body rounded" data-aos="fade-down-left" data-aos-duration="1400">
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                <?php
                                $row = service($con, 1);
                                echo $row["TYPE"];

                                ?></h5>
                            <p class="card-text">


                                <?php
                                $row = service($con, 1);
                                echo $row["DESCRIPTION"];

                                ?>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-lg p-3 mb-5 bg-body rounded " data-aos="fade-down-right" data-aos-duration="2400">
                        <div class="card-body">
                            <h5 class="card-title text-center"> <?php
                                                                $row = service($con, 2);
                                                                echo $row["TYPE"];

                                                                ?></h5>
                            <p class="card-text"><?php
                                                    $row = service($con, 2);
                                                    echo $row["DESCRIPTION"];

                                                    ?></p>

                        </div>
                    </div>
                </div>

            </div>

        </div>

        <br> <br>
        <div class="container">

            <div class="row row-cols-1 row-cols-lg-3 g-5">
                <div class="col">


                    <div class="card shadow-lg p-3 mb-5 bg-body rounded" data-aos="fade-down-left" data-aos-duration="2400">
                        <div class="card-body">

                            <h5 class="card-title text-center"> <?php
                                                                $row = service($con, 3);
                                                                echo $row["TYPE"];

                                                                ?></h5>

                            <p class="card-text"> <?php
                                                    $row = service($con, 3);
                                                    echo $row["DESCRIPTION"];

                                                    ?></p>

                        </div>
                    </div>


                </div>

                <div class="col">


                    <div class="card shadow-lg p-3 mb-5 bg-body rounded" data-aos="fade-down" data-aos-duration="2400">
                        <div class="card-body">

                            <h5 class="card-title text-center"><?php
                                                                $row = service($con, 4);
                                                                echo $row["TYPE"];

                                                                ?></h5>

                            <p class="card-text"><?php
                                                    $row = service($con, 4);
                                                    echo $row["DESCRIPTION"];

                                                    ?></p>

                        </div>
                    </div>


                </div>


                <div class="col">


                    <div class="card shadow-lg p-3 mb-5 bg-body rounded" data-aos="fade-down-right" data-aos-duration="2400">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php
                                                                $row = service($con, 5);
                                                                echo $row["TYPE"];

                                                                ?></h5>
                            <p class="card-text">
                                <?php
                                $row = service($con, 5);
                                echo $row["DESCRIPTION"];

                                ?>
                            </p>

                        </div>
                    </div>


                </div>

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
                    <p class="text-center">Creatix School Center vous ouvre de nouvelles perspectives avec ses solutions de drones. Ce n’est que lorsque vous survolez vos projets que vous réalisez à quel point une vue aérienne est incroyablement utile et à grande valeur ajoutée!</p>
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
                                    <p> <strong>Nous fournissons des services allant de l’analyse multispectrale à l’épandage des traitements phytosanitair</strong> En utilisant notre technologie de drone de pointe, nous accompagnons nos clients dans leur développement technologique en leur offrant des solutions dédiées et l’expertise d’une équipe attentive.</p>
                                    <p>Imagerie par drone

                                        RGB, Multispectral ou Infrarouge, l’analyse par l’image donne accès à une grande quantité d’informations qui est souvent invisible à l’œil nu.

                                        Nos équipes SIG se servent de ces données à des fins d’analyses et pour vous accompagner dans le plan d’actions à mener sur vos cultures.</p>


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
                        </div><!-- item 1 -->

                        <div class="accordion-item shadow p-3 mb-5 bg-body rounded" data-aos="fade-down" data-aos-duration="2300">
                            <h2 class="accordion-header" id="headingTow">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTow" aria-expanded="false" aria-controls="collapseTow">
                                    <h3>PHOTOGRAPHIE IMMOBILIÈRE</h3>
                                </button>
                            </h2>
                            <div id="collapseTow" class="accordion-collapse collapse" aria-labelledby="headingTow" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> <strong>Creatix School Center </strong> vous aide à vous démarquer de la concurrence avec nos photographies de qualité supérieure. Nous vous livrons des images et vidéos grand angle et de haute résolution pour mettre en valeur votre propriété et votre projet. Les images et les vidéos sont tournées avec des appareils photos et vidéos professionnels et des objectifs grand angle pour garantir le meilleur rendu et ainsi des photos/vidéos avec des perspectives aériennes uniques.</p>
                                    <h5>Type de projet : </h5>
                                    <ul>
                                        <li>Immobilier commercial,</li>
                                        <li>Clubs / Hôtel / Terrains de golf,</li>
                                        <li>Écoles / Universités,</li>
                                        <li>Projet résidentiels haut de gamme de luxe,</li>
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
                                    <h3>SITE SURVEY ET SUIVI DES OUVRAGES D’ARTS/CHANTIERS</h3>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> <strong>Creatix School Center </strong> documente chaque phase de votre projet de construction depuis l’étude initiale du site jusqu’au projet finalisé/livré. Nos drones fournissent des images aériennes qui améliorent les rapports d’avancement mensuels et fournissent à toute personne associée au projet des informations précieuses tout en leur faisant gagner du temps et de l’argent (capture de riches données aériennes et génération des modèles 3D détaillés).</p>
                                    <h5>Les Types de projets qui peuvent être exécutés à l’aide de drones couvrent toute la gamme : </h5>
                                    <ul>
                                        <li>Suivi précis des chantiers de construction,</li>
                                        <li>Photogrammétrie des sols et modèle orthographique 2D,</li>
                                        <li>Cartographie et génération des modèles 3D détaillés(Mapping, Photogrammétrie : Modèle Orthophoto, MNT, MNS,…etc),</li>
                                        <li>Création de cartes volumétriques des stocks de matériaux pour les sociétés minières,</li>
                                        <li>Inspection des bâtiments et localisation des défauts de construction,</li>

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
                                    <p>La technique d’inspection par drone offre des inspections structurelles, qui sont plus rapides et plus sûres que les méthodes d’accès conventionnelles. Notre technique d’inspection réduit les coûts en supprimant l’exigence de grandes surfaces d’échafaudage et améliore la sécurité en réduisant le besoin de travailler en hauteur. Toutes les inspections sont effectuées par des pilotes experts.</p>
                                    <h5>Creatix School Center propose : </h5>
                                    <ul>
                                        <li>Des inspections visuelles et thermiques rapprochées et des enquêtes sur les structures hautes, vivantes et difficiles à atteindre des installations industrielles, pétrolières et gazières onshores et offshores,</li>
                                        <li>Des inspections et des enquêtes dans le secteur des énergies renouvelables, en aidant nos clients à effectuer des inspections des éoliennes et de champ de panneaux photovoltaïques,</li>
                                        <li>Cartographie et génération des modèles 3D détaillés(Mapping, Photogrammétrie : Modèle Orthophoto, MNT, MNS,…etc),</li>
                                        <li>Des inspections et des études pour le secteur de l’électricité et des télécommunications. Nous assistons nos clients dans l’inspection des tours de transmission et de distribution,</li>
                                        <li>Des inspections et des enquêtes dans le secteur maritimes, en aidant nos clients à inspecter leurs structures et travaux sous-marins ainsi que les zones difficilement accessibles,</li>

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
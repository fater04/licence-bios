<?php
/**
 * Created by PhpStorm.
 * User: fater
 * Date: 9/28/2019
 * Time: 3:50 PM
 */
?>


<div class="row">
    <div class="col-md-12">
        <div class="card card-topline-lightblue">
            <div class="card-head">
                <header>Liste des Salles</header>
                <?= \systeme\Application\Application::block('tools') ?>
            </div>

            <div class="card-body ">

                <div class="table-responsive">
                    <table class="table table-striped custom-table table-hover">
                        <thead>
                        <tr>
                            <th>NO SALLE</th>
                            <th>TYPE</th>
                            <th>NBRE DE LIT</th>
                            <th>Date_Ajout</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (isset($listeRendezVous)) {
                            foreach ($listeRendezVous as $r1) {
                                ?>
                                <tr>
                                    <td><?= $r1->getId(); ?></td>
                                    <td><a href="#"><?= strtoupper($r1->getCodePatient()) ?></a></td>
                                    <td><?= $r1->getDateRendezVous(); ?></td>
                                    <td><?= $r1->getHeureDebut() . " a " . $r1->getHeureFin() ?></td>
                                    <td><?= $r1->getIdMedecin(); ?></td>
                                    <td><?= $r1->getNote(); ?></td>
                                    <td><?= $r1->getDateCreation(); ?></td>

                                </tr>

                            <?php }
                        } ?> </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

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
                <header>Liste des Admission</header>
                <?= \systeme\Application\Application::block('tools') ?>
            </div>

            <div class="card-body ">

                <div class="table-responsive">
                    <table class="table table-striped custom-table table-hover">
                        <thead>
                        <tr>
                            <th>no Salle</th>
                            <th>No Dossier</th>
                            <th>Nom Complet</th>
                            <th>Maladie</th>
                            <th>Date Afectation</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (isset($listeAdmission)) {
                            foreach ($listeAdmission as $r1) {
                                ?>
                                <tr>
                                    <td><?= $r1->getNumeroSalle(); ?></td>
                                    <td><?= strtoupper($r1->getNumeroDossier()) ?></td>
                                    <td><?= \app\DefaultApp\Models\Patient::nomComplet($r1->getNumeroDossier()) ?></td>
                                    <td><?= $r1->getMaladie(); ?></td>
                                    <td><?= $r1->getDat(); ?></td>

                                </tr>

                            <?php }
                        } ?> </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

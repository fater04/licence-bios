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
        <div class="row">
            <div class="col-md-12">
                <div class="card card-topline-green">
                    <div class="card-head">
                        <header>Liste des patients </header>

                        <?= \systeme\Application\Application::block('tools') ?>
                    </div>
                    <div class="card-body ">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table table-hover">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>CIN</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Sexe</th>
                                        <th>DateNaissance</th>
                                        <th>Téléphone</th>
                                        <!--                                    <th>Action</th>-->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($listePatient)) {
                                        foreach ($listePatient as $p) {
                                            ?>
                                            <tr>
                                                <td><a href="#"><?= strtoupper($p->getCode()) ?></a></td>
                                                <td><?= $p->getCin(); ?></td>
                                                <td><?= $p->getNom(); ?></td>
                                                <td><?= $p->getPrenom(); ?></td>
                                                <td><?= $p->getSexe(); ?></td>
                                                <td><?= $p->getDateNaissance(); ?></td>
                                                <td><?= $p->getTelephone(); ?></td>
                                                <!--                                    <td>-->
                                                <!--                                        <button class="btn btn-success btn-xs">-->
                                                <!--                                            <i class="fa fa-check"></i>-->
                                                <!--                                        </button>-->
                                                <!--                                        <button class="btn btn-primary btn-xs">-->
                                                <!--                                            <i class="fa fa-pencil"></i>-->
                                                <!--                                        </button>-->
                                                <!--                                        <button class="btn btn-danger btn-xs">-->
                                                <!--                                            <i class="fa fa-trash-o "></i>-->
                                                <!--                                        </button>-->
                                                <!--                                    </td>-->
                                            </tr>

                                    <?php   }
                                    } ?> </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
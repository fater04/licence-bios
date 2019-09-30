<?php
/**
 * Created by PhpStorm.
 * User: fater
 * Date: 9/24/2019
 * Time: 4:15 PM
 */
?>


<div class="row" style="min-height:800px">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-topline-green">
                    <div class="card-head">
                        <header>Recherche Patient</header>
                        <div class="tools">
                            &nbsp;
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="offset-lg-2 offset-md-2 col-md-6  col-lg-6 col-sm-12">
                            <form class="form-horizontal" method="POST">
                                <div class="form-group row">
                                    <label for="horizontalFormEmail"
                                           class="col-sm-3 col-md-3 control-label">Critere</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" placeholder="Critere..." name="critere"
                                               required>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-info m-r-20">Rechercher</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <br/><br/>


                        <?php if (isset($listePatient)) { ?>


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

                                        <?php }
                                    } ?> </tbody>

                                </table>
                            </div>


                        <?php } ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

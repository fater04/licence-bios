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
                <div class="card card-topline-lightblue">
                    <div class="card-head">
                        <header>Recherche Salle</header>
                        <div class="tools">
                            <?= \systeme\Application\Application::block('tools') ?>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="offset-lg-2 offset-md-2 col-md-6  col-lg-6 col-sm-12">
                            <form class="form-horizontal" method="POST">
                                <div class="form-group row">
                                    <label for="horizontalFormEmail"
                                           class="col-sm-4 col-md-4 control-label">Code </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Entrez code" name="critere"
                                            <?php if (isset($critere)) { ?> value="<?= $critere ?>" <?php } ?>
                                               required>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-info m-r-20">Rechercher</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <br/><br/>


                        <?php if (isset($listeSalle)) { ?>
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
                                    foreach ($listeSalle as $r1) { ?>

                                        <tr>
                                            <td><?= $r1->getNumero(); ?></td>
                                            <td><?= $r1->getTypes(); ?></td>
                                            <td><?= $r1->getLit(); ?></td>
                                            <td><?= $r1->getDat(); ?></td>

                                        </tr>

                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>

                            <?php
                        } ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

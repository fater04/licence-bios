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
                            <?= \systeme\Application\Application::block('tools') ?>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="offset-lg-2 offset-md-2 col-md-6  col-lg-6 col-sm-12">
                            <form class="form-horizontal" method="POST">
                                <div class="form-group row">
                                    <label for="horizontalFormEmail" class="col-sm-3 col-md-3 control-label">Code Patient</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" placeholder="Entrez code" name="critere" <?php if (isset($critere)) { ?> value="<?= $critere ?>" <?php } ?> required>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-info m-r-20">Rechercher</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <br /><br />

                        <?php
                        if (isset($listePatient)) {
                        ?>
                            <div class="table-responsive">
                                <table class="table table-striped custom-table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>CIN / NIF</th>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Sexe</th>
                                            <th>DateNaissance</th>
                                            <th>Téléphone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($listePatient as $p) {
                                        ?>
                                            <tr>
                                                <td><a href="#"><?= strtoupper($p->getCode()) ?></a></td>
                                                <td><?php if ($p->getCin() != "") {
                                                        echo $p->getCin();
                                                    } else {
                                                        echo   $p->getNif();
                                                    } ?></td>
                                                <td><?= $p->getNom(); ?></td>
                                                <td><?= $p->getPrenom(); ?></td>
                                                <td><?= $p->getSexe(); ?></td>
                                                <td><?= $p->getDateNaissance(); ?></td>
                                                <td><?= $p->getTelephone(); ?></td>
                                                <td>
                                                    <button class="btn btn-danger btn-xs">
                                                        <i class="fa fa-tv " data-toggle="modal" data-target="#largeModel-<?= $p->getId() ?>"></i>
                                                    </button>
                                                    <!-- Large Model -->
                                                    <div class="modal fade container" id="largeModel-<?= $p->getId() ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-fluid" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="exampleModalLabel">Information</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row disabled">
                                                                        <div class="col-md-6 col-lg-6 ">

                                                                            <div class="form-group row">
                                                                                <label class="control-label col-md-3">Code</label>
                                                                                <div class="col-md-5">
                                                                                    <input type="text" name="code" class="form-control input-height" value="<?= $p->getCode(); ?>" readonly />
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label class="control-label col-md-3">Nom
                                                                                </label>
                                                                                <div class="col-md-5">
                                                                                    <input type="text" name="nom" placeholder="nom patient " readonly value="<?= $p->getNom() ?>" class="form-control input-height" required />
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label class="control-label col-md-3">Prenom
                                                                                </label>
                                                                                <div class="col-md-5">
                                                                                    <input type="text" name="prenom" placeholder="prenom du patient" readonly value="<?= $p->getPrenom() ?>" class="form-control input-height " required />
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label class="control-label col-md-3">Sexe
                                                                                </label>
                                                                                <div class="col-md-5">
                                                                                    <select class="form-control input-height" name="sexe" readonly>
                                                                                        <option value="<?= $p->getSexe(); ?>"><?= $p->getSexe(); ?></option>
                                                                                        <option value="Masculin">Masculin</option>
                                                                                        <option value="Feminin">Feminin</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label class="control-label col-md-3">Date Naissance
                                                                                    <!-- <span class="required"> * </span> -->
                                                                                </label>
                                                                                <div class="col-md-5">
                                                                                    <input type="text" readonly name="date_naissance" data-mask="99/99/9999" value="<?= $p->getDateNaissance() ?>" placeholder="dd/mm/yyyy" class="form-control input-height" required>
                                                                                    <!-- <span class="help-block">jour/mois/année</span> -->
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label class="control-label col-md-3">Addresse
                                                                                </label>
                                                                                <div class="col-md-5">
                                                                                    <textarea name="addresse" readonly placeholder="addresse" class="form-control-textarea" rows="5"> <?= $p->getAdresse() ?></textarea>
                                                                                </div>
                                                                            </div>


                                                                        </div>

                                                                        <div class="col-md-6 col-lg-6 ">

                                                                            <?php if ($p->getCin() != "") { ?>

                                                                                <div class="form-group row">
                                                                                    <label class="control-label col-md-3">CIN </label>
                                                                                    <div class="col-md-5">
                                                                                        <input type="text" placeholder="cin" name="cin" readonly value="<?= $p->getCin() ?>" data-mask="99-99-99-9999-99-99999" class="form-control input-height">
                                                                                        <!-- <span class="help-block">99-99-99-9999-99-99999</span> -->
                                                                                    </div>
                                                                                </div>
                                                                            <?php } ?>
                                                                            <?php if ($p->getNif() != "") { ?>

                                                                                <div class="form-group row" id="nif_affiche">
                                                                                    <label class="control-label col-md-3">NIF</label>
                                                                                    <div class="col-md-5">
                                                                                        <input type="text" placeholder="nif" name="nif" readonly id="nif_val" readonly value="<?= $p->getNif(); ?>" data-mask="999-999-999-9" class="form-control input-height">
                                                                                        <!-- <span class="help-block">999-999-999-9</span> -->
                                                                                    </div>
                                                                                </div>
                                                                            <?php } ?>

                                                                            <div class="form-group row">
                                                                                <label class="control-label col-md-3">Telephone </label>
                                                                                <div class="col-md-5">
                                                                                    <input type="text" placeholder="telephone" name="telephone" readonly value="<?= $p->getTelephone() ?>" data-mask="(999) 9999-9999" class="form-control input-height">
                                                                                    <!-- <span class="help-block">(999) 9999-9999</span> -->
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label class="control-label col-md-3">Email
                                                                                </label>
                                                                                <div class="col-md-5">
                                                                                    <div class="input-group">
                                                                                        <input type="mail" class="form-control input-height" name="email" readonly value="<?= $p->getEmail() ?>" placeholder="email"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label class="control-label col-md-3">Statut matrimonial
                                                                                    <!-- <span class="required"> * </span> -->
                                                                                </label>
                                                                                <div class="col-md-5">
                                                                                    <select class="form-control input-height" name="statut_matrimonial" readonly>
                                                                                        <option value="celibataire"><?= $p->getStatutMatrimonial(); ?></option>
                                                                                        <option value="celibataire">Celibataire</option>
                                                                                        <option value="mariee">Mariée</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label class="control-label col-md-3">Groupe sanguin
                                                                                </label>
                                                                                <div class="col-md-5">
                                                                                    <select class="form-control input-height" name="groupe_sanguin" readonly>
                                                                                        <option value="<?= $p->getGroupeSanguin() ?>"><?= strtoupper($p->getGroupeSanguin()) ?></option>
                                                                                        <option value="a+">A+</option>
                                                                                        <option value="a-">A-</option>
                                                                                        <option value="b+">B+</option>
                                                                                        <option value="b-">B-</option>
                                                                                        <option value="ab+">AB+</option>
                                                                                        <option value="ab-">AB-</option>
                                                                                        <option value="o+">O+</option>
                                                                                        <option value="o-">O-</option>
                                                                                        <option value="inconnu">Inconnu</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label class="control-label col-md-3">Profession
                                                                                </label>
                                                                                <div class="col-md-5">
                                                                                    <input type="text" class="form-control input-height" name="profession" readonly value="<?= $p->getProfession() ?>" placeholder="profession" name="bp">
                                                                                </div>
                                                                            </div>


                                                                            <div class="form-group row">
                                                                                <label class="control-label col-md-3">personne de reference
                                                                                </label>
                                                                                <div class="col-md-5">
                                                                                    <input type="text" name="nom_mere" placeholder="nom complet" readonly value="<?= $p->getNomMere() ?>" class="form-control input-height " required />
                                                                                </div>
                                                                            </div>


                                                                        </div>

                                                                    </div>


                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        <?php   } ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php  } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
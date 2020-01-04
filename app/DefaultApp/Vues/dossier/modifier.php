<?php

/**
 * Created by PhpStorm.
 * User: fater
 * Date: 9/25/2019
 * Time: 4:49 PM
 */
?>
<div class="row" style="min-height:800px">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-topline-green">
                    <div class="card-head">
                        <header>Modifier Patient</header>
                        <div class="tools">
                            <?= \systeme\Application\Application::block('tools') ?>
                        </div>
                    </div>
                    <div class="card-body ">

                        <?php if (!isset($listePatient)) { ?>

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
                            </div><br /><br />
                        <?php } ?>
                        <?php if (isset($listePatient)) {
                            foreach ($listePatient as $p) { ?>
                                <form role="form" class="form-horizontal" action="modifier-dossier" method="post" enctype="multipart/form-data" id="formulaire_modifier_patient">
                                    <input type="hidden" name="modifier_patient" />
                                    <input type="hidden" name="id_patient" value="<?= $p->getId() ?>" />
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Code<span class="required"> * </span></label>
                                                <div class="col-md-5">
                                                    <input type="text" name="code" class="form-control input-height" value="<?= $p->getCode(); ?>" readonly />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Nom
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="nom" placeholder="nom patient " value="<?= $p->getNom() ?>" class="form-control input-height" required />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Prenom
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="prenom" placeholder="prenom du patient" value="<?= $p->getPrenom() ?>" class="form-control input-height " required />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Sexe
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="sexe">
                                                        <option value="<?= $p->getSexe(); ?>"><?= $p->getSexe(); ?></option>
                                                        <option value="Masculin">Masculin</option>
                                                        <option value="Feminin">Feminin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Date Naissance
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="date_naissance" data-mask="99/99/9999" value="<?= $p->getDateNaissance() ?>" placeholder="dd/mm/yyyy" class="form-control input-height" required>
                                                    <span class="help-block">jour/mois/année</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Addresse
                                                </label>
                                                <div class="col-md-5">
                                                    <textarea name="addresse" placeholder="addresse" class="form-control-textarea" rows="5"> <?= $p->getAdresse() ?></textarea>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                            <?php if ($p->getCin() != "") { ?>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">CIN <span class="required"> * </span></label>
                                                    <div class="col-md-5">
                                                        <input type="text" placeholder="cin" name="cin" readonly value="<?= $p->getCin() ?>" data-mask="99-99-99-9999-99-99999" class="form-control input-height">
                                                        <span class="help-block">99-99-99-9999-99-99999</span>
                                                        <input type="hidden" name="nif" value="" />
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <?php if ($p->getNif() != "") { ?>

                                                <div class="form-group row" id="nif_affiche">
                                                    <label class="control-label col-md-3">NIF</label>
                                                    <div class="col-md-5">
                                                        <input type="text" placeholder="nif" name="nif" id="nif_val" readonly value="<?= $p->getNif(); ?>" data-mask="999-999-999-9" class="form-control input-height">
                                                        <input type="hidden" name="cin" value="" />
                                                        <span class="help-block">999-999-999-9</span>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Telephone </label>
                                                <div class="col-md-5">
                                                    <input type="text" placeholder="telephone" name="telephone" value="<?= $p->getTelephone() ?>" data-mask="(999) 9999-9999" class="form-control input-height">
                                                    <span class="help-block">(999) 9999-9999</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Email
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <input type="mail" class="form-control input-height" name="email" value="<?= $p->getEmail() ?>" placeholder="email"></div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Statut matrimonial
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="statut_matrimonial">
                                                        <option value="celibataire"><?= $p->getStatutMatrimonial(); ?></option>
                                                        <option value="mariee">Mariée</option>
                                                        <option value="divorce">Divorcé</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Groupe sanguin
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="groupe_sanguin">
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
                                                    <input type="text" class="form-control input-height" name="profession" value="<?= $p->getProfession() ?>" placeholder="profession">
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="control-label col-md-3">personne de reference
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="nom_mere" placeholder="nom complet" value="<?= $p->getNomMere() ?>" class="form-control input-height " />
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="offset-md-3 col-md-9">
                                                        <button type="submit" class="btn btn-info m-r-20">Modifier</button>
                                                        <a href="<?= \systeme\Application\Application::genererUrl("modifier_patient") ?>" class="btn btn-default">Annuler</a>
                                                    </div>

                                                </div>
                                            </div>


                                        </div>

                                    </div>

                                </form>
                        <?php }
                        } ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
/**
 * Created by PhpStorm.
 * User: fater
 * Date: 9/28/2019
 * Time: 10:39 AM
 */
?>

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-head">
                <header>Ajouter Patient</header>
                <?= \systeme\Application\Application::block('tools') ?>
            </div>

            <div class="card-body">
                <form role="form" class="form-horizontal" action="ajouter-dossier" method="post"
                      enctype="multipart/form-data"
                      id="formulaire_ajouter_patient">
                    <div class="row col-md-12 col-lg-12 col-sm-12">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <input type="hidden" name="ajouter_patient"/>
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Code<span class="required"> * </span></label>
                                    <div class="col-md-5">
                                        <input type="text" name="code" class="form-control input-height"
                                               value="<?= rand(10, 999) ?>-<?= date('dm') ?>" readonly/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Nom
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="nom" placeholder="nom patient "
                                               class="form-control input-height" required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Prenom
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="prenom" placeholder="prenom du patient"
                                               class="form-control input-height " required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">personne de reference
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="nom_mere" placeholder="nom complet"
                                               class="form-control input-height " required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Date Naissance
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="date_naissance" data-mask="99/99/9999"
                                               placeholder="dd/mm/yyyy" class="form-control input-height" required>
                                        <span class="help-block">jour/mois/année</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Sexe
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <select class="form-control input-height" name="sexe">
                                            <option value="" aria-selected="true">Select...</option>
                                            <option value="Masculin">Masculin</option>
                                            <option value="Feminin">Feminin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">CIN <span class="required"> * </span></label>
                                    <div class="col-md-5">
                                        <input type="text" placeholder="cin" name="cin"
                                               data-mask="99-99-99-9999-99-99999" class="form-control input-height">
                                        <span class="help-block">99-99-99-9999-99-99999</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Telephone </label>
                                    <div class="col-md-5">
                                        <input type="text" placeholder="telephone" name="telephone"
                                               data-mask="(999) 9999-9999" class="form-control input-height">
                                        <span class="help-block">(999) 9999-9999</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Email
                                    </label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <input type="mail" class="form-control input-height" name="email"
                                                   placeholder="email"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Addresse
                                    </label>
                                    <div class="col-md-5">
                                        <textarea name="addresse" placeholder="addresse" class="form-control-textarea"
                                                  rows="5"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-3">Statut matrimonial
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <select class="form-control input-height" name="statut_matrimonial">
                                        <option value="" aria-selected="true">Select...</option>
                                        <option value="celibataire">Celibataire</option>
                                        <option value="mariee">Mariée</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-3">Groupe sanguin
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <select class="form-control input-height" name="groupe_sanguin">
                                        <option value="" aria-selected="true">Select...</option>
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
                                    <input type="text" class="form-control input-height" name="profession"
                                           placeholder="profession" name="bp">
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="offset-md-3 col-md-9">
                                        <button type="submit" class="btn btn-info m-r-20">Ajouter</button>
                                        <button type="reset" class="btn btn-default">Anuller</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>

    </div>
</div>

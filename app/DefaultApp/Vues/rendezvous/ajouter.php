<?php
/**
 * Created by PhpStorm.
 * User: Dolphe
 * Date: 10/06/2019
 * Time: 2:50 PM
 */
?>
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-topline-lightblue">
            <div class="card-head">
                <header>Ajouter Rendez-Vous</header>
                <?=\systeme\Application\Application::block('tools')?>
            </div>

            <div class="card-body" id="bar-parent">

                <div class="message"></div>
                <form id="formulaire_ajoutez_rendevous" class="form-horizontal" method="post">
                    <input type="hidden" name="ajouter_rendezvous" />
                    <div class="form-body">
                        <div class="form-group row">
                            <label class="control-label col-md-3">No Dossier
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <input type="text" name="no_dossier" id="dossier_no" placeholder="entrer no Dossier"
                                    class="form-control input-height dossier_no" required />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3"> Nom Complet
                            <span class="required"> </span>
                        </label>
                        <div class="col-md-5">
                            <input type="text" name="nom_complet" id="nomcomplet" class="form-control input-height"
                                readonly />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Date Rendez-Vous
                            <span class="required"> * </span>
                        </label>
                        <div class="input-append date col-md-5" id="dp1">
                            <input class="form-control" placeholder="Date Rendez-Vous" size="44" name="date_rendezvous"
                                id="dateR" type="text" readonly require="required">

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">De</label>

                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-md-5">
                                    <input class="form-control input-height" type="text" name="h_start" id="Hstart"
                                        value="13:45">
                                </div>
                                <label class="control-label small-label col-md-2">A </label>

                                <div class="col-md-5">
                                    <input class="form-control input-height" type="text" name="h_end" id="Hend"
                                        value="13:45">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-md-3">Medcin Consultant
                            <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                            <select class="form-control input-height" name="medecin" required>
                                <option value="">Select...</option>
                                <option value="1">Dr. Rajesh</option>
                                <option value="2">Dr. Sarah Smith</option>
                                <option value="3">Dr. John Deo</option>
                                <option value="4">Dr. Jay Soni</option>
                                <option value="5">Dr. Jacob Ryan</option>
                                <option value="6">Dr. Megha Trivedi</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="control-label col-md-3">Notes
                            <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                            <textarea name="note" class="form-control-textarea" placeholder="note" rows="5"
                                required></textarea>
                        </div>
                    </div>
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="offset-md-3 col-md-9">
                        <button type="submit" class="btn btn-info m-r-20 btn_ajouter">Ajouter</button>
                        <button type="reset" class="btn btn-default">Annuler</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

</div>
</div>

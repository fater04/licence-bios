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
                <header>Ajouter Consultation</header>
                <?=\systeme\Application\Application::block('tools')?>
            </div>

            <div class="card-body" id="bar-parent">

                <div class="message"></div>
                <form id="formulaire_ajoutez_rendevous" class="form-horizontal" method="post">
                    <input type="hidden" name="ajouter_rendezvous" />
                    <div class="form-body">
                        <div class="form-group row">
                            <label class="control-label col-md-3">Code
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <input type="text" name="no_dossier" id="dossier_no" placeholder="entrer code"
                                    class="form-control input-height dossier_no" required />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3"> Type
                            <span class="required"> </span>
                        </label>
                        <div class="col-md-5">
                            <select name="type" class="form-control" required>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">numero Dossier
                            <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                            <input type="text" name="firstname" data-required="1" placeholder="entrer numero dossier " class="form-control input-height" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Nom Complet Patient
                            <span class="required"> * </span>
                        </label>
                        <div class="col-md-5">
                            <input type="text" name="firstname" data-required="1" value="JHON SMITH" class="form-control input-height"  readonly/>
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
                        <label class="control-label col-md-3">Prescription
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

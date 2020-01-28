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
                <div class="card card-topline-lightblue">
                    <div class="card-head">
                        <header>Modifier Admission</header>
                        <div class="tools">
                            <?=\systeme\Application\Application::block('tools')?>
                        </div>
                    </div>
                    <div class="card-body ">

                        <?php if (!isset($listeRendezVous)) {?>

                            <div class="offset-lg-2 offset-md-2 col-md-6  col-lg-6 col-sm-12">
                                <form class="form-horizontal" method="POST">
                                    <div class="form-group row">
                                        <label for="horizontalFormEmail"
                                               class="col-sm-3 col-md-3 control-label">Code</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" placeholder="Entrez code"
                                                   name="critere"
                                                <?php if (isset($critere)) {?> value="<?=$critere?>" <?php }?>
                                                   required>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="submit" class="btn btn-info m-r-20">Rechercher</button>
                                        </div>
                                    </div>

                                </form>
                            </div><br/><br/>
                                <?php }?>
                        <?php if (isset($listeRendezVous)) {
    foreach ($listeRendezVous as $r1) {?>
	<form  id="formulaire_modifier_rendezvous" class="form-horizontal" method="post">
									<input type="hidden" name="modifier_rendezvous"/>
                                    <input type="hidden" name="id_rendezvous" value="<?=$r1->getId();?>"/>
										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3">No Dossier
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="no_dossier" id="dossier_no" value="<?=$r1->getCodePatient()?>" placeholder="entrer no Dossier" class="form-control input-height" required />
												</div>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3"> Nom Complet
													<span class="required"> </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="nom_complet"  id="nomcomplet" value="<?= \app\DefaultApp\Models\Patient::nomComplet($r1->getCodePatient())?>"  class="form-control input-height"  readonly/>
												</div>
											</div>
												<div class="form-group row">
												<label class="control-label col-md-3">Date Rendez-Vous
													<span class="required"> * </span>
												</label>
												<div class="input-append date col-md-5" id="dp1">
													<input class="formDatePicker" placeholder="Date Rendez-Vous" value="<?=$r1->getDateRendezVous()?>"  size="44" name="date_rendezvous" type="text" readonly require="required">
													<span class="add-on"><i class="fa fa-calendar"></i></span>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">De</label>

												<div class="col-md-5">
													<div class="row">
														<div class="col-md-5">
															<input class="form-control input-height" value="<?=$r1->getHeureDebut()?>" type="time" name="h_start" value="13:45:00" id="example-time-input" >
														</div>
														<label class="control-label small-label col-md-2">A </label>

														<div class="col-md-5">
															<input class="form-control input-height"  value="<?=$r1->getHeureFin()?>"type="time " name="h_end" value="13:45:00" id="example-time-input2">
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
														<option value="<?=$r1->getDateRendezVous()?>"><?=$r1->getIdMedecin()?></option>
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
													<textarea name="note" class="form-control-textarea" placeholder="note" rows="5" required><?=$r1->getNote()?></textarea>
												</div>
											</div>
                                            	<div class="form-actions">
											<div class="row">
												<div class="offset-md-3 col-md-9">
													<button type="submit" class="btn btn-info m-r-20">Modifier</button>
													<button type="reset" class="btn btn-default">Annuler</button>
												</div>
											</div>
										</div>
										</div>
									</form>
<?php }}?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


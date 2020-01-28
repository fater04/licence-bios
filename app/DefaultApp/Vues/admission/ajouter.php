
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
							<div class="card card-box">
								<div class="card-head">
									<header>Admission</header>
									
									
								</div>
								<div class="card-body" id="bar-parent">
									<form class="form-horizontal">
										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3">numero Salle
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="roomno" data-required="1" placeholder="enter numero chambre " class="form-control input-height" />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">numero Dossier
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="firstname" data-required="1" placeholder="entrer numero " class="form-control input-height" />
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
                                                <label class="control-label col-md-3">numero Chambre
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="firstname" data-required="1" placeholder="entrer numero " class="form-control input-height" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Maladie
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="firstname" data-required="1" placeholder="entrer maladie" class="form-control input-height" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3"> Date Affectation
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="firstname" data-required="1" placeholder="entrer maladie" class="form-control input-height"value="<?= date('d.m.Y H:i:s')?>"readonly />
                                                </div>
                                            </div>


										<div class="form-actions">
											<div class="row">
												<div class="offset-md-3 col-md-9">
													<button type="submit" class="btn btn-info m-r-20">Submit</button>
													<button type="button" class="btn btn-info">Cancel</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				
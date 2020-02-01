
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
									<header>Ajouter Salle</header>
									
									
								</div>
								<div class="card-body" id="bar-parent">
									<form class="form-horizontal" method="post">
										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3">numero Salle
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text"  required name="numero" data-required="1" placeholder="enter numero chambre " value="<?= rand(0000,9999)?>" readonly class="form-control input-height" />
												</div>
											</div>

											<div class="form-group row">
												<label class="control-label col-md-3">Type
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<select class="form-control input-height" name="types" required>
														<option value="" aria-selected="true">Select...</option>
														<option value="public">Public</option>
														<option value="prive">Privé</option>
														<option value="hospitalisation">Hospitalisation</option>
													</select>
												</div>
											</div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Nombre de lit
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="number" name="lit" data-required="1" min="0" max="10"  required placeholder="enter nombre de lit " class="form-control input-height" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Disponible
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="disponible" required>
                                                        <option value="OUI" aria-selected="true">OUI</option>
                                                        <option value="NON">NON</option>
                                                    </select>
                                                </div>
                                            </div>
										</div>
										<div class="form-actions">
											<div class="row">
												<div class="offset-md-3 col-md-9">
													<button type="submit" class="btn btn-info m-r-20">Ajouter</button>
													<button type="reset" class="btn btn-info">Annuler</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				
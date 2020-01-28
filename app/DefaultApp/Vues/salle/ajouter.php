
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
												<label class="control-label col-md-3">Type chambre
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<select class="form-control input-height" name="select">
														<option value="">Select...</option>
														<option value="Category 1">General</option>
														<option value="Category 2">Delux</option>
														<option value="Category 3">Soins Intensifs</option>
													</select>
												</div>
											</div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Nombre de lit
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="roomno" data-required="1" placeholder="enter nombre de lit " class="form-control input-height" />
                                                </div>
                                            </div>

										</div>
										<div class="form-actions">
											<div class="row">
												<div class="offset-md-3 col-md-9">
													<button type="submit" class="btn btn-info m-r-20">Ajouter</button>
													<button type="button" class="btn btn-info">Annuler</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				
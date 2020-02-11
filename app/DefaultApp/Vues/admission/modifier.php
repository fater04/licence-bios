

<div class="row" style="min-height:800px">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-topline-lightblue">
                    <div class="card-head">
                        <header>Modifier Admission</header>
                        <div class="tools">
                            <?= \systeme\Application\Application::block('tools') ?>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="offset-lg-2 offset-md-2 col-md-6  col-lg-6 col-sm-12">
                            <form class="form-horizontal" method="POST">
                                <div class="form-group row">
                                    <label for="horizontalFormEmail"
                                           class="col-sm-4 col-md-4 control-label">Numero Dossier</label>
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


                        <?php if (isset($listeAdmission)) { ?>
                            <div class="table-responsive">
                                <table class="table table-striped custom-table table-hover">
                                    <thead>
                                    <tr>
                                        <th>no Salle</th>
                                        <th>No Dossier</th>
                                        <th>Nom Complet</th>
                                        <th>Maladie</th>
                                        <th>Date Afectation</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($listeAdmission as $r1) { ?>
                                        <tr>
                                            <td><?= $r1->getNumeroSalle(); ?></td>
                                            <td><?= strtoupper($r1->getNumeroDossier()) ?></td>
                                            <td><?= \app\DefaultApp\Models\Patient::nomComplet($r1->getNumeroDossier()) ?></td>
                                            <td><?= $r1->getMaladie(); ?></td>
                                            <td><?= $r1->getDat(); ?></td>
                                            <td>
                                                <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#edit-<?= $r1->getId() ?>">
                                                    <i class="fa fa-pencil " ></i>
                                                </button>
                                                <div class="modal fade container" id="edit-<?= $r1->getId() ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="exampleModalLabel">Modifier Admission</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="form-horizontal" method="post">
                                                                    <div class="form-body">
                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-3">numero Salle
                                                                                <span class="required"> * </span>
                                                                            </label>
                                                                            <div class="col-md-5">
                                                                                <input type="text" name="salle" data-required="1" id="no_salle" placeholder="enter numero salle " value="<?=$r1->getNumeroSalle()?>" class="form-control input-height" />
                                                                                <span id="salle_affiche" class="text-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-3">numero Dossier
                                                                                <span class="required"> * </span>
                                                                            </label>
                                                                            <div class="col-md-5">
                                                                                <input type="text" name="dossier"readonly data-required="1" id="dossier_no"  value="<?=$r1->getNumeroDossier()?>" placeholder="entrer numero patient" class="form-control input-height" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-3">Nom Complet Patient
                                                                                <span class="required"> * </span>
                                                                            </label>
                                                                            <div class="col-md-5">
                                                                                <input type="text" data-required="1"   value="<?= \app\DefaultApp\Models\Patient::nomComplet($r1->getNumeroDossier())?>"id="nomcomplet" class="form-control input-height"  readonly/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-3">Maladie
                                                                                <span class="required"> * </span>
                                                                            </label>
                                                                            <div class="col-md-5">
                                                                                <input type="text" name="maladie" data-required="1" value="<?=$r1->getMaladie()?>" placeholder="entrer maladie" class="form-control input-height" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-3"> Date Affectation
                                                                                <span class="required"> * </span>
                                                                            </label>
                                                                            <div class="col-md-5">
                                                                                <input type="text" name="dat" data-required="1" placeholder="entrer maladie" class="form-control input-height" value="<?=$r1->getDat();?>"readonly />
                                                                            </div>
                                                                        </div>


                                                                        <div class="form-actions">
                                                                            <div class="row">
                                                                                <div class="offset-md-3 col-md-9">
                                                                                    <input type="hidden" name="idd" value="<?= $r1->getId()?>"/>
                                                                                    <input type="hidden" name="ancien_salle" value="<?= $r1->getNumeroSalle()?>"/>
                                                                                    <input type="submit" class="btn btn-info m-r-20 btn_ajouter" value="Modifier"/>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>

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

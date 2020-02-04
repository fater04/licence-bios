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
                        <header>Modifier Salle</header>
                        <div class="tools">
                            <?=\systeme\Application\Application::block('tools')?>
                        </div>
                    </div>
                    <div class="card-body ">

                        <?php if (!isset($listeSalle)) {?>

                            <div class="offset-lg-2 offset-md-2 col-md-6  col-lg-6 col-sm-12">
                                <form class="form-horizontal" method="POST">
                                    <div class="form-group row">
                                        <label for="horizontalFormEmail"
                                               class="col-sm-3 col-md-3 control-label">Code Salle</label>
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
                        <?php if (isset($listeSalle)) {
    foreach ($listeSalle as $r1) {?>

        <form class="form-horizontal" method="post">
            <div class="form-body">
                <div class="form-group row">
                    <label class="control-label col-md-3">numero Salle
                        <span class="required"> * </span>
                    </label>
                    <div class="col-md-5">
                        <input type="text"  required name="numero" data-required="1" placeholder="enter numero chambre " value="<?= $r1->getNumero()?>" readonly class="form-control input-height" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="control-label col-md-3">Type
                        <span class="required"> * </span>
                    </label>
                    <div class="col-md-5">
                        <select class="form-control input-height" name="types" required>
                            <option value="<?= $r1->getTypes()?>" aria-selected="true"><?= $r1->getTypes()?></option>
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
                        <input type="number" name="lit" data-required="1" min="0" max="10"  value="<?= $r1->getLit()?>" required placeholder="enter nombre de lit " class="form-control input-height" />
                    </div>
                </div>


            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="offset-md-3 col-md-9">
                        <input type="hidden" name="id" value="<?= $r1->getId()?>"/>
                        <button type="submit" class="btn btn-info m-r-20">Modifier</button>
                        <button type="reset" class="btn btn-info">Annuler</button>
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


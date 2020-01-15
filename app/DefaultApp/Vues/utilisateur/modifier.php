<?php
/**
 * Created by PhpStorm.
 * User: fater
 * Date: 9/25/2019
 * Time: 4:49 PM
 */
 if(isset($id)) {
     $user = new \app\DefaultApp\Models\Utilisateur();
     $u1 = $user->rechercher($id);
 }
?>
<div class="row" style="min-height:800px" >
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-topline-green">
                    <div class="card-head">
                        <header>Modifier Utilisateur</header>
                        <div class="tools">
                            &nbsp;
                        </div>
                    </div>
                    <div class="card-body ">
<?php if(!isset($id)){ ?>

                        <div class="offset-lg-2 offset-md-2 col-md-6  col-lg-6 col-sm-12">
                            <form class="form-horizontal" method="POST" >
                                <div class="form-group row">
                                    <label for="horizontalFormEmail" class="col-sm-3 col-md-3 control-label">Critere</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" placeholder="Critere..." name="critere" required>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-info m-r-20">Rechercher</button>
                                    </div>
                                </div>

                            </form>
                        </div><br/><br/>
                        <?php   if(isset($listeUtilisateur)){  ?>


                            <div class="table-responsive">
                                <table class="table table-striped custom-table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Nom & Prenom</th>
                                        <th>Pseudo</th>
                                        <th>Email</th>
                                        <th>Telephone</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach ($listeUtilisateur as $utilisateur) {  ?>
                                        <tr>
                                            <td><a href="#"><?= strtoupper($utilisateur->getNom()." ".$utilisateur->getPrenom()); ?></a></td>
                                            <td><?= $utilisateur->getPseudo(); ?></td>
                                            <td><?= $utilisateur->getEmail(); ?></td>
                                            <td><?= $utilisateur->getTelephone(); ?></td>
                                            <td><?= $utilisateur->getRole(); ?></td>
                                            <td><?php  if($utilisateur->getActive()=="oui"){ echo '<span class="label label-info label-mini">Active</span>'; }else{echo '<span class="label label-warning label-mini">Inactive</span>' ;}  ?></td>

                                            <td>
                                                <a href="utilisateur-<?=$utilisateur->getId()?>"
                                                <button class="btn btn-primary btn-xs">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                            </td>
                                        </tr>

                                    <?php   } ?>

                                    </tbody>
                                </table>
                            </div>
                        <?php } }else{ ?>
                        <form method="post"  class="form-horizontal" enctype="multipart/form-data">
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Nom
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="nom" value="<?= $u1->getNom()?>"  placeholder="Nom Utilisateur" class="form-control input-height" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Prenom
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="prenom" value="<?= $u1->getPrenom()?>"  placeholder="Prenom Utilisateur" class="form-control input-height" required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Pseudo
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text"  name="pseudo" value="<?=$u1->getPseudo()?>" placeholder="Pseudo" class="form-control input-height" required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Telephone
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="telephone" value="<?= $u1->getTelephone()?>"   placeholder="Telephone Utilisateur" class="form-control input-height" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Email
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <input type="email" class="form-control input-height" name="email" value="<?= $u1->getEmail() ?>"  placeholder="Email Utilisateur" required> </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Photo
                                    </label>
                                    <div class="compose-editor">
                                        <input type="file" class="form-control" id="image" name="image" placeholder="Image" accept="image/jpeg">
                                        <input type="hidden" name="path" value="<?=$u1->getPhoto()?>"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Role
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <select class="form-control input-height" name="role">
                                            <option value="<?=$u1->getRole()?>" aria-selected="true"><?=$u1->getRole()?></option>
                                            <option value="admin"> Administrateur</option>
                                            <option value="pharmacie"> Pharmacie </option>
                                            <option value="laboratoire">Laboratoire</option>
                                            <option value="archive">Archive</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Motdepasse
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="password" name="motdepasse" data-required="1" placeholder="Motdepasse" class="form-control input-height" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Confirmer Motdepasse
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="password"  name="confirmermotdepasse" data-required="1" placeholder="Confirmer motdepasse" class="form-control input-height"  />
                                    </div>
                                </div>



                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <input type="submit" class="btn btn-info m-r-20" value="Modifier"/>
<!--                                            <input type="reset" class="btn btn-default" value="Annuler"/>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                       <?php }?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


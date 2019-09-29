<?php
/**
 * Created by PhpStorm.
 * User: fater
 * Date: 9/24/2019
 * Time: 4:15 PM
 */
?>


<div class="row" style="min-height:800px" >
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-topline-green">
                    <div class="card-head">
                        <header>Recherche Utilisateur</header>
                        <div class="tools">
                            &nbsp;
                        </div>
                    </div>
                    <div class="card-body ">
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
<!--                                    <th>Action</th>-->
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

<!--                                            <td>-->
<!--                                                <button class="btn btn-success btn-xs">-->
<!--                                                    <i class="fa fa-check"></i>-->
<!--                                                </button>-->
<!--                                                <button class="btn btn-primary btn-xs">-->
<!--                                                    <i class="fa fa-pencil"></i>-->
<!--                                                </button>-->
<!--                                                <button class="btn btn-danger btn-xs">-->
<!--                                                    <i class="fa fa-trash-o "></i>-->
<!--                                                </button>-->
<!--                                            </td>-->
                                        </tr>

                                    <?php   } ?>

                                </tbody>
                            </table>
                        </div>
                                <?php } ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

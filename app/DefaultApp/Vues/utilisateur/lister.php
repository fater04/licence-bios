<?php
/**
 * Created by PhpStorm.
 * User: fater
 * Date: 9/24/2019
 * Time: 3:42 PM
 */
?>


<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-topline-green">
                    <div class="card-head">
                        <header>Liste des Utilisateurs </header>
                        <div class="tools">
                          &nbsp;
                        </div>
                    </div>
                    <div class="card-body ">
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

                                <?php
                                if(isset($listeUtilisateur))
                                {
                                foreach ($listeUtilisateur as $utilisateur) {
                                ?>
                                <tr>
                                    <td><a href="#"><?= strtoupper($utilisateur->getNom()." ".$utilisateur->getPrenom()); ?></a></td>
                                    <td><?= $utilisateur->getPseudo(); ?></td>
                                    <td><?= $utilisateur->getEmail(); ?></td>
                                    <td><?= $utilisateur->getTelephone(); ?></td>
                                    <td><?= $utilisateur->getRole(); ?></td>
                                    <td><?php  if($utilisateur->getActive()=="oui"){ echo '<span class="label label-info label-mini">Active</span>'; }else{echo '<span class="label label-warning label-mini">Inactive</span>' ;}  ?></td>

<!--                                    <td>-->
<!--                                        <button class="btn btn-success btn-xs">-->
<!--                                            <i class="fa fa-check"></i>-->
<!--                                        </button>-->
<!--                                        <button class="btn btn-primary btn-xs">-->
<!--                                            <i class="fa fa-pencil"></i>-->
<!--                                        </button>-->
<!--                                        <button class="btn btn-danger btn-xs">-->
<!--                                            <i class="fa fa-trash-o "></i>-->
<!--                                        </button>-->
<!--                                    </td>-->
                                </tr>

                             <?php   }  } ?>
                        </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

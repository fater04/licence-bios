<?php

/**
 * Created by PhpStorm.
 * User: fater
 * Date: 9/23/2019
 * Time: 6:28 PM
 */
?>
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-head">
                <header>Ajouter Utilisateur</header>

            </div>
            <div class="card-body" id="bar-parent">
                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="form-group row">
                            <label class="control-label col-md-3">Nom
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <input type="text" name="nom" placeholder="Nom Utilisateur" class="form-control input-height" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Prenom
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <input type="text" name="prenom" placeholder="Prenom Utilisateur" class="form-control input-height" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Pseudo
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <input type="text" name="pseudo" placeholder="Pseudo" class="form-control input-height" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Telephone
                            </label>
                            <div class="col-md-5">
                                <input type="text" name="telephone" placeholder="Telephone Utilisateur" class="form-control input-height" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Email
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <div class="input-group">
                                    <input type="email" class="form-control input-height" name="email" placeholder="Email Utilisateur" required> </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Photo
                            </label>
                            <div class="compose-editor">
                                <input type="file" class="form-control" id="image" name="image" placeholder="Image" accept="image/jpeg">
                            </div>
                        </div>
                        <script>
                            function myFunction() {
                                var x = document.getElementById("choix").value;
                                if (x == "infirmiere" || x == "medecin") {
                                    document.getElementById('add_cin').style.display = 'block';
                                } else {
                                    document.getElementById('add_cin').style.display = 'none';
                                }
                            }
                        </script>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Role
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <select class="form-control input-height" name="role" id="choix" onChange="myFunction()">
                                    <option value="" aria-selected="true">Select...</option>
                                    <option value="infirmiere"> Infirmiere</option>
                                    <option value="medecin">Medecin</option>
                                    <option value="admin"> Administrateur</option>


                                </select>
                            </div>
                        </div>
                        <div class="form-group" id="add_cin" style="display:none">

                            <div class="row">
                                <label class="control-label col-md-3">CIN
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="cin2" class="form-control input-height" />
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="cin1" class="form-control input-height" />
                        <div class="form-group row">
                            <label class="control-label col-md-3">Motdepasse
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <input type="password" name="motdepasse" data-required="1" placeholder="Motdepasse" class="form-control input-height" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Confirmer Motdepasse
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <input type="password" name="confirmermotdepasse" data-required="1" placeholder="Confirmer motdepasse" class="form-control input-height" required />
                            </div>
                        </div>



                        <div class="form-actions">
                            <div class="row">
                                <div class="offset-md-3 col-md-9">

                                    <input type="submit" class="btn btn-info m-r-20" value="Ajouter" />
                                    <input type="reset" class="btn btn-default" value="Annuler" />
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
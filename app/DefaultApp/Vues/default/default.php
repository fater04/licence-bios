<?php
/**
 * Created by PhpStorm.
 * User: fater
 * Date: 9/22/2019
 * Time: 10:24 PM
 */
?>

<!-- start widget -->
<div class="state-overview">
    <div class="row">
        <div class="col-xl-3 col-md-6 col-12">
            <div class="info-box bg-blue">
                <span class="info-box-icon push-bottom"><i class="fa fa-folder"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Rendez-Vous</span>
                    <span class="info-box-number">450</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 45%"></div>
                    </div>
                    <span class="progress-description">
											45% Increase in 28 Days
										</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
            <div class="info-box bg-orange">
                <span class="info-box-icon push-bottom"><i class="fa fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Patients</span>
                    <span class="info-box-number">155</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 40%"></div>
                    </div>
                    <span class="progress-description">
											40% Increase in 28 Days
										</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
            <div class="info-box bg-purple">
                <span class="info-box-icon push-bottom"><i class="fa fa-bed"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Salles Disponible</span>
                    <span class="info-box-number">52</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 85%"></div>
                    </div>
                    <span class="progress-description">
											85% Increase in 28 Days
										</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
            <div class="info-box bg-success">
                <span class="info-box-icon push-bottom"><i class="fa fa-stethoscope"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Hospitalisation</span>
                    <span class="info-box-number">13,921</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                    <span class="progress-description">
											50% Increase in 28 Days
										</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
</div>
<!-- end widget -->
<!-- chart start -->


<!-- start admited patient list -->
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card  card-box">
            <div class="card-head">
                <header>ADMIT PATIENT LIST</header>
                <div class="tools">
                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                </div>
            </div>
            <div class="card-body ">
                <div class="table-wrap">
                    <div class="table-responsive">
                        <table class="table display product-overview mb-30" id="support_table">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Assigned Doctor</th>
                                <th>Date Of Admit</th>
                                <th>Diseases</th>
                                <th>Room No</th>
                                <th>Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Jens Brincker</td>
                                <td>Dr.Kenny Josh</td>
                                <td>27/05/2016</td>
                                <td>
                                    <span class="label label-sm label-success">Influenza</span>
                                </td>
                                <td>101</td>
                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a>
                                    <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Mark Hay</td>
                                <td>Dr. Mark</td>
                                <td>26/05/2017</td>
                                <td>
                                    <span class="label label-sm label-warning"> Cholera </span>
                                </td>
                                <td>105</td>
                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a>
                                    <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Anthony Davie</td>
                                <td>Dr.Cinnabar</td>
                                <td>21/05/2016</td>
                                <td>
                                    <span class="label label-sm label-success ">Amoebiasis</span>
                                </td>
                                <td>106</td>
                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a>
                                    <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>David Perry</td>
                                <td>Dr.Felix </td>
                                <td>20/04/2016</td>
                                <td>
                                    <span class="label label-sm label-danger">Jaundice</span>
                                </td>
                                <td>105</td>
                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a>
                                    <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Anthony Davie</td>
                                <td>Dr.Beryl</td>
                                <td>24/05/2016</td>
                                <td>
                                    <span class="label label-sm label-success ">Leptospirosis</span>
                                </td>
                                <td>102</td>
                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a>
                                    <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Alan Gilchrist</td>
                                <td>Dr.Joshep</td>
                                <td>22/05/2016</td>
                                <td>
                                    <span class="label label-sm label-warning ">Hepatitis</span>
                                </td>
                                <td>103</td>
                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a>
                                    <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Mark Hay</td>
                                <td>Dr.Jayesh</td>
                                <td>18/06/2016</td>
                                <td>
                                    <span class="label label-sm label-success ">Typhoid</span>
                                </td>
                                <td>107</td>
                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a>
                                    <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Sue Woodger</td>
                                <td>Dr.Sharma</td>
                                <td>17/05/2016</td>
                                <td>
                                    <span class="label label-sm label-danger">Malaria</span>
                                </td>
                                <td>108</td>
                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a>
                                    <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end admited patient list -->

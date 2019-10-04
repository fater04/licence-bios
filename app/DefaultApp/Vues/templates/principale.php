<?php use systeme\Application\Application as app;

if (!\app\DefaultApp\Models\Utilisateur::session()) {
    \systeme\Application\Application::redirection("login");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>

    <title>Logiciel - <?php if (isset($titre)) echo $titre; ?></title>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="<?= app::autre("assets/simple-line-icons/simple-line-icons.min.css") ?>" rel="stylesheet"
          type="text/css"/>
    <link href="<?= app::css("font-awesome.min") ?>" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="<?= app::autre("assets/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= app::autre("assets/bootstrap-datepicker/datepicker.css") ?>" rel="stylesheet" type="text/css"/>

    <link href="<?= app::autre("assets/material/material.min.css") ?>" rel="stylesheet" type="text/css"/>

    <link href="<?= app::css("material_style") ?>" rel="stylesheet" type="text/css"/>
    <!-- sweet alert -->
    <link rel="stylesheet" href="<?= app::autre("assets/sweet-alert/sweetalert.min.css") ?>"/>
    <link href="<?= app::css("theme_style") ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= app::css("style") ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= app::css("plugins.min") ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= app::css("formlayout.css") ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= app::css("responsive") ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= app::css("theme-color") ?>" rel="stylesheet" type="text/css"/>

    <link href="<?= app::autre("assets/toastr/toastr.min.css") ?>" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

</head>

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
<script type="text/javascript">

    $.confirm({
        icon: 'fa fa-question',
        theme: 'bootstrap',
        closeIcon: true,
        animation: 'scale',
        type: 'orange',
        title: 'Confirm!',
        content: 'Simple confirm!',
        buttons: {
            confirm: function () {
                $.alert('Confirmed!');
            },
            cancel: function () {
                $.alert('Canceled!');
            },
            somethingElse: {
                text: 'Something else',
                btnClass: 'btn-blue',
                keys: ['enter', 'shift'],
                action: function(){
                    $.alert('Something else?');
                }
            }
        }
    });
</script>
<div class="page-wrapper">
    <!-- start header -->
    <div class="page-header navbar navbar-fixed-top">
        <div class="page-header-inner ">
            <!-- logo start -->
            <div class="page-logo">
                <a href="index.html">
                    <span class="logo-icon fa fa-stethoscope fa-rotate-45"></span>
                    <span class="logo-default">REDSTAR</span> </a>
            </div>
            <!-- logo end -->
            <ul class="nav navbar-nav navbar-left in">
                <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
            </ul>

            <!-- start mobile menu -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
               data-target=".navbar-collapse">
                <span></span>
            </a>
            <!-- end mobile menu -->
            <!-- start header menu -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">

                    <!-- start notification dropdown -->
                    <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge headerBadgeColor1"> 6 </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="external">
                                <h3><span class="bold">Notifications</span></h3>
                                <span class="notification-label purple-bgcolor">New 6</span>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">just now</span>
                                            <span class="details">
													<span class="notification-icon circle deepPink-bgcolor"><i
                                                                class="fa fa-check"></i></span>
													Congratulations!. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">3 mins</span>
                                            <span class="details">
													<span class="notification-icon circle purple-bgcolor"><i
                                                                class="fa fa-user o"></i></span>
													<b>John Micle </b>is now following you. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">7 mins</span>
                                            <span class="details">
													<span class="notification-icon circle blue-bgcolor"><i
                                                                class="fa fa-comments-o"></i></span>
													<b>Sneha Jogi </b>sent you a message. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">12 mins</span>
                                            <span class="details">
													<span class="notification-icon circle pink"><i
                                                                class="fa fa-heart"></i></span>
													<b>Ravi Patel </b>like your photo. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">15 mins</span>
                                            <span class="details">
													<span class="notification-icon circle yellow"><i
                                                                class="fa fa-warning"></i></span> Warning! </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">10 hrs</span>
                                            <span class="details">
													<span class="notification-icon circle red"><i
                                                                class="fa fa-times"></i></span> Application error. </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-menu-footer">
                                    <a href="javascript:void(0)"> All notifications </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- end notification dropdown -->

                    <!-- start manage user dropdown -->
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <img alt="" class="img-circle " src="<?=
                            \app\DefaultApp\Models\Utilisateur::avatar(\app\DefaultApp\Models\Utilisateur::pseudo()) == 'n/a' ? app::autre('img/dp.jpg') : \app\DefaultApp\Models\Utilisateur::avatar(\app\DefaultApp\Models\Utilisateur::pseudo()) ?>"/>
                            <span class="username username-hide-on-mobile"> <?= ucfirst(\app\DefaultApp\Models\Utilisateur::pseudo()); ?> </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">

<!--                            <li>-->
<!--                                <a href="#">-->
<!--                                    <i class="icon-pencil"></i>Mot de passe-->
<!--                                </a>-->
<!--                            </li>-->

                            <li class="divider"></li>

                            <li>
                                <a href="deconnection">
                                    <i class="icon-logout"></i> Deconnecter </a>
                            </li>
                        </ul>
                    </li>
                    <!-- end manage user dropdown -->

                </ul>
            </div>
        </div>
    </div>
    <!-- end header -->


    <!-- start page container -->
    <div class="page-container">
        <!-- start sidebar menu -->
        <div class="sidebar-container">
            <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                <div id="remove-scroll" class="left-sidemenu">
                    <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
                        data-auto-scroll="true"
                        data-slide-speed="200" style="padding-top: 20px">
                        <li class="sidebar-toggler-wrapper hide">
                            <div class="sidebar-toggler">
                                <span></span>
                            </div>
                        </li>

                        <li class="nav-item <?php if (isset($active)) echo $active; ?> ">
                            <a href="<?= \systeme\Application\Application::genererUrl("dashboard") ?>"
                               class="nav-link ">
                                <i class="fa fa-dashboard"></i>
                                <span class="title">DAshboard</span>
                                <span class="selected"></span>
                            </a>

                            <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary"
                                    data-type="confirm">CLICK ME</button>
                        </li>
                        <li class="nav-item <?php if (isset($active1)) echo $active1; ?>  ">
                            <a href="#" class="nav-link nav-toggle"> <i class="fa fa-folder"></i>
                                <span class="title">Dossier</span> <span class="arrow"></span>

                            </a>

                            <ul class="sub-menu">
                                <li class="nav-item  <?php if (isset($active11)) echo $active11; ?>  ">
                                    <a href="<?= \systeme\Application\Application::genererUrl("ajouter_patient") ?>"
                                       class="nav-link "> <span class="title">Ajouter Patient</span>
                                    </a>
                                </li>
                                <li class="nav-item  <?php if (isset($active12)) echo $active12; ?>  ">
                                    <a href="<?= \systeme\Application\Application::genererUrl("rechercher_patient") ?>"
                                       class="nav-link "> <span class="title">Rechercher Patient</span>
                                    </a>
                                </li>
                                <li class="nav-item  <?php if (isset($active13)) echo $active13; ?>  ">
                                    <a href="<?= \systeme\Application\Application::genererUrl("modifier_patient") ?>"
                                       class="nav-link "> <span class="title">Modifier Patient</span>
                                    </a>
                                </li>
                                <li class="nav-item  <?php if (isset($active14)) echo $active14; ?>  ">
                                    <a href="<?= \systeme\Application\Application::genererUrl("lister_patient") ?>"
                                       class="nav-link "> <span class="title">lister Patient</span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item <?php if (isset($active0)) echo $active0; ?>  ">
                            <a href="#" class="nav-link nav-toggle"> <i class="fa fa-user"></i>
                                <span class="title">Utilisateurs</span> <span class="arrow"></span>

                            </a>

                            <ul class="sub-menu">
                                <li class="nav-item  <?php if (isset($active01)) echo $active01; ?>  ">
                                    <a href="<?= \systeme\Application\Application::genererUrl("ajouter_utilisateur") ?>"
                                       class="nav-link "> <span class="title">Ajouter Utilisateur</span>
                                    </a>
                                </li>
                                <li class="nav-item   <?php if (isset($active02)) echo $active02; ?> ">
                                    <a href="<?= \systeme\Application\Application::genererUrl("rechercher-utilisateur") ?>"
                                       class="nav-link "> <span class="title">Rechercher Utilisateur</span>
                                    </a>
                                </li>
                                <li class="nav-item   <?php if (isset($active03)) echo $active03; ?> ">
                                    <a href="<?= \systeme\Application\Application::genererUrl("modifier-utilisateur") ?>"
                                       class="nav-link "> <span class="title">Modifier Utilisateur</span>
                                    </a>
                                </li>
                                <li class="nav-item   <?php if (isset($active04)) echo $active04; ?> ">
                                    <a href="<?= \systeme\Application\Application::genererUrl("utilisateur") ?>"
                                       class="nav-link "> <span class="title">Liste Utilisateurs</span>
                                    </a>
                                </li>


                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <!-- end sidebar menu -->

        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="page-bar">
                    <div class="page-title-breadcrumb">
                        <div class=" pull-left">
                            <div class="page-title"><?php if (isset($entete)) echo $entete; ?> </div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                                   href="<?= \systeme\Application\Application::genererUrl("dashboard") ?>">Tableau
                                    de Bord</a>&nbsp;<i
                                        class="fa fa-angle-right"></i>
                            </li>
                            <li class="active"><?php if (isset($entete)) echo $entete; ?></li>
                        </ol>
                    </div>
                </div>


                <?php if (isset($erreur)) { ?>
                    <div class="alert alert-danger">
                        <strong> <?= $erreur ?></strong>

                    </div>
                <?php } ?>

                <?php if (isset($success)) {
                    ?>
                    <div class="alert alert-success">
                        <?= $success ?>
                    </div>
                <?php } ?>
                <?php
                if (isset($contenue)) {
                    echo $contenue;
                } else {
                    echo "pas de contenue";
                }
                ?>
            </div>
        </div>
    </div>
    <div class="page-footer">
        <div class="page-footer-inner"> 2019 &copy; Licence-bios 2.0
            <a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">BIOS</a>
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
</div>

<script src="<?php echo app::autre("assets/jquery.min.js") ?>"></script>
<script src="<?php echo app::autre("assets/popper/popper.js") ?>"></script>
<script src="<?php echo app::autre("assets/jquery.blockui.min.js") ?>"></script>
<script src="<?php echo app::autre("assets/jquery-validation/js/jquery.validate.min.js") ?>"></script>
<script src="<?php echo app::autre("assets/jquery-validation/js/additional-methods.min.js") ?>"></script>
<script src="<?php echo app::autre("assets/jquery.slimscroll.js") ?>"></script>


<script src="<?php echo app::autre("assets/bootstrap/js/bootstrap.min.js") ?>"></script>
<script src="<?php echo app::autre("assets/bootstrap-switch/js/bootstrap-switch.min.js") ?>"></script>
<script src="<?php echo app::autre("assets/bootstrap-inputmask/bootstrap-inputmask.min.js") ?>"></script>
<script src="<?php echo app::autre("assets/bootstrap-datepicker/bootstrap-datepicker.js") ?>"></script>
<script src="<?php echo app::autre("assets/bootstrap-datepicker/bootstrap-datepicker-init.js") ?>"></script>

<script src="<?php echo app::autre("assets/toastr/toastr.min.js") ?>"></script>

<script src="<?php echo app::autre("assets/counterup/jquery.waypoints.min.js") ?>"></script>
<script src="<?php echo app::autre("assets/counterup/jquery.counterup.min.js") ?>"></script>

<script src="<?php echo app::autre("assets/sweet-alert/sweetalert.min.js") ?>"></script>
<script src="<?php echo app::autre("assets/sweet-alert/sweet-alert-data.js") ?>"></script>

<script src="<?php echo app::autre("assets/app.js") ?>"></script>
<script src="<?php echo app::autre("assets/form-validation.js") ?>"></script>
<script src="<?php echo app::autre("assets/layout.js") ?>"></script>
<script src="<?php echo app::autre("assets/theme-color.js") ?>"></script>

<script src="<?php echo app::autre("assets/material/material.min.j") ?>"></script>

<script src="<?php echo app::autre("assets/chart-js/Chart.bundle.js") ?>"></script>
<script src="<?php echo app::autre("assets/chart-js/utils.js") ?>"></script>
<script src="<?php echo app::autre("assets/chart-js/home-data.js") ?>"></script>
<script src="<?php echo app::autre("assets/bios.js") ?>"></script>
<!--<script type="text/javascript">-->
<!--    $(document).ready(function () {-->
<!--        $(".alert").delay(4000).slideUp(200, function () {-->
<!--            $(this).alert('close');-->
<!--        });-->
<!--    });-->
<!--</script>-->


<?php if (isset($notification)) { ?>
    <script type="text/javascript">
        $(document).ready(function () {
            toastr["<?=$notification['type']?>"]("<?=$notification['message']?>", "<?=$notification['titre']?>", {
                "closeButton": true,
                "debug": true,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            });


        });

    </script>
<?php } ?>
<div class="msg_affiche">

</div>

<script src="<?php echo app::autre("") ?>"></script>


</body>
</html>
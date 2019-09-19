<?php use systeme\Application\Application as app;?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="RedstarHospital" />
    <title><?php if(isset($titre))echo $titre; ?></title>
   <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
    <link href="<?= app::css("font-awesome.min") ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= app::autre("assets/iconic/css/material-design-iconic-font.min.css") ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= app::autre("assets/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= app::css("extra_pages") ?>" rel="stylesheet" type="text/css"/>

</head>

<body>
<div class="limiter">
    <div class="container-login100 page-background">
        <div class="wrap-login100">
            <?php
            if(isset($contenue)){echo $contenue;}else{echo "pas de contenue";}
            ?>
        </div>
    </div>
</div>
<script src="<?php echo app::autre("assets/jquery.min.js") ?>"></script>
<script src="<?php echo app::autre("assets/bootstrap/js/bootstrap.min.js") ?>"></script>
<script src="<?php echo app::autre("assets/login.js") ?>"></script>
</body>
</html>
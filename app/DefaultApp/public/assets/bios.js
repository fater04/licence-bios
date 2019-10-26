$('document').ready(function () {

    // patient
    $("#formulaire_ajouter_patient").on('submit', (function (e) {
        e.preventDefault();
        $.ajax({
            url: "app/DefaultApp/traitements/patient.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data.trim() == "ok") {
                    // $('#ajax-loading').hide();
                    $(".msg_affiche").html("<script type='text/javascript'>\n" +
                        "        $(document).ready(function () {\n" +
                        "            toastr['success']('Patient(e) ajoute(e) avec Succes !', 'Succès', {\n" +
                        "                'closeButton': true,\n" +
                        "                'debug': true,\n" +
                        "                'newestOnTop': true,\n" +
                        "                'progressBar': true,\n" +
                        "                'positionClass': 'toast-top-right',\n" +
                        "                'preventDuplicates': false,\n" +
                        "                'showDuration': '300',\n" +
                        "                'hideDuration': '1000',\n" +
                        "                'timeOut': '5000',\n" +
                        "                'extendedTimeOut': '1000',\n" +
                        "                'showEasing': 'swing',\n" +
                        "                'hideEasing': 'linear',\n" +
                        "                'showMethod': 'fadeIn',\n" +
                        "                'hideMethod': 'fadeOut'\n" +
                        "            });\n" +
                        "\n" +
                        "\n" +
                        "        });\n" +
                        "\n" +
                        "    </script>");
                    $('#formulaire_ajouter_patient')[0].reset();
                } else {
                    $(".msg_affiche").html("<script type='text/javascript'>\n" +
                        "        $(document).ready(function () {\n" +
                        "            toastr['error']('" + data + "', 'Erreur', {\n" +
                        "                'closeButton': true,\n" +
                        "                'debug': true,\n" +
                        "                'newestOnTop': true,\n" +
                        "                'progressBar': true,\n" +
                        "                'positionClass': 'toast-top-right',\n" +
                        "                'preventDuplicates': false,\n" +
                        "                'showDuration': '300',\n" +
                        "                'hideDuration': '1000',\n" +
                        "                'timeOut': '5000',\n" +
                        "                'extendedTimeOut': '1000',\n" +
                        "                'showEasing': 'swing',\n" +
                        "                'hideEasing': 'linear',\n" +
                        "                'showMethod': 'fadeIn',\n" +
                        "                'hideMethod': 'fadeOut'\n" +
                        "            });\n" +
                        "\n" +
                        "\n" +
                        "        });\n" +
                        "\n" +
                        "    </script>");
                }


            }
        });
    }));

    $("#formulaire_modifier_patient").on('submit', (function (e) {
        e.preventDefault();
        $.ajax({
            url: "app/DefaultApp/traitements/patient.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {

                if (data.trim() == "ok") {
                    // $('#ajax-loading').hide();
                    $(".msg_affiche").html("<script type='text/javascript'>\n" +
                        "        $(document).ready(function () {\n" +
                        "            toastr['success']('Patient(e) modifie(e) avec Succes !', 'Succès', {\n" +
                        "                'closeButton': true,\n" +
                        "                'debug': true,\n" +
                        "                'newestOnTop': true,\n" +
                        "                'progressBar': true,\n" +
                        "                'positionClass': 'toast-top-right',\n" +
                        "                'preventDuplicates': false,\n" +
                        "                'showDuration': '300',\n" +
                        "                'hideDuration': '1000',\n" +
                        "                'timeOut': '5000',\n" +
                        "                'extendedTimeOut': '1000',\n" +
                        "                'showEasing': 'swing',\n" +
                        "                'hideEasing': 'linear',\n" +
                        "                'showMethod': 'fadeIn',\n" +
                        "                'hideMethod': 'fadeOut'\n" +
                        "            });\n" +
                        "\n" +
                        "\n" +
                        "        });\n" +
                        "\n" +
                        "    </script>");
                    window.setTimeout(function () {

                        document.location.href = 'modifier-patient';

                    }, 5000);
                } else {
                    $(".msg_affiche").html("<script type='text/javascript'>\n" +
                        "        $(document).ready(function () {\n" +
                        "            toastr['error']('" + data + "', 'Erreur', {\n" +
                        "                'closeButton': true,\n" +
                        "                'debug': true,\n" +
                        "                'newestOnTop': true,\n" +
                        "                'progressBar': true,\n" +
                        "                'positionClass': 'toast-top-right',\n" +
                        "                'preventDuplicates': false,\n" +
                        "                'showDuration': '300',\n" +
                        "                'hideDuration': '1000',\n" +
                        "                'timeOut': '5000',\n" +
                        "                'extendedTimeOut': '1000',\n" +
                        "                'showEasing': 'swing',\n" +
                        "                'hideEasing': 'linear',\n" +
                        "                'showMethod': 'fadeIn',\n" +
                        "                'hideMethod': 'fadeOut'\n" +
                        "            });\n" +
                        "\n" +
                        "\n" +
                        "        });\n" +
                        "\n" +
                        "    </script>");
                }


            }
        });
    }));

    // rendezvous

    $("#formulaire_ajoutez_rendevous").on('submit', (function (e) {
        e.preventDefault();
        $.ajax({
            url: "app/DefaultApp/traitements/RendezVous.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data.trim() == "ok") {
                    // $('#ajax-loading').hide();
                    $(".msg_affiche").html("<script type='text/javascript'>\n" +
                        "        $(document).ready(function () {\n" +
                        "            toastr['success']('Rendez-Vous ajoute avec Succes !', 'Succès', {\n" +
                        "                'closeButton': true,\n" +
                        "                'debug': true,\n" +
                        "                'newestOnTop': true,\n" +
                        "                'progressBar': true,\n" +
                        "                'positionClass': 'toast-top-right',\n" +
                        "                'preventDuplicates': false,\n" +
                        "                'showDuration': '300',\n" +
                        "                'hideDuration': '1000',\n" +
                        "                'timeOut': '5000',\n" +
                        "                'extendedTimeOut': '1000',\n" +
                        "                'showEasing': 'swing',\n" +
                        "                'hideEasing': 'linear',\n" +
                        "                'showMethod': 'fadeIn',\n" +
                        "                'hideMethod': 'fadeOut'\n" +
                        "            });\n" +
                        "\n" +
                        "\n" +
                        "        });\n" +
                        "\n" +
                        "    </script>");
                    $('#formulaire_ajoutez_rendevous')[0].reset();
                } else {
                    $(".msg_affiche").html("<script type='text/javascript'>\n" +
                        "        $(document).ready(function () {\n" +
                        "            toastr['error']('" + data + "', 'Erreur', {\n" +
                        "                'closeButton': true,\n" +
                        "                'debug': true,\n" +
                        "                'newestOnTop': true,\n" +
                        "                'progressBar': true,\n" +
                        "                'positionClass': 'toast-top-right',\n" +
                        "                'preventDuplicates': false,\n" +
                        "                'showDuration': '300',\n" +
                        "                'hideDuration': '1000',\n" +
                        "                'timeOut': '5000',\n" +
                        "                'extendedTimeOut': '1000',\n" +
                        "                'showEasing': 'swing',\n" +
                        "                'hideEasing': 'linear',\n" +
                        "                'showMethod': 'fadeIn',\n" +
                        "                'hideMethod': 'fadeOut'\n" +
                        "            });\n" +
                        "\n" +
                        "\n" +
                        "        });\n" +
                        "\n" +
                        "    </script>");
                }


            }
        });
    }));

    $("#formulaire_modifier_rendezvous").on('submit', (function (e) {
        e.preventDefault();
        $.ajax({
            url: "app/DefaultApp/traitements/RendezVous.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data.trim() == "ok") {
                    // $('#ajax-loading').hide();
                    $(".msg_affiche").html("<script type='text/javascript'>\n" +
                        "        $(document).ready(function () {\n" +
                        "            toastr['success']('Rendez-Vous modifier avec Succes !', 'Succès', {\n" +
                        "                'closeButton': true,\n" +
                        "                'debug': true,\n" +
                        "                'newestOnTop': true,\n" +
                        "                'progressBar': true,\n" +
                        "                'positionClass': 'toast-top-right',\n" +
                        "                'preventDuplicates': false,\n" +
                        "                'showDuration': '300',\n" +
                        "                'hideDuration': '1000',\n" +
                        "                'timeOut': '5000',\n" +
                        "                'extendedTimeOut': '1000',\n" +
                        "                'showEasing': 'swing',\n" +
                        "                'hideEasing': 'linear',\n" +
                        "                'showMethod': 'fadeIn',\n" +
                        "                'hideMethod': 'fadeOut'\n" +
                        "            });\n" +
                        "\n" +
                        "\n" +
                        "        });\n" +
                        "\n" +
                        "    </script>");
                    window.setTimeout(function () {

                        document.location.href = 'modifier-RendezVous';

                    }, 5000);
                } else {
                    $(".msg_affiche").html("<script type='text/javascript'>\n" +
                        "        $(document).ready(function () {\n" +
                        "            toastr['error']('" + data + "', 'Erreur', {\n" +
                        "                'closeButton': true,\n" +
                        "                'debug': true,\n" +
                        "                'newestOnTop': true,\n" +
                        "                'progressBar': true,\n" +
                        "                'positionClass': 'toast-top-right',\n" +
                        "                'preventDuplicates': false,\n" +
                        "                'showDuration': '300',\n" +
                        "                'hideDuration': '1000',\n" +
                        "                'timeOut': '5000',\n" +
                        "                'extendedTimeOut': '1000',\n" +
                        "                'showEasing': 'swing',\n" +
                        "                'hideEasing': 'linear',\n" +
                        "                'showMethod': 'fadeIn',\n" +
                        "                'hideMethod': 'fadeOut'\n" +
                        "            });\n" +
                        "\n" +
                        "\n" +
                        "        });\n" +
                        "\n" +
                        "    </script>");
                }


            }
        });
    }));




});
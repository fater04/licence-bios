$('document').ready(function () {

    $("#formulaire_ajouter_patient").on('submit', (function (e) {
         // $('#ajax-loading').show();

    e.preventDefault();
    $.ajax({
        url: "app/DefaultApp/traitements/patient.php",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {

            if(data.trim()=="ok"){
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
            }else{
                $(".msg_affiche").html("<script type='text/javascript'>\n" +
                    "        $(document).ready(function () {\n" +
                    "            toastr['error']('"+data+"', 'Erreur', {\n" +
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
alert('ok');
    $("#formulaire_modifier_patient").on('submit', (function (e) {
        // $('#ajax-loading').show();

        e.preventDefault();
        $.ajax({
            url: "app/DefaultApp/traitements/patient.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {

                if(data.trim()=="ok"){
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
                    document.location.href = 'modifier-patient';
                }else{
                    $(".msg_affiche").html("<script type='text/javascript'>\n" +
                        "        $(document).ready(function () {\n" +
                        "            toastr['error']('"+data+"', 'Erreur', {\n" +
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


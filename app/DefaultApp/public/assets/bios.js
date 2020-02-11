$("document").ready(function() {
  $("#dateR").datepicker({
    format: "yyyy-mm-dd",
    startDate: "+0d",
    endDate: "+1m"
  });

  $("#cin").change(function() {
    $("#nif_affiche").hide();
    $("#cin_val").val("");
    $("#cin_affiche").show();
  });
  $("#nif").change(function() {
    $("#nif_val").val("");
    $("#nif_affiche").show();
    $("#cin_affiche").hide();
  });
  $("#dateN").mouseleave(function() {
    var val = $("#dateN").val();
    $.ajax({
      url: "app/DefaultApp/traitements/patient.php?age=" + val,
      type: "GET",
      data: "",
      contentType: false,
      cache: false,
      processData: false,
      success: function(data) {
        if (data < "18") {
          $("#majeur_mineur").hide();
        }
        if (data >= "18") {
          $("#majeur_mineur").show();
        }
      }
    });
  });

  $("#dossier_no").on("input", function(e) {
    var val = $("#dossier_no").val();
    $.ajax({
      url: "app/DefaultApp/traitements/RendezVous.php?no=" + val,
      type: "GET",
      data: "",
      contentType: false,
      cache: false,
      processData: false,
      success: function(data) {
        if(data.trim()==='nf'){
          $("#nomcomplet").val("");
          $(".btn_ajouter").css("display","none");
        }else{
          $("#nomcomplet").val(data);
          $(".btn_ajouter").css("display","inline");
        }

      }
    });
  });

  $("#no_salle").on("input", function(e) {
    var val = $("#no_salle").val();
    $.ajax({
      url: "app/DefaultApp/traitements/admission.php?no=" + val,
      type: "GET",
      data: "",
      contentType: false,
      cache: false,
      processData: false,
      success: function(data) {
        if(data.trim()==='ok'){
          $(".btn_ajouter").css("display","inline");
          $("#salle_affiche").html(" ");
        }else{
          $("#salle_affiche").html("Salle non disponible");
          $(".btn_ajouter").css("display","none");
        }

      }
    });
  });
  // patient
  $("#formulaire_ajouter_patient").on("submit", function(e) {
    e.preventDefault();
    var code = $("#codeP").val();
    $.ajax({
      url: "app/DefaultApp/traitements/patient.php",
      type: "POST",
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function(data) {
        if (data.trim() == "ok") {
          // $('#ajax-loading').hide();
          $(".msg_affiche").html(
            "<script type='text/javascript'>\n" +
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
              "    </script>"
          );
          $("#formulaire_ajouter_patient")[0].reset();
          $("#codeP").val("1" + code);
        } else {
          $(".msg_affiche").html(
            "<script type='text/javascript'>\n" +
              "        $(document).ready(function () {\n" +
              "            toastr['error']('" +
              data +
              "', 'Erreur', {\n" +
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
              "    </script>"
          );
        }
      }
    });
  });

  $("#formulaire_modifier_patient").on("submit", function(e) {
    e.preventDefault();
    $.ajax({
      url: "app/DefaultApp/traitements/patient.php",
      type: "POST",
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function(data) {
        if (data.trim() == "ok") {
          // $('#ajax-loading').hide();
          $(".msg_affiche").html(
            "<script type='text/javascript'>\n" +
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
              "    </script>"
          );
          window.setTimeout(function() {
            document.location.href = "modifier-patient";
          }, 5000);
        } else {
          $(".msg_affiche").html(
            "<script type='text/javascript'>\n" +
              "        $(document).ready(function () {\n" +
              "            toastr['error']('" +
              data +
              "', 'Erreur', {\n" +
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
              "    </script>"
          );
        }
      }
    });
  });

  // rendezvous
  $("#formulaire_ajoutez_rendevous").on("submit", function(e) {
    e.preventDefault();
    $.ajax({
      url: "app/DefaultApp/traitements/RendezVous.php",
      type: "POST",
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function(data) {
        data=$.parseJSON(data);
        if (data.message === "ok") {
          var id=data.id;
          $(".message").html("<div class='alert alert-success'>Rendez-Vous ajoute avec Succes !<br> No rendez-vous : "+id+" </div>");
          // $('#ajax-loading').hide();
          $(".msg_affiche").html(
            "<script type='text/javascript'>\n" +
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
              "    </script>"
          );
          setTimeout(function () {
            $(".message").html("");
          },5000);
          $("#formulaire_ajoutez_rendevous")[0].reset();
        } else {
          $(".msg_affiche").html(
            "<script type='text/javascript'>\n" +
              "        $(document).ready(function () {\n" +
              "            toastr['error']('" +
              data.message +
              "', 'Erreur', {\n" +
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
              "    </script>"
          );
        }
      }
    });
  });

  $("#formulaire_modifier_rendezvous").on("submit", function(e) {
    e.preventDefault();
    $.ajax({
      url: "app/DefaultApp/traitements/RendezVous.php",
      type: "POST",
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function(data) {
        if (data.trim() == "ok") {
          // $('#ajax-loading').hide();
          $(".msg_affiche").html(
            "<script type='text/javascript'>\n" +
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
              "    </script>"
          );
          window.setTimeout(function() {
            document.location.href = "modifier-RendezVous";
          }, 5000);
        } else {
          $(".msg_affiche").html(
            "<script type='text/javascript'>\n" +
              "        $(document).ready(function () {\n" +
              "            toastr['error']('" +
              data +
              "', 'Erreur', {\n" +
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
              "    </script>"
          );
        }
      }
    });
  });
});

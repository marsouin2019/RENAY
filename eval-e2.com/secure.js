// traitement champs formulaire obligatoire
$(document).ready(function(){
    // le form, champs, type
    $("#frmInscription input[type='text']").blur(function(){
        // verifier si donnee saisie
        if( !$(this).val() ){
            // faire quelque chose
            $(this).addClass("error");
        }else{
            // faire autre chose
        $(this) .removeClass("error");
        }
       
    });




    $("#frmInscription input[type='email']").blur(function(){
        // verifier si donnee saisie
        if( !$(this).val() ){
            // faire quelque chose
            $(this).addClass("error");
        }else{
            // faire autre chose
        $(this) .removeClass("error");
        }
       
    });






    $("#frmInscription input[type='password']").blur(function(){
        // verifier si donnee saisie
        if( !$(this).val() ){
            // faire quelque chose
            $(this).addClass("error");
        }else{
            // faire autre chose
        $(this) .removeC
        lass("error");
        }
       
    });
    $("#frmInscription") .validate();

});


$("#frmCivilite").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });


  $("#frmNom").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });

  $("#frmPrenom").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });


  $("#frmEmail").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });


  $("#frmPass").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });

  $("#frmAdresse").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });


  


  $("#frmPostale").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });


  $("#frmVille").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });


  $("#frmTelephone").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });


  
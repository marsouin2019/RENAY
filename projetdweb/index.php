<?php
  include "includes/header.php";
?>


<div class="container formu">
      
      
      <form method="POST" action="traitement.php" id="frmRegister">

      <h2>Connexion</h2>

        <div class="form-group">

        <label for="">Email/Pseudo</label>
        <input type="text" class="form-control" id="frmPseudo" aria-describedby="" placeholder="Indiquez votre pseudo (*)" name="frmlogin" required>
        <small id="pseudoHelp" >Ce champs est obligatoire.</small>


        </div>

        <div class="form-group">

        <label for="">Mot de passe</label>
        <input type="text" class="form-control" id="frmNom" aria-describedby="" placeholder="Indiquez votre mot de passe (*)" name="frmPass" required>
        <small id="passHelp" >Ce champs est obligatoire.</small>


        </div>

        <div class="col">
        <button class="col btn btn-dark-moon">Connexion</button>

        <a href="#"> Mot de passe oublié? </a>

                                            
        </div>

                                    
                            
      </form>

    

</div>

<?php
  include "includes/footer.php";
?>


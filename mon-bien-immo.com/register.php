<?php
//Header
include("include/header.php");

?>


<body>

<?php
//Navigation
  
include("include/nav.php");

  ?>
  


  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>Acceuil</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
    </div>

    <form>
    <div class="container" >
  <div class="form-row">
    <div class="col-3">
      <label for="validationServer01">Prénom</label>
      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Votre prénom" value="Login" required>
      <div class="valid-feedback">
       Veuillez saisir votre Prénom
      </div>
    </div>
    <div class="col-3">
      <label for="validationServer02">Nom</label>
      <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Votre nom" value="nom" required>
      <div class="valid-feedback">
        Veuillez saisir votre Nom
      </div>
    </div>
    <div class="col-3">
      <label for="validationServerUsername">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend3">@</span>
        </div>
        <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Email" aria-describedby="inputGroupPrepend3" required>
        <div class="invalid-feedback">
          Veuillez saisir votre Email
        </div>
      </div>
    </div>
    <div class="col-3">
      <label for="validationServer02">Mot de passe</label>
      <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Mot de passe" value="password" required>
      <div class="valid-feedback">
        Veuillez saisir votre Mot de passe
      </div>
  </div>
    </div>
  </form>

  </section>

  <!-- Image Section - set the background image for the header in the line below -->
  <section class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1081');">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 200px;"></div>
  </section>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>Identification</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
    </div>
  </section>

  <!-- Footer -->
  

  <?php
  
  include("include/footer.php");

  ?>
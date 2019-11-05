<?php
include("includes/header.php");
?>

<body>

  <!-- Navigation -->
 <?php
 include("includes/navigation.php");
 ?>

  <!-- Header - set the background image for the header in the line below -->
  <header class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1076');">
    <img class="img-fluid d-block mx-auto" src="http://placehold.it/200x200&text=Logo" alt="">
  </header>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>Login</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
    
      <form method="POST" action="traitement.php" id="frmRegister">

<div class="form-group">

<label for="">Login</label>
<input type="text" class="form-control" id="frmPrenom" aria-describedby="" placeholder="Indiquez votre prenom (*)" name="frmlogin" required>
<small id="prenomHelp" class="form-text text-muted">Ce champs est obligatoire.</small>


</div>

<div class="form-group">

<label for="">Mot de pass</label>
<input type="text" class="form-control" id="frmNom" aria-describedby="" placeholder="Indiquez votre nom (*)" name="frmPass" required>
<small id="nomHelp" class="form-text text-muted">Ce champs est obligatoire.</small>

</div>


    </div>
  </section>

  <!-- Image Section - set the background image for the header in the line below -->
  <section class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1081');">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 200px;"></div>
  </section>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>Section Heading</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
    </div>
  </section>

  <!-- Footer -->
  <?php
include("includes/footer.php");
  ?>
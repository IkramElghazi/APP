<?php
  include 'action.php';
?>





<form class="form-inline" action="/action_page.php">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-primary" type="submit">Search</button>
    </form>
  </nav>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 mt-3 bg-info p-4 rounded">
        <h2 class="bg-light p-2 rounded text-center text-dark">ID : <?= $vid; ?></h2>
        <h4 class="text-light">id : <?= $vid; ?></h4>
        <h4 class="text-light">Nom : <?= $vNom; ?></h4>
        <h4 class="text-light"> Prenom : <?= $vPrenom; ?></h4>
        <h4 class="text-light"> Adresse : <?= $vAdresse; ?></h4>
        <h4 class="text-light"> Telephone : <?= $VTelephone; ?></h4>
        <h4 class="text-light"> CIN : <?= $CIN; ?></h4>
        <h4 class="text-light"> Filiére : <?= $vFiliére; ?></h4>

      </div>
    </div>
  </div>
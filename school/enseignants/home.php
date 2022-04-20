


<?php

require_once("includes/header.php");
require_once("includes/nav.php");
  include 'includes/action.php';
?>




  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h3 class="text-center text-dark mt-2"> Enregistrements des enseignants :</h3>
        <hr>
        <?php if (isset($_SESSION['response'])) { ?>
        <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <b><?= $_SESSION['response']; ?></b>
        </div>
        <?php } ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <h3 class="text-center text-info">Ajoutée :</h3>
        <form action="includes/action.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $id; ?>">
          <div class="form-group">
            <input type="text" name="nom" value="<?= $nom; ?>" class="form-control" placeholder="Enter nom" required>
          </div>
          <div class="form-group">
            <input type="text" name="prenom" value="<?= $prenom; ?>" class="form-control" placeholder="Enter prenom" required>
          </div>
          <div class="form-group">
            <input type="text" name="adresse" value="<?= $adresse; ?>" class="form-control" placeholder="Enter adresse" required>
          </div>
          <div class="form-group">
            <input type="tel" name="telephone" value="<?= $telephone; ?>" class="form-control" placeholder="Enter telephone" required>
          </div>
          <div class="form-group">
            <input type="text" name="CIN" value="<?= $CIN; ?>" class="form-control" placeholder="Enter CIN" required>
          </div>
          <div class="form-group">
            <input type="text" name="filiére" value="<?= $filiére; ?>" class="form-control" placeholder="Enter filiére" required>
          </div>
        
          <div class="form-group">
            <?php if ($update == true) { ?>
            <input type="submit" name="update" class="btn btn-success btn-block" value="Ajouter">
            <?php } else { ?>
            <input type="submit" name="add" class="btn btn-primary btn-block" value="Ajouter">
            <?php } ?>
          </div>
        </form>
      </div>
      <div class="col-md-8">
        <?php
          $query = 'SELECT * FROM enseignants';
          $stmt = $conn->prepare($query);
          $stmt->execute();
          $result = $stmt->get_result();
        ?>
        <h3 class="text-center text-info"> tableaux des enseignants:</h3>
        <table class="table table-hover" id="data-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Nom</th>
              <th>Prenom</th>
              <th>Adresse</th>
              <th>Telephone</th>
              <th>CIN</th>
              <th>Filiére</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
              <td><?= $row['id']; ?></td>
              <td><?= $row['nom']; ?></td>
              <td><?= $row['prenom']; ?></td>
              <td><?= $row['adresse']; ?></td>
              <td><?= $row['telephone']; ?></td>
              <td><?= $row['CIN']; ?></td>
              <td><?= $row['filiére']; ?></td>

              <td>
                <a href="includes/action.php?delete=<?= $row['id']; ?>" class="badge badge-danger p-2" onclick="return confirm('Do you want delete this record?');">Delete</a> |
                <a href="./home.php?edit=<?= $row['id']; ?>" class="badge badge-success p-2">Edit</a>
              </td>

            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>



<?php
require_once("includes/footer.php");
?>
<?php

require_once("includes/header.php");
require_once("includes/nav.php");
  include 'action_etu.php';
?>


<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h3 class="text-center text-dark mt-2"> Enregistrements des cours :</h3>
        <hr>
        <?php if (isset($_SESSION['response'])) { ?>
        <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <b><?= $_SESSION['response']; ?></b>
        </div>
        <?php } unset($_SESSION['response']); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <h3 class="text-center text-info">Ajouter :</h3>
        <form action="action_etu.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $id; ?>">
          <div class="form-group">
            <input type="text" name="image" value="<?= $image; ?>" class="form-control" placeholder="Enter image " required>
          </div>
          <div class="form-group">
            <input type="prenom" name="nom" value="<?= $nom; ?>" class="form-control" placeholder="Enter nom" required>
          </div>
          <div class="form-group">
            <input type="text" name="description" value="<?= $description; ?>" class="form-control" placeholder="Enter description" required>
          </div>
          <div class="form-group">
            <input type="text" name="fichier" value="<?= $fichier; ?>" class="form-control" placeholder="Enter fichier" required>
          </div>
        
          <div class="form-group">
            <?php if ($update == true) { ?>
            <input type="submit" name="update" class="btn btn-success btn-block" value="Update Record">
            <?php } else { ?>
            <input type="submit" name="add" class="btn btn-primary btn-block" value="Ajoutée">
            <?php } ?>
          </div>
        </form>
      </div>
      <div class="col-md-8">
        <?php
          $query = 'SELECT * FROM cours ';
          $stmt = $conn->prepare($query);
          $stmt->execute();
          $result = $stmt->get_result();
        ?>
        <h3 class="text-center text-info"> Tableaux des cours :</h3>
        <table class="table table-hover" id="data-table">
          <thead>
            <tr>
              <th>#</th>
              <th>image</th>
              <th>nom</th>
              <th> description </th>
              <th> fichier</th>
             
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
              <td><?= $row['id']; ?></td>
              <td><?= $row['image']; ?></td>
              <td><?= $row['nom']; ?></td>
              <td><?= $row['discription']; ?></td>
              <td><?= $row['fichier']; ?></td>

              <td>
                <a href="action_etu.php?delete=<?= $row['id']; ?>" class="badge badge-danger p-2" onclick="return confirm('Do you want delete this record?');">Delete</a> |
                <a href="./etudiant.php?edit=<?= $row['id']; ?>" class="badge badge-success p-2">Edit</a>
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

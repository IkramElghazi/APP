<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=gestion_ecole', $user = "root", $pass = "");

    print_r("connection success ");
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>  
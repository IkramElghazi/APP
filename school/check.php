<?php
if (isset($_GET['submit'])) {
    $log = $_GET['name'];
    // $passe = md5($_POST['pass']);
    $passe = $_GET['pass'];
    require 'connection.php';
    $stmt = $dbh->prepare('SELECT * FROM login WHERE nom=? and password=?');
    $parametres = array($log, $passe);
    $stmt->execute($parametres);
    if ($rs = $stmt->fetch()) {


        //
        session_start();
        $_SESSION['droit'] = $rs;
        if ($rs['fonction'] == "admin") {
            header('location:enseignants/home.php');
        } elseif ($rs['fonction'] == "user") {
            header('location:about.php');
        }
    } else {
        header('location:error.php');
    }
}
?>
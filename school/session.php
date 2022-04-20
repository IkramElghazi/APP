<?php
session_start();
if (!isset($_SESSION['function'])){
    header("location:login.php");
    
};

?>
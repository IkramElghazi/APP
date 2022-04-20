<?php
	
	include 'config.php';

	$update=false;
	$id="";
	$nom="";
	$prenom="";
	$adresse="";
    $telephone="";
    $CIN="";
    $filiére="";

	if(isset($_POST['add'])){
		$nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
		$adresse=$_POST['adresse'];
        $telephone=$_POST['telephone'];
        $CIN=$_POST['CIN'];
		$filiére=$_POST['filiére'];


		$query="INSERT INTO enseignants(nom,prenom,adresse,telephone,CIN,filiére)VALUES('$nom','$prenom','$adresse','$telephone','$CIN','$filiére')";
		$stmt=$conn->prepare($query);
		$stmt->bind_param($nom,$prenom,$adresse,$telephone,$CIN,$filiére);
		$stmt->execute();

		header('location:../home.php');
		$_SESSION['response']="L'enseignant a été ajoutée avec succée!";
		$_SESSION['res_type']="succée";
	}
	if(isset($_GET['delete'])){
		$id=$_GET['delete'];

		$query="DELETE FROM enseignants WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();

		header('location:../home.php');
		$_SESSION['response']="supression avec succcés!";
		$_SESSION['res_type']="danger";
	}
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];

		$query="SELECT * FROM enseignants WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$id=$row['id'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$adresse=$row['adresse'];
		$telephone=$row['telephone'];
        $CIN=$row['CIN'];
        $filiére=$row['filiére'];

		$update=true;
	}
	if(isset($_POST['update'])){
		$nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
		$adresse=$_POST['adresse'];
        $telephone=$_POST['telephone'];
        $CIN=$_POST['CIN'];
		$filiére=$_POST['filiére'];
		$id=$_POST['id'];
		
		$query="UPDATE enseignants SET nom ='$nom',prenom='$prenom',adresse='$adresse',telephone='$telephone',CIN='$CIN',filiére='$filiére' WHERE id=$id";
		$stmt=$conn->prepare($query);
		$stmt->bind_param($nom,$prenom,$adresse,$telephone,$CIN,$filiére);
		$stmt->execute();

		$_SESSION['response']="Updated Successfully!";
		$_SESSION['res_type']="primary";
		header('location:../home.php');
	}

	?>
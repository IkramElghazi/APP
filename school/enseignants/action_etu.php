<?php
	session_start();
	include 'config_etu.php';

	$update=false;
	$id="";
	$image="";
	$nom="";
	$description="";
	$fichier="";
   


	if(isset($_POST['add'])){
		$id=$_POST['id'];
		$image=$_POST['image'];
		$nom=$_POST['nom'];
		$description=$_POST['description'];
		$fichier=$_POST['fichier'];

	
		$query="INSERT INTO cours (id,image,nom,description,fichier)VALUES('$id','$nom','$image','$description','$fichier')";
		$stmt=$conn->prepare($query);
		$stmt->bind_param($id,$image,$nom,$description,$fichier);
		$stmt->execute();

		header('location:etudiant.php');
		$_SESSION['response']="Successfully Inserted to the database!";
		$_SESSION['res_type']="success";
	}
	if(isset($_GET['delete'])){
		$id=$_GET['delete'];

		

		$query="DELETE FROM cours WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();

		header('location:etudiant.php');
		$_SESSION['response']="Successfully Deleted!";
		$_SESSION['res_type']="danger";
	}
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];

		$query="SELECT * FROM cours WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$id=$row['id'];
		$nom=$row['image'];
		$prenom=$row['nom'];
		$email=$row['description'];
		$massar=$row['fichier'];
		

		$update=true;
	}
	if(isset($_POST['update'])){
		$id=$_POST['id'];
		$image=$_POST['image'];
		$nom=$_POST['nom'];
		$description=$_POST['description'];
		$fichier=$_POST['fichier'];


		
		$query="UPDATE cours SET id='$id',image='$image',nom='$nom',description='$description',fichier='$fichier' WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param($nom,$prenom,$email,$massar,$filiére,$classe);
		$stmt->execute();

		$_SESSION['response']="Updated Successfully!";
		$_SESSION['res_type']="primary";
		header('location:etudiant.php');
	}


?>
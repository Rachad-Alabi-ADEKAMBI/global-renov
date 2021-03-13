<?php

//login to database
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=leads;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

if (isset($_POST["submit"])) {

        $req = $bdd -> prepare("INSERT INTO informations ( nom,prenom, email,telephone, 
        habitation,region,ville ,code_postal) VALUES (:nom,:prenom,:email,
        :telephone,:habitation,:region,:ville,:code_postal)");

        $req -> execute (array(
                "nom" => $_POST["nom"],
                "prenom" => $_POST["prenom"],
                "habitation" => $_POST["habitation"],
                "chauffage" => $_POST["chauffage"],
                "telephone" => $_POST["telephone"],
                "email" =>$_POST["email"],
                "region" => $_POST["region"],
                "ville" => $_POST["ville"],
                "code_postal" => $_POST["code_postal"]
                ));
         }    
?>
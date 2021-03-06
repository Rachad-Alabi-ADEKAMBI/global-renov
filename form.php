<?php

/*connection à la base de données*/



if (isset($_POST["submit"])) {



/*recuperation des information de ton formulaire et j' ai aussi modifier ton formulaire  j'ai eu a ajoute des name au inpute pour la recuperation des donnée */
    $serveur = "localhost";
    $login = "ola";
    $pas = "root";
        $Nom = $_POST["nom"];
        $Prenom = $_POST["prenom"];
        $habitation = $_POST["habitation"];
        $telephone = $_POST["telephone"];
        $region = $_POST["region"];
        $ville = $_POST["code_postal"];
        $code_postal = $_POST["ville"];
        $email = $_POST["email"];
    // une methode de connection a la base de donnée
    $connexion = new PDO("mysql:host=$serveur;dbname=rachad", $login, $pas);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//la requete d'insertion dans la base j'ai cree une nouvelle table
    $req = $connexion->prepare("INSERT INTO form ( nom,prenom, email,telephone, habitation,region,ville ,code_postal) VALUES (:nom,:prenom,:email,:telephone,:habitation,:region,:ville,:code_postal)");
// recuperation et insertion dans les parametre
    $req->bindParam(':nom', $Nom);
    $req->bindParam(':prenom', $Prenom);
    $req->bindParam(':email', $email);
    $req->bindParam(':telephone', $telephone);
    $req->bindParam(':habitation', $habitation);
    $req->bindParam(':region', $region);
    $req->bindParam(':ville', $code_postal);
    $req->bindParam(':code_postal', $code_postal);

    $req->execute();


    /* cette methode est une de mes creations */
    }



?>

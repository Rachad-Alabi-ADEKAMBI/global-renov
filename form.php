<?php

/*connection à la base de données*/
if (isset($_POST["submit"])) {



/*recuperation des information */
    $serveur = "localhost";
    $login = "root";
    $pas = "";
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $habitation = $_POST["habitation"];
        $chauffage = $_POST["chauffage"];
        $telephone = $_POST["telephone"];
        $email = $_POST["email"];
        $region = $_POST["region"];
        $ville = $_POST["ville"];
        $code_postal = $_POST["code_postal"];
        
    // une methode de connection a la base de donnée
    $connexion = new PDO("mysql:host=$serveur;dbname=leads", $login, $pas);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//la requete d'insertion dans la base j'ai cree une nouvelle table
    $req = $connexion->prepare("INSERT INTO informations-prospects ( nom,prenom, 
    email,telephone, habitation, chauffage, region,ville ,code_postal) VALUES 
    (:nom,:prenom,:email, :telephone, :habitation, :chauffage, :region,:ville,:code_postal)");

// recuperation et insertion dans les parametres
    $req->bindParam(':nom', $Nom);
    $req->bindParam(':prenom', $Prenom);
    $req->bindParam(':email', $email);
    $req->bindParam(':telephone', $telephone);
    $req->bindParam(':habitation', $habitation);
    $req-> bindParam(':chauffage', $chauffage);
    $req->bindParam(':region', $region);
    $req->bindParam(':ville', $code_postal);
    $req->bindParam(':code_postal', $code_postal);

    $req->execute();

    }
?>

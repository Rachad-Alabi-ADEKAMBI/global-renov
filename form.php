<?php
//login to database
if (isset($_POST["submit"])) {

        $serveur = "localhost";
        $login = "root";
        $pas = "";

        $Nom = $_POST["nom"];
        $Prenom = $_POST["prenom"];
        $habitation = $_POST["habitation"];
        $chauffage = $_POST["chauffage"];
        $telephone = $_POST["telephone"];
        $region = $_POST["region"];
        $ville = $_POST["ville"];
        $code_postal = $_POST["code_postal"];
        $email = $_POST["email"];

        $connexion=new PDO("mysql:host=$serveur;dbname=leads", $login, $pas);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $req = $connexion->prepare("INSERT INTO informations
         ( nom,prenom, email,telephone, habitation, chauffage, region,
         ville ,code_postal) VALUES (:nom,:prenom,:email,
         :telephone,:habitation,:chauffage,:region,:ville
         ,:code_postal)");

$req->bindParam(':nom', $Nom);
$req->bindParam(':prenom', $Prenom);
$req->bindParam(':email', $email);
$req->bindParam(':telephone', $telephone);
$req->bindParam(':habitation', $habitation);
$req->bindParam(':chauffage', $chauffage);
$req->bindParam(':region', $region);
$req->bindParam(':ville', $ville);
$req->bindParam(':code_postal', $code_postal);

$req->execute();

//REDIRECTION
header('Location: thanks.php');
         }    
?>
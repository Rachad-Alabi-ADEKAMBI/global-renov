<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=leads;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

//vchecking values
if (isset($_POST["submit"])) {
    if (isset($_POST["nom"])){
        if (isset($_POST["prenom"])){
            if (isset($_POST["email"])){
                if (isset($_POST["telephone"])){
                    if (isset($_POST["habitation"])){
                        if (isset($_POST["chauffage"])){
                            if (isset($_POST["chauffage"])){
                                echo 'ok';
                            }
                            else{
                                echo 'no';
                            }
                        }
                        else{
                            echo'Veuillez choisir le type de chauffage <br>'; 
                        }

                    }
                    else{
                        echo'Veuillez choisir le type d\'\habitation <br>';
                    }
                }
                else{
                    echo'Veuillez entrer votre numero de telephone <br>';
                }
            }
            else{
                echo'Veuillez entrer votre email <br>';
            }
        }
        else{
            echo'Veuillez entrer votre prenom <br>'; 
        }

    }
    else{
        echo'Veuillez entrer votre nom <br>'; 
    }
}

/*
$req = $bdd->prepare
('INSERT INTO informations-leads(id, nom, prenom, email, telephone, habitation, chauffage, region,
                ville, code_postal, date_inscription) VALUES(:id, :nom, :prenom, :email, :telephone, :habitation, :chauffage, :region,
                :code_postal, :NOW())');
$req->execute(array(
	'nom' => $nom,
    'prenom' => $prenom,
	'email' => $email,
	'telephone' => $telephone,
	'habitation' => $habitation,
	'chauffage' => $chauffage,
    'region' => $region,
    'ville' => $ville,
    'code_postal' => $code_postal
	));

    //redirection
    header('Location: merci.php');;
?>
*/
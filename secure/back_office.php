<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/sass/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <title>GLOBAL RENOV - BACK-OFFICE</title>
</head>

<body>
<div class="top">
        <h1 class="title">
            GLOBAL RENOV -BACK-OFFICE
        </h1> 
    </div>   

    <?php
    //login to the database
        try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=leads;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }


    echo"Voici les dernières inscriptions"; ?> <br>

<?php
    $reponse = $bdd->query('SELECT date_inscription, nom, prenom, habitation, chauffage, telephone, 
                                email, region, ville, code_postal FROM informations');

    echo"<table border='1' style=margin:50px auto 50px auto;>";

    echo"<tr><td>date_inscription</td><td>nom</td><td>prenom</td><td>habitation</td><td>chauffage</td><td>telephone</td>
        <td>email</td><td>region</td><td>ville</td><td>code_postal</td></tr>\n";
    while ($donnees = $reponse->fetch())
    {
       
        echo"<tr>
        <td>{$donnees['date_inscription']}</td>
        <td>{$donnees['nom']}</td>
        <td>{$donnees['prenom']}</td>
        <td>{$donnees['habitation']}</td>
        <td>{$donnees['chauffage']}</td>
        <td>{$donnees['telephone']}</td>
        <td>{$donnees['email']}</td>
        <td>{$donnees['region']}</td>
        <td>{$donnees['ville']}</td>
        <td>{$donnees['code_postal']}</td></tr>\n";
    }

    echo "</table>";  

   ?>  
    <footer class="footer">
            <a href="#" class="footer__text">
                Global Renov ©️ 2020  <br> Tous droits réservés
            </a>

            <div class="footer__bouton">
            <br>
            <br>
                <a href="index.php" class="footer-btn-link">
                    <button class="footer-btn">
                        Accueil
                    </button>
                </a>
     
            </div>

            <div class="footer__disclaimer">
                 <a href="mentions.php">Mentions légales</a>
            </div>
        </footer>
</body>

       
        
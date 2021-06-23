    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </head>

    <body>
    <br>
        <p>Bonjour Monsieur, Veuillez entrer votre mot de passe:</p>
        
        <form action="login.php" method="post">
            <p>
            <input type="password" name="mot_de_passe" /> <br> <br>
            <input type="submit" value="Valider" />

            <?php
                if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "kangourou")
                {
                    header('Location: ./secure/back_office.php');
                }
            ?>
            </p>
        </form>
    </body>
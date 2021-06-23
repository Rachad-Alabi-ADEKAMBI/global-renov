   <?php

    // Nom de la table à exporter
    $db_record = 'informations';

    // En option : conditionnels de la requête d'export (WHERE, ORDER BY, LIMIT, etc.)
    $where = '';

    // Nom du fichier CSV à exporter
    $csv_filename = $db_record . '_' . date('Y-m-d') . '.csv';

    // Variables de connexion à la base des données
    $hostname = "globamyglobal.mysql.db";
    $user = "globamyglobal";
    $password = "SPBPNNWts3PuGeF1";
    $database = "globamyglobal";


    // Connexion à la base
    $conn = mysqli_connect($hostname, $user, $password, $database);
    if (mysqli_connect_errno()) {
        die("Echec de la connexion : " . mysqli_connect_error());
    }

    // Création d'un fichier CSV vide
    $csv_export = '';

    // Extraction des données de la table
    $query = mysqli_query($conn, "SELECT * FROM " . $db_record . " " . $where);
    $field = mysqli_field_count($conn);

    // Création de la ligne des titres (noms des champs)
    for ($i = 0; $i < $field; $i++) {
        $csv_export .= mysqli_fetch_field_direct($query, $i)->name . ';';
    }

    // Nouvelle ligne (semble fonctionner avec Linux & Windows servers)
 $csv_export .= '';

    // Boucle des tuples pour remplir le fichier
    while ($row = mysqli_fetch_array($query)) {
        for ($i = 0; $i < $field; $i++) {
            $csv_export .= '"' . $row[mysqli_fetch_field_direct($query, $i)->name] . '";';
        }
        $csv_export .= '
';
    }

    // Export des données au format CSV et appel du fichier créé pour téléchargement
    header("Content-type: text/x-csv");
    header("Content-Disposition: attachment; filename=" . $csv_filename . "");
    echo ($csv_export);
    ?>

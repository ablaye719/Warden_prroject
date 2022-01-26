<<<<<<< HEAD
<?php
    session_start();
    $id = $_SESSION['idUtilisateurConnected'];
    try{
        $mysqlConnection = new PDO(
            'mysql:host=localhost;dbname=Warden_BDD;charset=utf8',
            'root',
            ''
        );
        $mysqlConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $req = "SELECT * FROM  utilisateur  WHERE idUtilisateur = $id;";
        $userStmt=$mysqlConnection->prepare($req);
        $userStmt->execute();
        $users = $userStmt->fetchAll();


    }
    catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
    } 
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="Gestionnaire.css">

    </head>
    <body>
        <h1>Mes informations Personnelles</h1>

        
        <table class="tableau-style">
            <thead>
                <tr>
                    <th>ID</th>
                </tr>

                <tr>
                    <th>Nom de l'utilisateur</th> 
                </tr>

                <tr>
                    <th>Prénom de l'utilisateur</th> 
                </tr>

                <tr>
                    <th>Adresse de l'utilisateur</th> 
                </tr>

                <tr>
                    <th>Fonction de l'utilisateur</th> 
                </tr>

                <tr>
                    <th>Email de l'utilisateur</th> 
                </tr>

                
            </thead>

            <tbody>
                <?php foreach ($users as $user) {$_SESSION['idUtilisateur'] = $user['idUtilisateur'];?>
                <tr>
                    <td><?php echo htmlspecialchars($user['idUtilisateur']); ?></td>
                </tr>

                <tr>
                    <td><?php echo htmlspecialchars($user['nomUtilisateur']); ?></td>
                </tr>

                <tr>
                    <td><?php echo htmlspecialchars($user['prenomUtilisateur']); ?></td>
                </tr>

                <tr>
                    <td><?php echo htmlspecialchars($user['adresseUtilisateur']); ?></td>
                </tr>

                <tr>
                    <td><?php echo htmlspecialchars($user['fonctionUtilisateur']); ?></td>
                </tr>

                <tr>
                    <td><?php echo htmlspecialchars($user['emailUtilisateur']); ?></td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
    </body>
=======
<?php
    session_start();
    $id = $_SESSION['idUtilisateurConnected'];
    try{
        $mysqlConnection = new PDO(
            'mysql:host=localhost;dbname=Warden_BDD;charset=utf8',
            'root',
            ''
        );
        $mysqlConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $req = "SELECT * FROM  utilisateur  WHERE idUtilisateur = $id;";
        $userStmt=$mysqlConnection->prepare($req);
        $userStmt->execute();
        $users = $userStmt->fetchAll();


    }
    catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
    } 
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="Gestionnaire.css">

    </head>
    <body>
        <h1>Mes informations Personnelles</h1>

        
        <table class="tableau-style">
            <thead>
                <tr>
                    <th>ID</th>
                </tr>

                <tr>
                    <th>Nom de l'utilisateur</th> 
                </tr>

                <tr>
                    <th>Prénom de l'utilisateur</th> 
                </tr>

                <tr>
                    <th>Adresse de l'utilisateur</th> 
                </tr>

                <tr>
                    <th>Fonction de l'utilisateur</th> 
                </tr>

                <tr>
                    <th>Email de l'utilisateur</th> 
                </tr>

                
            </thead>

            <tbody>
                <?php foreach ($users as $user) {$_SESSION['idUtilisateur'] = $user['idUtilisateur'];?>
                <tr>
                    <td><?php echo htmlspecialchars($user['idUtilisateur']); ?></td>
                </tr>

                <tr>
                    <td><?php echo htmlspecialchars($user['nomUtilisateur']); ?></td>
                </tr>

                <tr>
                    <td><?php echo htmlspecialchars($user['prenomUtilisateur']); ?></td>
                </tr>

                <tr>
                    <td><?php echo htmlspecialchars($user['adresseUtilisateur']); ?></td>
                </tr>

                <tr>
                    <td><?php echo htmlspecialchars($user['fonctionUtilisateur']); ?></td>
                </tr>

                <tr>
                    <td><?php echo htmlspecialchars($user['emailUtilisateur']); ?></td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
    </body>
>>>>>>> 470393e51f72e5caa1d7f2756797e3ce3b30ab0b
</html>
<?php
    session_start();
    try{
        $mysqlConnection = new PDO(
            'mysql:host=localhost;dbname=Warden_BDD;charset=utf8',
            'root',
            ''
        );
        $mysqlConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $req = "SELECT * FROM  utilisateur ;";
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
        <h1>Liste des utilisateurs</h1>
        <table class="tableau-style">
            <thead>
                <tr>
                <th>ID</th>
                <th>Nom de l'utilisateur</th>
                <th>Prénom de l'utilisateur</th>
                <th>Adresse de l'utilisateur</th>
                <th>Fonction de l'utilisateur</th>
                <th>Email de l'utilisateur</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) {$_SESSION['idUtilisateur'] = $user['idUtilisateur'];?>
                <tr>
                    <td><?php echo htmlspecialchars($user['idUtilisateur']); ?></td>
                    <td><?php echo htmlspecialchars($user['nomUtilisateur']); ?></td>
                    <td><?php echo htmlspecialchars($user['prenomUtilisateur']); ?></td>
                    <td><?php echo htmlspecialchars($user['adresseUtilisateur']); ?></td>
                    <td><?php echo htmlspecialchars($user['fonctionUtilisateur']); ?></td>
                    <td><?php echo htmlspecialchars($user['emailUtilisateur']); ?></td>
                    <td><a href="supprimerUtilisateur.php">Supprimer l'utilisateur</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>
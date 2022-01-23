<?php
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
    <head>Les Utilisateurs</head>
    <body>
        <h1>Liste des utilisateurs</h1>
        <table>
            <thead>
                <tr>
                <th>ID</th>
                <th>Nom de l'utilisateur</th>
                </tr>
            </thead>
        <tbody>
            <?php foreach ($users as $user) {?>
            <tr>
                <td><?php echo htmlspecialchars($user['idUtilisateur']); ?></td>
                <td><?php echo htmlspecialchars($user['nomUtilisateur']); ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </body>
</html>
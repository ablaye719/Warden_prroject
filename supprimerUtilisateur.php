<?php 
    session_start();
    $id = $_SESSION['idUtilisateur'];
    try{
        $mysqlConnection = new PDO(
            'mysql:host=localhost;dbname=Warden_BDD;charset=utf8',
            'root',
            ''
        );
        $mysqlConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $req = "DELETE FROM  utilisateur WHERE idUtilisateur = $id;";
        $userStmt=$mysqlConnection->prepare($req);
        $userStmt->execute();
        header('Location:Gestionnaire.php');


    }
    catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
    }
?>
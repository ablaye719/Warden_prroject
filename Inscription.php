<?php
    session_start();
    if(!empty($_POST['nom']) && !empty($_POST['prenom'])&& !empty($_POST['fonction'])&& !empty($_POST['adresse'])&& !empty($_POST['email'])&& !empty($_POST['adresse'])&& $_POST['mdp']){
        // On enregistre les informations dans la base de données 
        try{
            $mysqlConnection = new PDO(
                'mysql:host=127.0.0.1;dbname=warden_bdd;charset=utf8',
                'root',
                ''
            );
            $mysqlConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $password = password_hash($_POST['mdp'], PASSWORD_BCRYPT);
            $req = "INSERT INTO utilisateur ( idUtilisateur ,nomUtilisateur, prenomUtilisateur, adresseUtilisateur, fonctionUtilisateur, typeUtilisateur,emailUtilisateur, password) VALUES (NULL,'".$_POST["nom"]."','".$_POST["prenom"]."','".$_POST["adresse"]."','".$_POST["fonction"]."','".$_POST["typeUtilisateur"]."','".$_POST["email"]."','".$_POST['mdp']."');";
            $userStmt=$mysqlConnection->prepare($req);
            $userStmt->execute();
            echo $_SESSION['flash']['success'] = 'Un email de confirmation vous a été envoyé pour valider votre compte';
            header('Location: FormulaireConnexion.php');
            exit();

        }
        catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
        }
    
        
        //mail($_POST['email'], 'Confirmation de votre compte', "Afin de valider votre compte merci de cliquer sur ce lien\n\nhttp://local.dev/Lab/Comptes/confirm.php?id=$user_id&token=$token");
        // On redirige l'utilisateur vers la page de login avec un message flash

    }

?>
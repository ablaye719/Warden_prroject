<?php
    session_start();
    if(!empty($_POST['email'])&& $_POST['mdp']){
        // On enregistre les informations dans la base de données 
        $login = $_POST['email'];
        $password =  $_POST['mdp'];
        try{
            $mysqlConnection = new PDO(
                'mysql:host=localhost;dbname=Warden_BDD;charset=utf8',
                'root',
                ''
            );
            $mysqlConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $req = "SELECT * FROM  utilisateur WHERE  emailUtilisateur LIKE '$login' AND  passwordUtilisateur LIKE '$password';";
            $userStmt=$mysqlConnection->prepare($req);
            $userStmt->execute();
            $user = $userStmt->fetchAll();
            if($user != null){
                $_SESSION['flash']['success'] = 'Connexion réussie';
                echo $_SESSION['flash']['success_connexion'];
                header('Location: home.html');
                exit();
            }
            else{
                $_SESSION['erreur'] = 'Identifiant ou mot de passe incorrect';
                $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrect !';
                echo $_SESSION['flash']['danger'];
                header('Location: FormulaireConnexion.php');
            }


        }
        catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
        }
    
        


    }
?>
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
            $req = "SELECT * FROM  utilisateur WHERE  emailUtilisateur LIKE '$login' AND  password LIKE '$password';";
            $userStmt=$mysqlConnection->prepare($req);
            $userStmt->execute();
            $users = $userStmt->fetchAll();
            if($users != null){
                foreach($users as $user){
                    $_SESSION['idUtilisateurConnected']=$user['idUtilisateur'];
                    if($user['typeUtilisateur']=="gestionnaire"){
                        header('Location: Gestionnaire.php');
                        exit();
    
                    }
                    else{
                        header('Location: home.php');
                        exit();
    
                    }
                }
            }
            else{
                header('Location: FormulaireConnexion.php');
            }



        }
        catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
        }
    
        


    }
?>
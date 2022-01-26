<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styleConnexion.css"  type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
    <p class="text-center" style="font-size: 60px;">
      Bienvenue sur le site WARDEN
    </p>
      <form class="formulaire" method="post" action="Connexion.php">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label" style="font-size: 40px;">Login</label>
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label" style="font-size: 40px;">Mot de passe</label>
          <input type="password" class="form-control" name="mdp">
        </div>
        <p id="erreur" style="color:red"><?php if(isset($_SESSION['erreur'])) echo $_SESSION['erreur'];?></p>
        <button type="submit" class="button1">Se Connecter</button>
        <p class="text-center"style="font-size: 20px;"> Vous n'avez pas de compte? <a href = "FormulaireInscription.php"> S'inscrire </a></p> 
    </form>
  </body>
</html>

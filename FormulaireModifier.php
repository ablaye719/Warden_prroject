<?php
    session_start()

?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styleConnexion.css"  type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
    <p class="text-center"style="font-size: 60px;">
      Bienvenue sur le site WARDEN
    </p>
      <form class="formulaire" method="post" action="Modifier.php">
      <div class="mb-3">
          <label for="nom" class="form-label"style="font-size: 30px;">Nom</label>
          <input type="text" class="form-control" name="nom">
        </div>
        <div class="mb-3">
          <label for="prenom" class="form-label"style="font-size: 30px;">Prénom</label>
          <input type="text" class="form-control" name="prenom">
        </div>
        <div class="mb-3">
          <label for="adresse" class="form-label"style="font-size: 30px;">Adresse</label>
          <input type="text" class="form-control" name="adresse">
        </div>
        <div class="mb-3">
          <label for="fonction" class="form-label"style="font-size: 30px;">Fonction</label>
          <input type="text" class="form-control" name="fonction">
        </div>
        <div class="mb-3">
          <label for="Type Utilisateur" class="form-label"style="font-size: 30px;">Type d'utilisateur</label>
          <select name="typeUtilisateur" class="form-control">
            <option value="simpleUtilisateur">Utilisateur Simple</option>
            <option value="gestionnaire">Gestionnaire</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"style="font-size: 30px;">Login</label>
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label"style="font-size: 30px;">Mot de passe</label>
          <input type="password" class="form-control" name="mdp">
        </div>
        <button type="submit" class="button1">S'inscrire</button>
      </form>
    </body>
</html>
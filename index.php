<?php require_once('./authController.php'); ?> <!-- ETAPE (0)  - On importe le fichier "authController"  -->
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Session</title>
</head>
<body>
  <?php if(isset($_SESSION['pseudo'])): ?> <!-- ETAPE (7) SIGN - On vérifie si $_SESSION['pseudo'] est défini  -->

    <p>Hello <?= $_SESSION['pseudo'] ?></p> <!-- ETAPE (8) SIGN - Et si $_SESSION['pseudo'] est définit alors on affiche la session pseudo  -->

    <a href="?actions=logout">Logout</a> <!-- ETAPE (1) DÉCONNEXION 
      - On crée un lien sur lequel on pourra cliquer pour se déconnecter. 
      Ensuite, on crée un param "actions" qui sera récupérable via l'url grâce à la superglobal $_GET.
    -->

  <?php endif; ?> <!-- ETAPE (7) SIGN - On ferme le if avec le "endif;"  -->

  <form method="POST">  <!-- ETAPE (1) SIGN - On précise la methode du formulaire -->
    <input type="text" placeholder="pseudo" name="pseudo"> <!-- ETAPE (2) SIGN - On définit l'attribut name (pseudo) qui sera récupéré par la super global ($_POST), grâce â la methode POST définit juste au-dessus, ce qui nous permettra de récupérer les valeurs saisie par l'internaute dans cet input -->
    <button name="valider">Valider</button> <!-- ETAPE (3) SIGN - Button qui permet d'envoyer notre formulaire, le name (valider) nous permettra de savoir quand on clic sur le button -->
  </form>
</body>
</html>
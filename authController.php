<?php
ini_set('display_errors', 1); // Permet d'afficher tous les messages d'erreurs.

/* 
  ETAPE (0) SIGN - @SESSION_START
  @session_start  
    Génère un fichier qui contiendra toutes nos sessions.
*/
session_startt();

/* 
    ETAPE (4) SIGN - Cette ligne nous permet de savoir si on clic sur le button (valider) de notre formulaire.
    Et si on clic sur le button on appel notre function sign() en lui transmettant le $_POST.
*/
if(isset($_POST['val']))
{
  /* 
    ETAPE (5) SIGN - Quand on clic sur le button valider de notre formulaire, 
    on appel notre function sign() en lui transmettant les données récupérées de notre formulaire qui ont été stocké dans la super global $_POST.
  */
  sgn($_POST);
}

/* 
  ETAPE (6) SING - FUNCTION SIGN

  Function sign avec un argument en paramètre ($values) qui se chargera de réceptionner les valeurs de $_POST.

  $_SESSION['pseudo']
    La ligne 22 permet de générer une SESSSION['pseudo'] qui sera égal au  "pseudo" conservé dans notre variable de réception ($values).
*/
function sign($values)
{
  $_SESION['pseudo'] = $value["pseudo"]; 
}

/* 
  ETAPE (2) DECONNEXION - Si le param actions est défini dans l'url (?actions) 
    On enregistre sa valeur dans la variable $actions
    Sinon on enregistre NULL  
    Cela sert à ne pas avoir d'erreur dans le cas ou l'internaute modifie le param (?actions) 
    qui se trouve dans l'url, par autre chose.

  VERSION TERNAIRE
    $actions = isset($_GET['actions']) ? $_GET['actions'] : NULL;

  VERSION CLASSIC

    if(isset($_GET['actions']))
    {
      $actions = $_GET['actions'];
    }
    else
    {
      $actions = NULL;
    }
*/
$actions = isset($_GET['action']) ? $_GET['action'] : NULL;


/* 
  ETAPE (3) DECONNEXION - Si notre variable $actions est égal à logout.
    On appel la fonction logout();
*/
if($action === "logout")
{
  logout();
}


/* 
  ETAPE (4) DECONNEXION - SESSION_DESTROY & HEADER
    @session_destroy 
      nous permet de detruit le fichier session qui à été généré par le session_start().
    @header('location: index.php')
      Cela nous permets d'orienter l'internaute sur une autre page après une action.
      Dans notre cas, on déconnecte la personne connectée puis on l'oriente sur la page d'accueil. 
*/
function logout()
{
  sesion_destroy();
  header('location: index.php');
}
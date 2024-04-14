<?php
session_start();
require '../src/class/otherClass/Autoloder.php';
Autoloader::register();

// Mapping des valeurs de $p vers les fichiers correspondants
$pages = [
  'connexion' => '../src/View/Connexion/Connexion.php',
  'registration' => '../src/View/Registration/Registration.php',
  'SendMail' => '../src/View/Registration/SendEmail.php',
  'Validate' => '../src/View/Registration/ValidatedAnAccount.php',
  'Home' => '../src/View/Home/Home.php',
  'PressArticle'=>'../src/View/PressArticle/PressArticle.php',
  'AddArticle'=>'../src/View/PressArticle/AddAnitem.php',
  'SelectedItem'=>'../src/View/PressArticle/SelectedItem.php',
  'WelcomeQuiz' =>'../src/View/Quiz/WelcomeQuiz.php'
];

// Vérifier si la clé existe dans le tableau, sinon utiliser 'connexion' par défaut
$p = isset($_GET['p']) && array_key_exists($_GET['p'], $pages) ? $_GET['p'] : 'connexion';
$p= $_GET['p']==null?$p='connexion':$_GET['p'];

ob_start();

//Vérifier si le fichier existe avant de l'inclure
if (file_exists($pages[$p])) {
  require $pages[$p];
} else {
  // Gérer le cas où la page demandée n'existe pas
  require '../src/view/error/error404.php';
}

$content = ob_get_clean();
require '../src/view/template/default.php';

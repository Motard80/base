<?php
include_once '../src/controleur/Home/HomeCtrl.php';
?>
<title><?= isset($title) ? $title : '' ?></title>
<!--fin du head-->
</head>
<header>
    <?php include_once '../src/include/Navbar.php'; ?>
</header>
<?php
if ($_SESSION['Done'] == 2689 || $_SESSION['Done'] == 252 || $_SESSION['Done'] == 250) { ?>
    <div class="container text-center">
        <div class="row">
            <div class="col align-self-center">
                <p><?= isset($error) ? $error : '' ?></p>
            </div>
        </div>
        <div class="row"></div>
        <div class="col align-self-center">
            <h1>Acceuil du site</h1>
        </div>
        <div>
            <p><a href="p=WelcomeQuiz">questionnaire</a> de sur la cyber sécurité</p>
        </div>
    <div><p><a href="p=home">information</a> concernant la cyber sécurité</p></div>
        <div><p><a href="?p=PressArticle">Article de presse </a>concernant la cyber sécurité</p></div>
    </div>
<?php
} else {
    include_once '../src/view/error/restrictedZone.php';
}
?>
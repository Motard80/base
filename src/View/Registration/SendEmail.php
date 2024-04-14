<?php
include_once '../src/controleur/Connexion/ConnexionCtrl.php';
use src\class\otherClass\Form;
$form = new Form($_POST);
$error=' ';
?>
<title><?= isset($title) ? $title : '' ?></title>
<!--fin du head-->
</head>
<header>
    </header>
    <div class="container text-center">
        <div class="row">
            <div class="col align-self-center">
            <p><?= isset($error) ? $error : '' ?></p>
            </div>
            </div>
            <div class="row"></div>
            <div class="col align-self-center">
                <h1>Vous allez recevoir un mail , vous disposez de 60 minutes pour validé votre compte!</h1>

            </div>
        <div>
            <p><a href="?p=registration">Pas de compte c'est par ici</a></p>
        </div>

        </div>
    </div>
    <?php
    ?>
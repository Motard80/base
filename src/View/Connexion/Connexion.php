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
            <p><?= isset($Error) ? $Error : '' ?></p>
            </div>
            </div>
            <div class="row"></div>
            <div class="col align-self-center">
            <form action="" method="post" id="formConnexion"> 
            <div>
                <?= $form->inputText( 'Mai', 'Mail', 'Mail', 'Votre Email'); ?>   
                <?= $form->error('Mail') ?>
            </div>
            <div>
                <?= $form->inputPwd('pwd', 'pwd', 'pwd', 'Votre mot de passe'); ?>
                <?= $form->error('pwd') ?>
                <?= $form->checkbox('show-password','Afficher/masqué le mots de passe') ?>
            </div>
            <div>
                <?= $form->submit('Se connecter', 'connexion', 'connexion'); ?>
            </div>
            </form>

            </div>
        <div>
            <p><a href="?p=registration">Pas de compte c'est par ici</a></p>
        </div>

        </div>
    </div>
    <?php
    ?>
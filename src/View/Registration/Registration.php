<?php
include_once '../src/controleur/Registration/RegistrationCtrl.php';
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
            <form action="" method="post" id="formConnexion"> 
            <div>
                <?= $form->inputText( 'Name', 'Name', 'Name', 'Votre nom de famille'); ?>   
                <?= $form->error('Name') ?>
            </div>
            <div>
                <?= $form->inputText( 'Firstname', 'Firstname', 'Firstname', 'Votre prénom'); ?>   
                <?= $form->error('Firstname') ?>
            </div>
            <div>
                <?= $form->inputText( 'Compagny', 'Compagny', 'Compagny', 'Votre société ou structure'); ?>   
                <?= $form->error('Compagny') ?>
            </div>
            <div>
                <?= $form->inputemail('mail', 'mail', 'mail', 'votre mail') ?>
                <?= $form->error('mail') ?>
            </div>
            <div>
            <?= $form->error('PWD') ?>
            </div>
            <div>
                <?= $form->inputPwd('pwdR', 'pwdR', 'pwdR', 'Votre mot de passe'); ?>
                <?= $form->error('pwdR') ?>
            </div>   
            <div>
                <?= $form->inputPwd('pwdC', 'pwdC', 'pwdC', 'Confirmé votre mot de passe'); ?>
                <?= $form->error('pwdC') ?>
            </div>
            <div>
                <?= $form->submit('S\'enregistrer', 'registration', 'registration'); ?>
            </div>
            </form>

            </div>
        <div>
            <p><a href="?p=connexion">Vous avez un compte c'est par ici</a></p>
        </div>

        </div>
    </div>
    <?php
    ?>
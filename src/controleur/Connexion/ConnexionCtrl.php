<?php

use src\class\model\MemberModel;

$title = 'Connexion';
$formError = array();
$RegexEmail = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
if (isset($_POST['connexion'])) {
    if (!empty($_POST['Mail'])) {
        if (preg_match($RegexEmail, $_POST['Mail'])) {
            $Mail = htmlspecialchars($_POST['Mail']);
        } else {
            //Mail incorécte
            $Error = "Votre mail est incorecte, vérifié le";
        }
    } else {
        //mail vide        
        $Error = "Vous avez oubliez de mettre votre Email";
    }
    if (!empty($_POST['pwd'])) {
        $Pwd = $_POST['pwd'];
    } else {
        //mot de passe vide 
        $Error = "Vous avez oublez de mettre votre Email";
    }
    $CheckUserExist = MemberModel::showAll();
    foreach ($CheckUserExist as $Data) {
        if ($Mail === $Data['mail']) {
            $VerifPwd = $Data['PassWord'];
            $Acces = $Data['id_Acces'];
            var_dump($Acces);
            break;
        } else {
            $Error = 'Votre email n\'est pas dans la base de donnée vérifiez le ou enregistrez vous.';
        }
    }
    if (password_verify($Pwd, $VerifPwd)) {
        $newLocation = "?p=Home";
        header("Location: $newLocation", true, 301);
        $_SESSION['Done'] = $Acces;
        var_dump($_SESSION);
    } else {
        //erreur de mot de passe
        $Error = "Votre mot de passe est incorect";
    }
}

<?php

use src\class\model\MemberModel;

$title = 's\'inscrire';
$FormError = array();
$RegexName = '/^[a-zA-ZÀ-ÿ\-\' ]{2,}$/';
$RegexEmail = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
$RegeCompagny = '/^[a-zA-Z0-9\s\-\'&]+$/';
$RegexPassWord = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z0-9]).{8,}$/';
function generer_cle()
{
    // Obtenir la date et l'heure actuelles
    $maintenant = new DateTime();

    // Formater la date et l'heure dans une chaîne de caractères
    $date_heure_format = $maintenant->format("YmdHis"); // Format: AAAAMMJJHHMMSS

    // Générer le préfixe alphanumérique de 16 caractères
    $prefixe = generer_chaine_aleatoire(16);

    // Générer le suffixe alphanumérique de 16 caractères
    $suffixe = generer_chaine_aleatoire(16);

    // Générer la clé en combinant le préfixe, la date et l'heure formatée, et le suffixe
    $cle = $prefixe .  $date_heure_format  . $suffixe;

    return $cle;
}

// Fonction pour générer une chaîne alphanumérique aléatoire
function generer_chaine_aleatoire($longueur)
{
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $chaine_aleatoire = '';
    for ($i = 0; $i < $longueur; $i++) {
        $chaine_aleatoire .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }
    return $chaine_aleatoire;
}

// Utilisation de la fonction generer_cle()
$cle = generer_cle();
//echo $cle;


function obtenirDateDuJour()
{
    // Définir le fuseau horaire
    date_default_timezone_set('Europe/Paris');

    // Obtenir la date du jour au format souhaité
    $dateDuJour = date('Y-m-d');

    return $dateDuJour;
}

$AddMember = new MemberModel();
if (isset($_POST['registration'])) {
    if (!empty($_POST['Name'])) {
        if (preg_match($RegexName, $_POST['Name'])) {
            $AddName = htmlspecialchars($_POST['Name']);
            var_dump($_POST['Name']);
            $AddMember->setName($AddName);
        } else {
            $FormError['Name'] = '<img src="../../../public/asset/img/WarningRond.png" style="width: 50px;" class="images_petit" />'
                . 'Veuillez mettre un nom de famille sans caractére spéciaux ni chiffre';
        }
    } else {
        $FormError['Name'] = '<img src="../../../public/asset/img/WarningRond.png" style="width: 50px;" class="images_petit" />'
            . 'Vous avez ouvliez de mettre un nom de famille';
    }
    if (!empty($_POST['Firstname'])) {
        if (preg_match($RegexName, $_POST['Firstname'])) {
            $AddFirstname = htmlspecialchars($_POST['Firstname']);
            $AddMember->setFirstName($AddFirstname);
        } else {
            $FormError['Firstname'] = '<img src="../../../public/asset/img/WarningRond.png" style="width: 50px;" class="images_petit" />'
                . 'Veuillez mettre un prénom sans caractére spéciaux ni chiffre';
        }
    } else {
        $FormError['Firstname'] = '<img src="../../../public/asset/img/WarningRond.png" style="width: 50px;" class="images_petit" />'
            . 'Vous avez ouvliez de mettre votre prénom';
    }
    if (!empty($_POST['Compagny'])) {
        if (preg_match($RegeCompagny, $_POST['Compagny'])) {
            $AddCompagny = htmlspecialchars($_POST['Compagny']);
            $AddMember->setCompagny($AddCompagny);
        } else {
            $FormError['Compagny'] = '<img src="../../../public/asset/img/WarningRond.png" style="width: 50px;" class="images_petit" />'
                . 'Veuillez mettre un nom de société sans caractére spéciaux ni chiffre';
        }
    } else {
        $FormError['Compagny'] = '<img src="../../../public/asset/img/WarningRond.png" style="width: 50px;" class="images_petit" />'
            . 'Vous avez ouvliez de mettre un nom de famille';
    }

    if (!empty($_POST['mail'])) {
        if (preg_match($RegexEmail, $_POST['mail'])) {
            $Addmail = htmlspecialchars($_POST['mail']);
            $AddMember->setMail($Addmail);
        } else {
            $FormError['mail'] = '<img src="../../../public/asset/img/WarningRond.png" style="width: 50px;" class="images_petit" />'
                . 'Veuillez mettre un nom de famille sans caractére spéciaux ni chiffre';
        }
    } else {
        $FormError['mail'] = '<img src="../../../public/asset/img/WarningRond.png" style="width: 50px;" class="images_petit" />'
            . 'Vous avez ouvliez de mettre un nom de famille';
    }
    if (!empty($_POST['pwdR'])) {
        if (preg_match($RegexPassWord, $_POST['pwdR'])) {
            $AddPwdR = $_POST['pwdR'];
            if (!empty($_POST['pwdC'])) {
                if (preg_match($RegexPassWord, $_POST['pwdC'])) {
                    $AddPwdC = $_POST['pwdC'];
                    if ($AddPwdC === $AddPwdR) {
                        $HachePassword = password_hash($AddPwdR, PASSWORD_DEFAULT);
                        $AddMember->setPassWord($HachePassword);
                    } else {

                        $FormError['PWD'] = '<img src="../../../public/asset/img/WarningRond.png" style="width: 50px;" class="images_petit" />'
                            . 'Vos mots de passe sont différent merci de corrigé';
                    }
                } else {
                    $FormError['pwdC'] = '<img src="../../../public/asset/img/WarningRond.png" style="width: 50px;" class="images_petit" />'
                        . 'Votre mot de passe doit contenir au minimum 8 caractére, une majuscule , une minuscule, un caractére spécial et un chiffre';
                }
            } else {
                $FormError['pwdC'] = '<img src="../../../public/asset/img/WarningRond.png" style="width: 50px;" class="images_petit" />'
                    . 'Vous avez oubliez de Confirmé votre mots de passe';
            }
        } else {
            $FormError['pwdR'] = '<img src="../../../public/asset/img/WarningRond.png" style="width: 50px;" class="images_petit" />'
                . 'Votre mot de passe doit contenir au minimum 8 caractére, une majuscule , une minuscule, un caractére spécial et un chiffre';
        }
    } else {
        $FormError['pwdR'] = '<img src="../../../public/asset/img/WarningRond.png" style="width: 50px;" class="images_petit" />'
            . 'Vous avez oubliez de mettre votre mots de passe';
    }
    $AddKey = generer_cle();
    $AddMember->setKey($AddKey);
    $AddRegistrationDate = obtenirDateDuJour();
    $AddMember->setRegistrationDate($AddRegistrationDate);
    $AddAccountValidated = 25;
    $AddMember->setAccountValidated($AddAccountValidated);
    // $AddAccesId = 252;
    // $AddMember->setAccesId($AddAccesId);
    $CheckAddMember = $AddMember->insert();
    // $CheckAddMember = true;
    var_dump($date_heure_format);
    if (count($FormError) === 0) {
        if ($CheckAddMember === true) {
            // Obtenir la date et l'heure actuelles
            var_dump('ptoute');
            $maintenant = new DateTime();
            // Formater la date et l'heure dans une chaîne de caractères
            $date_heure_format = $maintenant->format("YmdHis"); // Format: AAAAMMJJHHMMSS
            $to = $Addmail;
            $subject = 'Validations de compte cyberCheck';
            $lien_validation = 'http://localhost/Cyber/public/?p=Validate&time=' . $date_heure_format . '&mail=' . $Addmail;
            $message = 'bonjour pour accéder au site veuillez cliquez sur le liens suivant vous disposez de 60  minutes à la reception de ce mail <a href="' . $lien_validation . '">Valider mon compte</a>';
            mail($to, $subject, $message);
            $newLocation = "?p=SendMail";
            header("Location: $newLocation", true, 301);
            exit;
        }
    }
}

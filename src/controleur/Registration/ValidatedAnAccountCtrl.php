<?php

use src\class\model\MemberModel;
// Fonction pour vérifier si le temps est inférieur à 30 minutes
function est_inf_30min($time_param)
{
    if ($time_param === null) {
        return false;
    }

    // Obtenir la date et l'heure actuelles
    $maintenant = new DateTime();

    // Obtenir la date et l'heure à partir du paramètre time de l'URL
    $time_url = DateTime::createFromFormat('YmdHis', $time_param);

    if ($time_url === false) {
        return false;
    }

    // Calculer la différence de temps en minutes
    $diff = $maintenant->diff($time_url);
    $diff_minutes = $diff->days * 24 * 60 + $diff->h * 60 + $diff->i;

    // Vérifier si la différence est inférieure à 30 minutes
    return $diff_minutes < 60;
}

// Récupérer le paramètre "time" de la requête GET
$time_param = isset($_GET['time']) ? $_GET['time'] : null;

// Vérifier si le temps est inférieur à 30 minutes
$result = est_inf_30min($time_param);
if (isset($_GET['mail'])) {
    if (!empty($_GET['mail'])) {
        $mail = $_GET['mail'];
        $Verif = MemberModel::showAll();

        $CheckUpdateMember = false; // Initialisation de la variable $CheckUpdateMember à false
        foreach ($Verif as $data) {
            if ($mail === $data['mail']) {
                $VerifId = $data['Id'];
                $Url2 = "http://localhost/Cyber/public/?p=registration";
                $CheckMailExist = true; // Mettre $CheckUpdateMember à true si les emails correspondent
                break; // Sortir de la boucle une fois que la correspondance est trouvée
            }
        }
        if ($CheckMailExist === true) {
            if ($result) {
                $UpdateAccountValidated = new MemberModel;
                $UpdateAccountValidated->setAccountValidated(250);
                //  $CheckUdapteAccountValidated= $UpdateAccountValidated->update($VerifId);
                //var_dump($CheckUdapteAccountValidated);
                $title = 'Compte validé';
                $CompteValide = "Votre compte est validé. Vous pouvez vous connecter <a href=\"http://localhost/Cyber/public/?p=connexion\">Connexion</a>";
            } else {
                $title = 'Délai expiré';
                $CompteValide = "Le délai est passé. Merci de contacter le webMaster qui vous indiquera la marche à suivre.";
            }
        } else {
            $title = 'Compte introuvable';
            $Error = '<img src="../../../public/asset/img/WarningRond.png" style="width: 50px;" class="images_petit" />' . 'Votre adresse mail n\'est pas enregistrée. Veuillez vous inscrire en cliquant sur le lien suivant: <a href="http://localhost/Cyber/public/?p=registration">Inscription</a>';
        }
    }
}

<?php
include_once '../src/controleur/Registration/ValidatedAnAccountCtrl.php';
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
            </div>
            <div class="row"></div>
            <div class="col align-self-center">
                <h1></h1>

                <?php
                 if(!empty($CompteValide )){?>
                 <h2><?= $CompteValide ?></h2>
                    <?php } ?>
            </div>
            <div>
                <?php if(!empty($Error)){ ?>
                    <h2><?= $Error ?></h2>
                    <?php } ?>
            </div>
            </div>
        <div>
        </div>

        </div>
    </div>
    <?php
    ?>
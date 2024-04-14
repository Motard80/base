document.getElementById('connexion').addEventListener('click', function(event){
    var pseudoConnections = document.getElementById("pseudo");
    var pseudo = pseudoConnections.value;

    console.log(pseudo);
    //event.preventDefault();

    if(pseudo.trim()===''){
        event.preventDefault();
        alert('Pseudo ou mots de passe vide');
    }
    if(pseudo.lenght < 4){
        event.preventDefault();
        alert("veuillier rentrer un  pseudo ayant  plus de 4 caracteres")
    }
    var specialCharacters = /[!@#$%^&*(),.?":{}|<>]/;
    if(specialCharacters.test(pseudo)){
        event.preventDefault();
        alert("Le pseudo ne doit pas contenir de caracteres spéciales");
        return false;
    }
    return true;
});/*
document.addEventListener('DOMContentLoaded', function () {
    var passwordInput = document.getElementById('pwd');
    var showPasswordCheckbox = document.getElementById('show-password');

    showPasswordCheckbox.addEventListener('change', function () {
        if (showPasswordCheckbox.checked) {
            // Afficher le mot de passe en texte brut
            passwordInput.type = 'text';
        } else {
            // Masquer le mot de passe
            passwordInput.type = 'password';
        }
    });
});*/
function togglePasswordVisibility(inputId, checkboxId) {
    var passwordInput = document.getElementById(inputId);
    var checkbox = document.getElementById(checkboxId);

    if (checkbox.checked) {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}

// Écouteur d'événements pour détecter les changements dans la case à cocher
document.addEventListener("DOMContentLoaded", function() {
    var checkbox = document.getElementById('show-password');
    checkbox.addEventListener('change', function() {
        togglePasswordVisibility('pwd', 'show-password');
    });
});
// Attendez que le DOM soit chargé
document.addEventListener("DOMContentLoaded", function() {
    // Sélectionnez les cases à cocher et les champs de mot de passe
    var checkboxR = document.getElementById('show-passwordR');
    var passwordR = document.getElementById('pwdR');
    var checkboxC = document.getElementById('show-passwordC');
    var passwordC = document.getElementById('pwdC');

    // Fonction pour afficher ou masquer le mot de passe
    function togglePasswordVisibility(checkbox, password) {
        if (checkbox.checked) {
            password.type = 'text';
        } else {
            password.type = 'password';
        }
    }

    // Attachez un écouteur d'événement à la case à cocher de mot de passe R
    checkboxR.addEventListener('change', function() {
        togglePasswordVisibility(checkboxR, passwordR);
    });

    // Attachez un écouteur d'événement à la case à cocher de mot de passe C
    checkboxC.addEventListener('change', function() {
        togglePasswordVisibility(checkboxC, passwordC);
    });
});

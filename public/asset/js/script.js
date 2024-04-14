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
});
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
});
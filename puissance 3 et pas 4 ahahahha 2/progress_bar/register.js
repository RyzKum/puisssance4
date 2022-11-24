const password_checker = document.querySelector('.password-checker');
const password = document.querySelector('#password');
const progress_bar = document.querySelector('.barre');

password.onkeyup = () =>{
    //console.log(password.value)
    checkPasswordStrength(password.value);
}

function checkPasswordStrength(password) {
    let strength = 0;

    if (password.match(/(?=.{1})/)) strength++; //Mot de passe faible : moins de 8 caractères, pas de caractère spécial, pas de majuscule, pas de chiffre

    if (password.match(/(?=.*[A-Z])/ && /(?=.*[0-9])/ && /(?=.{8})/)) strength++; // Mot de passe moyen : Plus de 8 caractères, une majuscule au minimum, un chiffre au minimum, pas de caractère spécial

    if (password.match(/(?=.*[A-Z])/ && /(?=.*[0-9])/ && /(?=.{8})/ && /(?=.*[!@#$%&])/)) strength++; //Mot de passe fort : Plus de 8 caractères, au moins une majuscule, un chiffre et un caractère spécial 

    // if (password.match(/(?=.*[!@#$%&])/)) strength++; // Si Contient une majusucle

    // if (password.match(/(?=.{8})/)) strength++; // Si Contient une majusucle

    console.log(strength);

    switch(strength){
        case 0:
            progress_bar.style.cssText = `width  : ${(strength / 3)*100}%; background-color: unset;`;
            write("resultat");
            break;
        case 1:
            progress_bar.style.cssText = `width  : ${(strength / 3)*100}%; background-color: red;`;
            break;
        case 2:
            progress_bar.style.cssText = `width  : ${(strength / 3)*100}%; background-color: yellow;`;
            break;
        case 3:
            progress_bar.style.cssText = `width  : ${(strength / 3)*100}%; background-color: green;`;
            break;
    }
}

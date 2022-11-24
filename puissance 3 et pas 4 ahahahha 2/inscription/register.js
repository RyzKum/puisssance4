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

    console.log(strength);


    switch(strength){
        case 0:
            progress_bar.style.cssText = `width  : ${(strength / 3)*100}%; background-color: unset;`;
            write("resultat");
            break;
        case 1:
            progress_bar.style.cssText = `width  : ${(strength / 3)*100}%; background-color: red;`;

            check = document.getElementById("prout1");

            if(check == undefined){

                let recep = document.getElementById("forceMdp");
                let weak = document.createElement("p");
                weak.textContent = "Weak";
                weak.setAttribute("id","prout1");
                recep.append(weak);

            }

            break;
        case 2:
            progress_bar.style.cssText = `width  : ${(strength / 3)*100}%; background-color: yellow;`;

            check = document.getElementById("prout2");

            if(check == undefined){

                let recep = document.getElementById("forceMdp");
                let remove = document.getElementById("prout1");
                let medium = document.createElement("p");
                medium.textContent = "Medium";
                medium.setAttribute("id","prout2");
                recep.append(medium);
                remove.remove();

            }

            break;
        case 3:
            progress_bar.style.cssText = `width  : ${(strength / 3)*100}%; background-color: green;`;
           
            check = document.getElementById("prout3");
           
            if(check == undefined){

                let recep = document.getElementById("forceMdp");
                let remove = document.getElementById("prout2");
                let strong = document.createElement("p");
                strong.textContent = "Strong";
                strong.setAttribute("id","prout3");
                recep.append(strong);
                remove.remove();

            }

            break; 
    }
}
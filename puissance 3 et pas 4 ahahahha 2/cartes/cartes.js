let carte = document.querySelector(".card");
let face = document.querySelector(".innerSquare");
let back = document.querySelector(".outerSquare");

carte.addEventListener("click", function (event) {
    // carte.style.transform = "rotateY(0deg)";
    face.style.transform = "rotateY(180deg) rotateZ(50deg)";
    back.style.transform = "rotateY(0deg) rotateZ(0deg)";
    console.log(carte);
})

let carte2 = document.querySelector(".card2");
let face2 = document.querySelector(".innerSquare2");
let back2 = document.querySelector(".outerSquare2");

carte2.addEventListener("click", function (event) {
    // carte.style.transform = "rotateY(0deg)";
    face2.style.transform = "rotateY(180deg) rotateZ(50deg)";
    back2.style.transform = "rotateY(0deg) rotateZ(0deg)";

    console.log(carte2);
})

let carte3 = document.querySelector(".card3");
let face3 = document.querySelector(".innerSquare3");
let back3 = document.querySelector(".outerSquare3");

carte3.addEventListener("click", function (event) {
    // carte.style.transform = "rotateY(0deg)";
    face3.style.transform = "rotateY(180deg) rotateZ(50deg)";
    back3.style.transform = "rotateY(0deg) rotateZ(0deg)";

    console.log(carte3);
})

let carte4 = document.querySelector(".card4");
let face4 = document.querySelector(".innerSquare4");
let back4 = document.querySelector(".outerSquare4");

carte4.addEventListener("click", function (event) {
    // carte.style.transform = "rotateY(0deg)";
    face4.style.transform = "rotateY(180deg) rotateZ(50deg)";
    back4.style.transform = "rotateY(0deg) rotateZ(0deg)";

    console.log(carte4);
})
let hautTriangle = document.getElementById("triangleChat");
let basTriangle = document.getElementById("hautDuTriangle");
let iconeChat = document.getElementById("pChat");

iconeChat.addEventListener("click",()=>{
    console.log("yes");
    if(hautTriangle.style.visibility == "hidden"){
        hautTriangle.style.visibility = "visible";
        basTriangle.style.visibility = "visible";
    }
    else{
        hautTriangle.style.visibility = "hidden";
        basTriangle.style.visibility = "hidden";
    }
})

let test = "je suis un";
console.log(test);
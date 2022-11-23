
let selectTheme = document.getElementById("inject");
let contain = document.getElementById("remove");


// C'est pour le gros theme

selectTheme.addEventListener("mouseenter",()=>{

    disney = document.createElement("p");
    disney.textContent = "Disney";
    disney.setAttribute("class","injectStyle");
    
    animep = document.createElement("p");
    animep.textContent = "Anime";
    animep.setAttribute("class","injectStyle");
    

    pokemon = document.createElement("p");
    pokemon.textContent = "Pokemon";
    pokemon.setAttribute("class","injectStyle");

    checkDefil = document.getElementsByClassName("injectStyle")[1];


    // Mettre toute les insertion au body

    if(checkDefil == undefined){

    selectTheme.append(disney);
    selectTheme.append(animep);
    selectTheme.append(pokemon);
    contain.style.height = "120px";

    }


})




selectTheme.addEventListener("mouseleave",()=>{


    document.getElementsByClassName("injectStyle")[0].remove();
    document.getElementsByClassName("injectStyle")[0].remove();
    document.getElementsByClassName("injectStyle")[0].remove();
    contain.style.height = "auto";

})


// Defilement level

let selectLevel = document.getElementById("injectLvl");
// let containLevel = document.getElementById("jeuxGlobal");


selectLevel.addEventListener("mouseenter",()=>{

    facile = document.createElement("p");
    facile.textContent = "Facile";
    facile.setAttribute("class","injectStyle");
    
    normal = document.createElement("p");
    normal.textContent = "Normal";
    normal.setAttribute("class","injectStyle");
    

    Difficile = document.createElement("p");
    Difficile.textContent = "Difficile";
    Difficile.setAttribute("class","injectStyle");

    checkDefil = document.getElementsByClassName("injectStyle")[1];


    // Mettre toute les insertion au body

    if(checkDefil == undefined){

    selectLevel.append(facile);
    selectLevel.append(normal);
    selectLevel.append(Difficile);
    selectLevel.style.height = "100px";

    }


})




selectLevel.addEventListener("mouseleave",()=>{


    document.getElementsByClassName("injectStyle")[0].remove();
    document.getElementsByClassName("injectStyle")[0].remove();
    document.getElementsByClassName("injectStyle")[0].remove();
    selectLevel.style.height = "auto";
})

const memory = document.getElementById("memory");
const buttonFacile = document.querySelector('#injectLvl');

buttonFacile.addEventListener('click',()=> {


    for(i = 0;i < 4;i++){
        
        let create = document.createElement("div");
        create.setAttribute("class","flexCard");
        memory.append(create);


        for(a = 0;a < 4;a++){

            let flex = document.createElement("div");
            flex.setAttribute("class",'card');
            create.append(flex);
        }
        // console.log("mdr")
    }
});




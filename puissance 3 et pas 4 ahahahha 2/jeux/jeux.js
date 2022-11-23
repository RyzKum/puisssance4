
let selectTheme = document.getElementById("inject");
let contain = document.getElementById("remove");



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
    console.log("test")

    
    

})




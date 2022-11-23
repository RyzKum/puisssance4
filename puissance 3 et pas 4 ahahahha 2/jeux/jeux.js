
selectTheme = document.getElementById("inject");


selectTheme.addEventListener("mouseover",()=>{


    animep = document.createElement("p");
    animep.textContent = "Anime";
    animep.setAttribute("class","injectStyle");
    checkDefil = document.getElementsByClassName("injectStyle")[1];

    pokemon = document.createElement("p");
    pokemon.textContent = "Pokemon";
    pokemon.setAttribute("class","injectStyle");


    // Mettre toute les insertion au body

    if(checkDefil == undefined){

    selectTheme.append(animep);
    selectTheme.append(pokemon);

    }


})



// selectTheme.addEventListener("click",()=>{


//     document.getElementsByClassName("injectStyle")[1].remove();
//     console.log("test")

    
    

// })




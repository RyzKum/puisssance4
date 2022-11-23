
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



selectTheme.addEventListener("mouseout",()=>{

    let compteurClass = document.getElementsByClassName("injectStyle").length;

    for(i = 0;compteurClass<i;i++){

        document.getElementsByClassName("injectStyle")[i].remove();

    }
    

})




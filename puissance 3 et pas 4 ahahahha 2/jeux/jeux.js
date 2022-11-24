
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




// selectTheme.addEventListener("mouseleave",()=>{


//     document.getElementsByClassName("injectStyle")[0].remove();
//     document.getElementsByClassName("injectStyle")[0].remove();
//     document.getElementsByClassName("injectStyle")[0].remove();
//     contain.style.height = "auto";

// })


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




// selectLevel.addEventListener("mouseleave",()=>{


//     document.getElementsByClassName("injectStyle")[0].remove();
//     document.getElementsByClassName("injectStyle")[0].remove();
//     document.getElementsByClassName("injectStyle")[0].remove();
//     selectLevel.style.height = "auto";
// })

const memory = document.getElementById("memory");
const buttonFacile = document.querySelector('#injectLvl');

let ran =  0;

function aleatoire (){

    random32 = Math.random()*100;
    randomEntier = Math.round(random32);

    if(randomEntier >31){
        aleatoire(); 
    }else{

        ran = randomEntier;
    }

}

function randomize(tab) {
    var i, j, tmp;
    for (i = tab.length - 1; i > 0; i--) {
        j = Math.floor(Math.random() * (i + 1));
        tmp = tab[i];
        tab[i] = tab[j];
        tab[j] = tmp;
    }
    return tab;
}

buttonFacile.addEventListener('click',()=> {

    let tab = [];

    for(i=0 ; i<8 ; i++){

        aleatoire();

        if(tab.indexOf(ran) == -1){

            tab.push(ran);
            tab.push(ran);
        }else{
            i--
        }

    }
    
    rantab = randomize(tab);
    console.log(rantab);

    if(document.getElementsByClassName("carte")[0] == undefined){

        for(i = 0;i < 4;i++){
            
        let create = document.createElement("div");
        create.setAttribute("class","flexCard");
        memory.append(create);


        for(a = 0;a < 4;a++){
            
            let flex = document.createElement("div");
            flex.setAttribute("class",'card');
            create.append(flex);

            let image = document.createElement("img");
            image.setAttribute("class","carte");
            flex.append(image);

        }
        
    }
    
}
    for(i=0 ; i <tab.length ; i++){

        let imageMemo = document.getElementsByClassName("carte")[i];
        imageMemo.setAttribute("id",`${i}`);
        imageMemo.src = `asset/disney/${tab[i]}.jpg`;
    }

});




let memoClick = 0;

let a; 
let aId;
let b;
let bId;

memory.addEventListener("click",(e)=>{


    console.log(e);

    memoClick++;



    if(memoClick == 1){
        a = e.srcElement.firstChild.currentSrc;
        // a = e.srcElement.currentSrc;
        aId = e.target.children[0].id;
        aIdNombre = parseInt(aId);

        let visible = document.getElementById(`${aIdNombre}`);
        visible.style.visibility = "visible";

        
        console.log(aId);
        console.log(a);
        
    }


    if(memoClick == 2){
        b = e.srcElement.firstChild.currentSrc;
        // b = e.srcElement.currentSrc;
        bId = e.target.children[0].id;
        bIdNombre = parseInt(bId);
        let visible = document.getElementById(`${bIdNombre}`);
        visible.style.visibility = "visible";

        setTimeout(checkCard,500);


        memoClick = 0;
    }

    function checkCard (){

        console.log("test");
        if(a == b){

            let stya = document.getElementById(`${aIdNombre}`);
            let styb = document.getElementById(`${bIdNombre}`);
            stya.style.visibility = "visible";
            styb.style.visibility = "visible";
            // console.log(stya);
            // console.log(styb);
            // injecter le style si vrai

            console.log("meme image");
        }else{
            // injecter si style faux

            let stya = document.getElementById(`${aIdNombre}`);
            let styb = document.getElementById(`${bIdNombre}`);
            stya.style.visibility = "hidden";
            styb.style.visibility = "hidden";

            console.log("image différend")
        }

    }


})


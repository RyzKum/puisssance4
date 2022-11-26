
let selectTheme = document.getElementById("inject");
let contain = document.getElementById("remove");

outSelect = document.getElementById("removeLvL");

// C'est pour le gros theme

console.log("test");

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




outSelect.addEventListener("mouseleave",()=>{


    document.getElementsByClassName("injectStyle")[0].remove();
    document.getElementsByClassName("injectStyle")[0].remove();
    document.getElementsByClassName("injectStyle")[0].remove();
    contain.style.height = "30px";
    let containLevel = document.getElementById("jeuxGlobal");
    containLevel.style.height = "100px";

})


// Defilement level

let selectLevel = document.getElementById("injectLvl");



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


contain.addEventListener("mouseleave",()=>{


    document.getElementsByClassName("injectStyle")[0].remove();
    document.getElementsByClassName("injectStyle")[0].remove();
    document.getElementsByClassName("injectStyle")[0].remove();
    contain.style.height = "40px";
    
})



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

const memory = document.getElementById("memoryPlace");
const buttonFacile = document.querySelector('#injectLvl');



buttonFacile.addEventListener('click',(e)=> {

    // console.log(e.target.innerHTML);

    let changeLvl = e.target.innerHTML;
    // console.log(changeLvl);

    let w;
    let u;

    // let removeAll = document.getElementsByClassName("Card").length;
    // console.log(removeAll);

    
    // for(i = 0 ; i<removeAll-1 ; i++){

    // document.getElementsByClassName("flexCard")[i].remove();

    // }

    let PlayMemo = document.createElement("div");
    PlayMemo.setAttribute("id","memory");
    memory.append(PlayMemo);




    if(changeLvl == "Facile"){

        w = 8;
        u = 4;
        
    }

    if(changeLvl == "Normal"){

        w = 18;
        u = 6;
    }

    if(changeLvl == "Difficile"){

        w=32;
        u=8;
    }


    let tab = [];

    for(i=0 ; i<w ; i++){

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

        for(i = 0;i < u;i++){
            
        let create = document.createElement("div");
        create.setAttribute("class","flexCard");
        memory.append(create);

        // ici


        for(a = 0;a < u;a++){
            
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


// Debut memo si afficher 


let memoClick = 0;

let a; 
let aId;
let b;
let bId;

memory.addEventListener("click",(e)=>{

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


var startTime = 0
var start = 0
var end = 0
var diff = 0
var timerID = 0
function chrono(){
	end = new Date()
	diff = end - start
	diff = new Date(diff)
	var msec = diff.getMilliseconds()
	var sec = diff.getSeconds()
	var min = diff.getMinutes()
	if (min < 10){
		min = "0" + min
	}
	if (sec < 10){
		sec = "0" + sec
	}
	if(msec < 10){
		msec = "00" +msec
	}
	else if(msec < 100){
		msec = "0" +msec
	}
	document.getElementById("chronotime").innerHTML = min + ":" + sec + ":" + msec
	timerID = setTimeout("chrono()", 10)
}
function chronoStart(){
	document.chronoForm.startstop.value = "stop!"
	document.chronoForm.startstop.onclick = chronoStop
	start = new Date()
	chrono()
}
function chronoContinue(){
	document.chronoForm.startstop.value = "stop!"
	document.chronoForm.startstop.onclick = chronoStop
	start = new Date()-diff
	start = new Date(start)
	chrono()
}
function chronoStop(){
	document.chronoForm.startstop.value = "start!"
	document.chronoForm.startstop.onclick = chronoContinue
	clearTimeout(timerID)
}
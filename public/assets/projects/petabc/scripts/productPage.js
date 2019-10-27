
// logo z index for mobile

/////////////////////////////////////////////
// Debut changement des objets///////////////
/////////////////////////////////////////////

document.querySelector(".models__containerBorder--red").addEventListener('click' , colorRed);

document.querySelector(".models__containerBorder--red").addEventListener('click' , colorRed);


document.querySelector(".models__containerBorder--black").addEventListener('click' , colorBlack);


document.querySelector(".models__containerBorder--white").addEventListener('click' , colorWhite);

let imgMachine = document.querySelector("img.models__img")
let colorBackTop = document.querySelector(".colorBack--top")
let colorBackBottom = document.querySelector(".colorBack--bottom")

function colorRed(){
  imgMachine.src = "https://www.richard-thibault.com/assets/projects/petabc/images/productPage/distributeurRed.png"
  imgMachine.alt = "Distributeur automatique de croquette rouge"
  colorBackTop.style.backgroundColor = "#DF424E"
  colorBackBottom.style.backgroundColor = "#FDF51C"
}

function colorBlack(){
  imgMachine.src = "https://www.richard-thibault.com/assets/projects/petabc/images/productPage/distributeurBlack.png"
  imgMachine.alt = "Distributeur automatique de croquette noir"
  colorBackTop.style.backgroundColor = "#434343"
  colorBackBottom.style.backgroundColor = "#FBF4E2"
}

function colorWhite(){
  imgMachine.src = "https://www.richard-thibault.com/assets/projects/petabc/images/productPage/distributeurWhite.png"
  imgMachine.alt = "Distributeur automatique de croquette blanc"
  colorBackTop.style.backgroundColor = "#FBF4E2"
  colorBackBottom.style.backgroundColor = "#FDF51C"
}
/////////////////////////////////////////////
// Fin changement des objets///////////////
/////////////////////////////////////////////


//////////////////////////////
// Debut FAQ /////////////////
//////////////////////////////
var acc = document.getElementsByClassName("faq__div__accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
/////////////////////////////////////////////
// Fin FAQ ////////////////////////////////
/////////////////////////////////////////////

///////test

let allQuestions = document.querySelectorAll(".faq__container article h4")

for (let i = 0; i <allQuestions.length; i++){
  allQuestions[i].addEventListener('click',function() {
    if(this.parentNode.classList.contains('current')){
      this.parentNode.classList.remove('current')
    }
    else{
      let current = document.querySelector('.current')
      this.parentNode.classList.add('current')
    }
  }
)
}
const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;
let titre = document.getElementById("titre");

//premier bouton SUIVANT du formulaire
nextBtnFirst.addEventListener("click", function(event){

  //condition qui vérifie que la case choisie est PROPRIETAIRE
  event.preventDefault();
  let titre=document.getElementById("titre").value;

  if (titre != "proprietaire"){
    alert("Désolé mais vous devez être propriétaire pour profiter de ce programme");
  }

  else{
  slidePage.style.marginLeft = "-25%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
  }
});


//deuxieme bouton SUIVANT
nextBtnSec.addEventListener("click", function(event){
  event.preventDefault();

  let chauffage = document.getElementById("chauffage").value;
  if (chauffage == "electrique"){
    alert("Désolé mais ce type de chauffage ne donne pas accès au programme")
  }

  else{
    slidePage.style.marginLeft = "-50%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
  }
});

//troisieme bouton suivant
nextBtnThird.addEventListener("click", function(event){
  event.preventDefault();

  let prenom = document.getElementById("prenom").value;
  let nom = document.getElementById("nom").value;
  let telephone = document.getElementById("telephone").value;
  let email = document.getElementById("email").value;

  if (prenom == "" || nom =="" || telephone == "" || email == "")
  {
    alert("Veuillez remplir toutes les cases");
  }

  else{
  slidePage.style.marginLeft = "-75%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
  }
})

//bouton SOUMETTRE
submitBtn.addEventListener("click", function(){

  let region = document.getElementById("region").value;
  let code_postal = document.getElementById("code_postal").value;
  let ville = document.getElementById("ville").value;

  if (region == "" || code_postal == "" || ville == "")
  
  {
    alert("Veuillez rempl")
  }

  else{
 /*
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
  */
 alert("merci")

 
  }
});

//premier bouton PRECEDENT
prevBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "0%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});

//deuxieme bouton PRECEDENT
prevBtnThird.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});

//troisieme bouton précédent
prevBtnFourth.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});

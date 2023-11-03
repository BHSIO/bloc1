function mybck() {
    document.getElementById("bckground").style.backgroundColor = "lightblue";
}

function option() {
  let input = document.getElementById("text").value;
  let x = document.getElementById("mySelect");
  let option = document.createElement("option");
  option.text = input ;
  x.add(option);
}

function adde() {
  const nbun = parseInt(document.getElementById("nb1").value);
  const nbdeux = parseInt(document.getElementById("nb2").value);

  let somme = document.createElement("somme");
  somme.innerHTML = Number(nbdeux+nbun);
  document.body.appendChild(somme);
}

function changeImage(image) {
  image.src = 'https://cdn.pixabay.com/photo/2015/04/23/21/59/tree-736875_1280.jpg';
  image.src = 'https://cdn.pixabay.com/photo/2018/01/21/19/57/tree-3097419_1280.jpg';
  image.src = 'https://cdn.pixabay.com/photo/2015/07/09/22/45/tree-838667_1280.jpg';
  image.src = 'https://cdn.pixabay.com/photo/2014/08/01/00/08/pier-407252_1280.jpg';
  image.src = 'https://cdn.pixabay.com/photo/2015/12/01/20/28/road-1072823_1280.jpg';
  
}
document.getElementById("mouseover").onmouseover = function() {mouseOver()};
document.getElementById("mouseover").onmouseout = function() {mouseOut()};

function mouseOver() {
  alert("Ceci est une pizza rigolote");
}

function mouseOut() {
  document.getElementById("mouseover").style.color = "black";
}
let timerID = null;
let timerActif = false;

function stopClock() {
  if (timerActif) clearTimeout(timerID);
  timerActif = false;
}

function startClock() {
  stopClock();
  showtime();
}

function showtime() {
  let now = new Date();
  let hour = now.getHours();
  let min = now.getMinutes();
  let sec = now.getSeconds();
  heure = (hour > 9? hour:"0" + hour);
  heure += ":" + (min > 9? min:"0" + min);
  heure += ":" + (sec > 9? sec:"0" + sec);
  document.Clock.Horloge.value = heure;
  //pour mettre l'horloge dans la barre de status :
  //window.status = heure;
  timerID = setTimeout("showtime()",1000);
  timerActif = true;
}

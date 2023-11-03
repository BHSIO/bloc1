function mybck() {
    document.getElementById("bckground").style.backgroundColor = "lightblue";
}

function option() {
  var input = document.getElementById("text").value;
  var x = document.getElementById("mySelect");
  var option = document.createElement("option");
  option.text = input ;
  x.add(option);
}

function adde() {
  const nbun = parseInt(document.getElementById("nb1").value);
  const nbdeux = parseInt(document.getElementById("nb2").value);
  var somme = document.createElement("somme");
  somme.text = Number(nbdeux+nbun);
  somme.add(somme);
  
}
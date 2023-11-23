<?php
$msg="Error Veuillez renseigner un message";
?>
<h1>Veuillez renseigner un message</h1>
<form name="form" action="" method="get">
  <input type="text" name="subject" id="subject" value="Votre message">
</form>
<p><?php

if (isset($_GET['subject'])){
  echo $_GET['subject'];
}else{
  echo $msg;
}
?></p>

<ul>
  <li><a id="1" name="1"  href="index.php?msg=je_suis_le_premier_message&id=1">1</a></li>
  <li><a id="2" name="2" href="index.php?msg=je_suis_le_deuxieme_message&id=2">2</a></li>
  <li><a id="3" name="3" href="index.php?msg=je_suis_le_troisieme_message&id=3">3</a></li>
</ul>
<p>
  <?php
  if (isset($_GET['msg'])){
    echo $_GET['msg'];
  }else{
    echo "<p>veuillez selectionné un des trois liens</p>";
  }
  
  ?>

<?php
$chiffre="<p>Error Veuillez renseigner un chiffre</p>";
$newchiffre=$_GET['nwchiffre']??15;
if($newchiffre>=15){
  $size=$newchiffre;
  $color="#FF0000";
}else if($newchiffre>=30){
  $size=$newchiffre;
  $color="#08FF00";
}else if($newchiffre>=50){
  $size=$newchiffre;
  $color="#0036FF";
}else{
  echo $chiffre;
}
?>
<from name="form2" action="index.php" method="get">
  <input type="text" name="nwchiffre" id="nwchiffre" value="">
  <input type="submit" name="nwchiffre">
</form>
<p style="color: <?=$color?>; font-size: <?=$size?>px">BONJOUR TOI</p>

<h2>Methode Post</h2>
<form name="form3" action="form.php" method="post">
  <input type="text" name="name" value="">
  <input type="text" name="firstname" value="">
  <input type="email" name="email" value="">
  <input type="submit" name="form3">
</form>

<?php
$a=[
   "Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering animata corpora quaeritis. Summus brains sit​​, morbo vel maleficia? De apocalypsi gorger omero undead survivor dictum mauris. Hi mindless mortuis soulless creaturas, imo evil stalking monstra adventus resi dentevil vultus comedat cerebella viventium. Qui animated corpse, cricket bat max brucks terribilem incessu zomby. The voodoo sacerdos flesh eater, suscitat mortuos comedere carnem virus. Zonbi tattered for solum oculi eorum defunctis go lum cerebro. Nescio brains an Undead zombies. Sicut malus putrid voodoo horror. Nigh tofth eliv ingdead.",
    "Cum horribilem walking dead resurgere de crazed sepulcris creaturis, zombie sicut de grave feeding iride et serpens. Pestilentia, shaun ofthe dead scythe animated corpses ipsa screams. Pestilentia est plague haec decaying ambulabat mortuos. Sicut zeder apathetic malus voodoo. Aenean a dolor plan et terror soulless vulnerum contagium accedunt, mortui iam vivam unlife. Qui tardius moveri, brid eof reanimator sed in magna copia sint terribiles undeath legionis. Alii missing oculis aliorum sicut serpere crabs nostram. Putridi braindead odores kill and infect, aere implent left four dead.",
    "I'm baby kombucha keffiyeh pork belly lo-fi semiotics. Authentic tote bag normcore swag ramps gastropub, banjo street art. Unicorn locavore single-origin coffee, jean shorts kickstarter poke slow-carb activated charcoal PBR&B. Authentic big mood iceland pickled gochujang lumbersexual small batch pitchfork everyday carry jean shorts affogato vinyl man braid keffiyeh kombucha. Air plant same vice lomo, williamsburg semiotics portland adaptogen cornhole vape health goth. Succulents JOMO selfies YOLO snackwave DIY kitsch sriracha.",
    "Deep v praxis 8-bit readymade, banh mi waistcoat freegan mixtape tbh bruh DSA jawn cupping sartorial. Palo santo keffiyeh next level sus kombucha you probably haven't heard of them neutra poutine meditation hell of fingerstache single-origin coffee pop-up. Direct trade microdosing scenester, plaid locavore Brooklyn you probably haven't heard of them raclette taxidermy blackbird spyplane typewriter. Cliche pug Brooklyn shoreditch flexitarian deep v dreamcatcher chartreuse iPhone fixie whatever. Tumeric kombucha pok pok salvia sriracha meggings etsy. Synth bushwick gastropub 8-bit squid.",
    "Etiam diam augue, laoreet et blandit non, aliquet nec lectus. Phasellus a bibendum ipsum. Mauris porttitor metus ac nulla faucibus rutrum. Sed tempor vestibulum ligula, non bibendum massa placerat non. Suspendisse consequat turpis eget nibh porttitor, quis eleifend erat ornare. Etiam sed magna turpis. Fusce a purus nulla. Sed vel nisi ac sem imperdiet pellentesque. In mollis quam a rutrum ullamcorper.",
];

?>
<h2>Gen paraghe</h2>
<form name="form4" action="" method="get">
  <input type="number" name="par" id="par" value="">
</form>
<p><?php
$nbpar=$_GET['par']??1;
var_dump($_GET);
for($i;$i<count($a);$i++){
  if($nbpar<=5){
  echo "<br>$a[$nbpar]<br>";
  }else{
    $a[$nbpar] = rand($a[0],$a[5]);
    echo "<br>$a[$nbpar]<br>";
  }
}
?></p>

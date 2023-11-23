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

<from name="form" action="" method="get">
  <input type="text" name="nwchiffre" id="nwchiffre" value="renseigné un chiffre">
</form>
<?php
$chiffre="<p>Error Veuillez renseigner un chiffre</p>";
$newchiffre=$_GET['nwchiffre']??15;
$color="black";
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
var_dump($_GET['value']);
?>
<p style="color: <?=$color?>; font-size: <?=$size?>px;">BONJOUR TOI</p>
<p>chut</p>
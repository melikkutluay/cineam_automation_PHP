<html lang="tr">
  <head>
    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="bootstrap/css/like.css">
  </head>
  <body>
<?php
if ($_GET) {

if (isset($_REQUEST['button1'])) { ?>

    <?php
button1();   ?>   
<?php }
if (isset($_REQUEST['button2'])) {
  button2();
}
}?> <?php
function button1(){
    for ($i=0; $i <1 ; $i++) {

   } }  ?>

<?php
function button2(){
?>
<input type="text" name="" value="" style="width:300px;" placeholder="filmin resminin linkini adresini kopyalayınız"><br>
<input type="text" name="film_adi" value="" style="width:300px;" placeholder="filmin adını giriniz"><br>
<input type="radio" name="salon"
	value="s1">solan 1</input>
<input type="radio" name="salon"
	value="s2">salon 2</input>
  <input type="radio" name="salon"
	value="s3">salon 3</input>
<input type="radio" name="salon"
	value="s4">salon 4</input>
  <input type="radio" name="salon"
	value="s5">salon 5</input>
<input type="radio" name="salon"
	value="s6">salon 6</input><br>

   <input type="checkbox" name="seans1"
  	  value="9">09:00</input>
   <input type="checkbox" name="seans2"
  	  value="10">10:00</input>
   <input type="checkbox" name="seans3"
  	  value="11">11:00</input>
    <input type="checkbox" name="seans4"
    	value="12">12:00</input>
    <input type="checkbox" name="seans5"
    	value="13">13:00</input>
   <input type="checkbox" name="seans6"
      value="14">14:00</input>
    <input type="checkbox" name="seans1"
    	value="15">15:00</input>
    <input type="checkbox" name="seans1"
    	value="16">16:00</input>
    <input type="checkbox" name="seans1"
  	  value="17">17:00</input>
    <input type="checkbox" name="seans1"
  	  value="18">18:00</input>
    <input type="checkbox" name="seans1"
      value="19">19:00</input>
    <input type="checkbox" name="seans3"
      value="20">20:00</input>
    <input type="checkbox" name="seans4"
  	  value="21">21:00</input>
    <input type="checkbox" name="seans1"
    	value="22">22:00</input>

<?php } ?>
        <br>

  <!--    <button class="btn btn-default" id="btnfun2" name="btnfun2" onClick='location.href="?button2=1"'>Yazı Bas</button>
     <button class="btn btn-default" id="btnfun1" name="btnfun1" onClick='location.href="?button1=1"'>Filmi Ekle</button>
  --> </body>
 </html>

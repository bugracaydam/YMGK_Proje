<?php 
try {

	$db=new PDO("mysql:host=localhost;dbname=sifreleme;charset=utf8",'root','');
   // echo "baglı";
}
catch (PDOExpception $e) {
	echo $e->getMessage();
}
 ?>
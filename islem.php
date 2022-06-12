<?php
include 'baglan.php';

if (isset($_POST['kullanicigiris'])) {


	
	echo $kullanici_mail=htmlspecialchars($_POST['kullanici_mail']); 
	
	 $kullanici_password=md5($_POST['kullanici_password']); 
				$cipher='AES-128-CBC';
				$key='56xN1A684d3d4a5cf3232po35b9236cf93454fdf7sjkjd9b1jk51jkj4GT6525k34fF5346y6ı3455f21hdfgdjkSMuy3jkj6cjkjkd13b0f1';
				$password=openssl_encrypt($kullanici_password, $cipher, $key);


	$kullanicisor=$db->prepare("select * from kullanici where kullanici_mail=:mail and  kullanici_password=:password");
	$kullanicisor->execute(array(
		'mail' => $kullanici_mail,
		'password' => $password
	));


	$say=$kullanicisor->rowCount();



	if ($say==1) {

	

		header("Location:anasayfa.php");
		exit;
		




	} else {


		header("Location:login.php?durum=basarisizgiris");
		exit;

	}


}

if (isset($_POST['kullanicikaydet'])) {

	
	echo $kullanici_adsoyad=htmlspecialchars($_POST['kullanici_adsoyad']); echo "<br>";
	echo $kullanici_mail=htmlspecialchars($_POST['kullanici_mail']); echo "<br>";

	echo $kullanici_passwordone=trim($_POST['kullanici_passwordone']); echo "<br>";
	echo $kullanici_passwordtwo=trim($_POST['kullanici_passwordtwo']); echo "<br>";



	if ($kullanici_passwordone==$kullanici_passwordtwo) {


		if (strlen($kullanici_passwordone)>=6) {


			

			


// Başlangıç

			$kullanicisor=$db->prepare("select * from kullanici where kullanici_mail=:mail");
			$kullanicisor->execute(array(
				'mail' => $kullanici_mail
			));

			//dönen satır sayısını belirtir
			$say=$kullanicisor->rowCount();



			if ($say==0) {

				//md5 fonksiyonu şifreyi md5 şifreli hale getirir.
				
				$data=md5($kullanici_passwordone);
				$cipher='AES-128-CBC';
				$key='56xN1A684d3d4a5cf3232po35b9236cf93454fdf7sjkjd9b1jk51jkj4GT6525k34fF5346y6ı3455f21hdfgdjkSMuy3jkj6cjkjkd13b0f1';
				$password=openssl_encrypt($data, $cipher, $key);
		


			//Kullanıcı kayıt işlemi yapılıyor...	
				$kullanicikaydet=$db->prepare("INSERT INTO kullanici SET
					kullanici_adsoyad=:kullanici_adsoyad,
					kullanici_mail=:kullanici_mail,
					kullanici_password=:kullanici_password
					");
				$insert=$kullanicikaydet->execute(array(
					'kullanici_adsoyad' => $kullanici_adsoyad,
					'kullanici_mail' => $kullanici_mail,
					'kullanici_password' => $password
				));

				if ($insert) {


					header("Location:login.php?durum=Girişyapabilirsiniz");


				//Header("Location:../production/genel-ayarlar.php?durum=ok");

				} else {


					header("Location:signup.php?durum=basarisiz");
				}

			} else {

				header("Location:signup.php?durum=mukerrerkayit");



			}




		// Bitiş



		} else {


			header("Location:signup.php?durum=eksiksifre");


		}



	} else {



		header("Location:signup.php?durum=farklisifre");
	}
	


}
 ?>



<?php
include("ayar.php");
session_start();
if(!isset($_SESSION["login"])){
	echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
	echo "HOŞGELDİNİZ EMİR ÖNDER DEMİRCAN<br>";
	echo "ANA SAYFAYA YÖNLENDİRİLİYORSUNUZ...";
	echo header("Refresh: 3; url=anasayfa.html");
}
?>
<?php 
	//--------------------------------------------------
	//Genel
	//--------------------------------------------------
	$siteAdi = "Basit İçerik Takip Sistemi";
	
	//--------------------------------------------------
	//Sayfa
	//--------------------------------------------------
	$title = "Basit İçerik Takip Sistemi";
	$kisaltma = "";
	$yazar = "yönetici";

	//--------------------------------------------------
	//Sayfalar
	//--------------------------------------------------
	$hakkindaSayfasi = "icerik-goruntule.php?id=1076";

	//--------------------------------------------------
	//Statik Dosya Oluşturmak İçin Kalıplar
	//--------------------------------------------------
	$statikDosyaKalip1 = file_get_contents("yonetim/icerik-kalip/1.txt");
	$statikDosyaKalip2 = file_get_contents("yonetim/icerik-kalip/2.txt");
	$statikDosyaKalip3 = file_get_contents("yonetim/icerik-kalip/3.txt");

	//--------------------------------------------------
	//Sidebar Listelenecek Etiketler Ve Kategoriler
	//--------------------------------------------------
	$etiket_liste = "basit içerik takip sistemi,boş etiket";
	$kategori_liste = "Genel,Meta";
	$arac_liste="lt-gt-donusturucu.php,dosya-yukle.php";

	//--------------------------------------------------
	//Klasörler
	//--------------------------------------------------
	$yuklemeDizini = "yukleme";

	//--------------------------------------------------
	//İçerik Ekleme Sayfası
	//--------------------------------------------------
	$varsayilan_kategori = "Programlama";
	$varsayilan_etiket = "";
	$varsayilan_icerik_tur = "icerik"; //(icerik, sayfa)

<?php
include("ayar.php");
session_start();
?>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="stylesheet.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Pacifico|Shadows+Into+Light|Ubuntu" rel="stylesheet">
    <title>EMİR ÖNDER DEMİRCAN - Kişisel Blog Sayfası</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-a fixed-top">
                    <a class="navbar-brand yazi" href="#" style="font-size: 32px;">Emir Önder Demircan</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Hakkımda</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="egitimbilgilerim.html">Eğitim Bilgilerim</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sehrim.html">Şehrim</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="mirasim.html">Mirasım</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="iletisim.html">İletişim</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="loginpanel.html">
                                    <?php 
                                    if (isset($_SESSION["login"])) {
                                       echo $_SESSION["email"];
                                   } else {
                                       echo "Kullanıcı Girişi";
                                   }


                                   ?>
                               </a>
                           </li>
                       </ul>
                   </div>

               </nav>
           </div>
       </div>
   </div>
   <br>
   <br>
   <?php
   if(!isset($_SESSION["login"])) {
       
       ?>
       <br>
       <br>
       <div class="container">
        <div class="alert alert-danger" role="alert">
            Bu sayfayı görüntülemeye yetkiniz yok. <a href="index.html">Anasayfaya gitmek için tıklayın.</a>
        </div>
    </div>
    <?php

} else {
	?>
    <br>
    <br>
    <div class="container">
        <div class="alert alert-primary" role="alert">
            <?php echo $_SESSION["email"] ?> olarak giriş yaptınız.
        </div>
    </div>

    <?php

}
?>
</body>
</html>
<?php

include "config.php";

 

if (isset($_POST["formname"])) {

             if ($_POST["formname"]=="girisyap"){

    // Kayıt formundan gelen verileri alın

 

    $email = $_POST["email"];

    $parola = $_POST["password"];

 

    // Boş alan kontrolü yapın

    if (empty($email) || empty($parola)) {

        // Alanlar boş bırakılamaz, kullanıcıya uyarı verin

        echo "Bu alanlar boş bırakılamaz!";

    } else {

        $kayitbasarili = doAuthentication($email,$parola);

        if ($kayitbasarili) {

            header("Location: giristenSonrakiEkran.php");

        } else {

            header("Location:hataliGiris.php");

        }

    }

             }

}

 

if (isset($_POST["formname"])) {

             if ($_POST["formname"]=="kayitol"){

    $email = $_POST["email"];

    $parola = $_POST["password"];

             $kullaniciadi = $_POST["kullaniciadi"];

            

 

    // Boş alan kontrolü yapın

     if (empty($kullaniciadi) || empty($email) || empty($parola)) {

        // Alanlar boş bırakılamaz, kullanıcıya uyarı verin

        echo "Bu alanlar boş bırakılamaz!";

    } else {

        $kontrol = doregistiration($email,$kullaniciadi,$parola);

 

        if (!$kontrol) {

            header("Location: kayitBasarili.php");

        } else {

            header("Location: hataliGiris.php");

        }

    }

}

}

 

//EĞER POST var ise
//kullanıcı adı ve şifreyi al
//veritabanına insert et
//EĞER POST yok ise
//sayfa normal çalışacak

if (isset($_POST["kayitFormu"])) {

$email = $_POST["email"];
$sifre = $_POST["sifre"];

echo $email;
exit();
}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bootstrap Navbar with PHP</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">CHAIN</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
<li class="nav-item active">
<a class="nav-link" href="#">Ana Sayfa</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Hakkımızda</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Hizmetler</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">İletişim</a>
</li>
</ul>
</div>
</nav>

<body style="background-color: #272f37;">

<nav class="navbar navbar-bg-custom">
<div class="container-fluid">
<a class="navbar-brand navbar-brand-custom">Ne aramıştınız?</a>
<form class="d-flex" role="search">
<input class="form-control me-2 search-text" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success" type="submit">Aramak</button>
</form>
</div>

<form class="row g-3" method="post" action="<?php print $_SERVER["PHP_SELF"] ?>">
<div class="col-md-6">
<label for="inputEmail4" class="form-label">Email</label>
<input type="email" name="email" class="form-control" id="inputEmail4">
</div>
<div class="col-md-6">
<label for="inputPassword4" class="form-label">Şifre</label>
<input type="password" name="sifre" class="form-control" id="inputPassword4">
</div>

<div class="col-12">
<div class="form-check">
<input class="form-check-input" type="checkbox" id="gridCheck">
<label class="form-check-label" for="gridCheck">
Beni hatırla
</label>
</div>
</div>

<div class="col-12">
<input type="submit" name="kayitFormu" class="btn btn-primary"/>
</div>
</form>
</body>
</html>


 	 	 

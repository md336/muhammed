<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Navbar with PHP</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"></a>
	<a class="navbar-brand" href="#">
      <img src="img/chaın.png" class=" " style="max-width:100px;height:50px;" />
    </a>
,
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Ana Sayfa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="hakkımızda.PHP">Hakkımızda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="hizmetler.php">Hizmetler</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="iletişim.php">İletişim</a>
            </li>
			
        </ul>
		    
    </div>
	<div class="d-flex justify-content-end">
	                 <a class="nav-link" href="../proje/kayit.php">Kayıt ol</a>

	</div>
</nav>

<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <?php
        $menuItems = array(
            array("Ana Sayfa", "#"),
            array("Hakkımızda", "#"),
            array("Hizmetler", "#"),
            array("İletişim", "#")
        );
        foreach ($menuItems as $item) {
            echo '<li class="nav-item"><a class="nav-link" href="' . $item[1] . '">' . $item[0] . '</a></li>';
        }
        ?>
    </ul>
</div>

<div class="container">
    <div class="row vertical-offset-100">
	
	<div class="col-md-4"></div>
	
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title"> Lütfen Giriş Yapın </h3>
			 	</div>
			  	<div class="panel-body">
			    	<form  action="giris-yap.php" method="POST">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="E-mail" id="email" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Şifre" id="password" name="password" type="password" value="">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Beni hatırla
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Giriş">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
		
		<div class="col-md-4"></div>
		
	</div>
</div>	

<style>
        body {
            background-color: #272f37; /* Arka plan rengi */
            color: white; /* Metin rengi */
            font-family: Arial, sans-serif;
        }
        h1 {
            border-bottom: 2px solid white;
            padding-bottom: 5px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
    </style>
<img style="display: block;-webkit-user-select: none;margin: auto;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" src="https://i.aydinlik.com.tr/storage/files/images/2022/09/09/kitaplar-gb87.jpg">
</body>
</html>

<?php

session_start();

 

if(isset($_SESSION["ISLOGIN"]) && $_SESSION["ISLOGIN"] == true) {

             header("Location: giristenSonrakiEkran.php");        

}

 

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

 

?>
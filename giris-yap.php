<?php
include "config.php";
session_start();

if(isset($_POST['girisyap']))
{
	$email=$_POST['email'];
	$parola=$_POST['password'];
	
	$sorgu = $conn->query("select * from users where email='$email' and şifre='$parola'");

	if($sorgu->num_rows>0){
		$cikti = $sorgu->fetch_array();

		$_SESSION['kullanıcı_id']=$cikti[0];
		$_SESSION['mail']=$cikti[3];
		$_SESSION['şifre']=$cikti[1];
		$_SESSION['kullanıcı adı']=$cikti[2];
		
		
	
	
		//header('Location: index.php');
		
	}
	else{
		echo'
		<div class="conteiner w-50 mx-auto p-3">
			<div class="alert alert-danger" role="alert">
					Giriş başarısız.
			</div>
		</div>';
	}  
}	

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Navbar with PHP</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Ana içerik arka plan rengini gri yap */
        body {
            background-color: #272f37;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"></a>
	<a class="navbar-brand" href="#">
      <img src="img/chaın.png" class=" " style="max-width:100px;height:50px;" />
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="Kelime arama Bölümü.php">Kelime Arama Bölümü</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kelime ekleme Bölümü.php">Kelime Ekleme Bölümü</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Kelime sonucları Bölümü.php">Kelime Sonuçları Bölümü</a>
            </li>
           
            
			
        </ul>
		    

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

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Etkinlik Yönetim Uygulaması</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        /* Ana içerik arka plan rengini beyaz yap */
        body {
            background-color: white;
        }
    </style>
</head>
<body>
    <header>
        <h1>Etkinlik Yönetim Uygulaması</h1>
    </header>

    <main>
        <section class="recent-words">
            <h2>Son Eklenen Kelimeler</h2>
            <ul>
                <li>Kelime </li>
                <li>Kitap </li>
                <li>Bilgisayar </li>
                <!-- Daha fazla son eklenen kelime ekleyebilirsiniz -->
            </ul>
        </section>

        <section class="popular-categories">
            <h2>Popüler Kategoriler</h2>
            <ul>
                <li>Teknoloji </li>
                <li>Sağlık </li>
                <li>Spor </li>
                <!-- Daha fazla popüler kategori ekleyebilirsiniz -->
            </ul>
        </section>
    </main>
</body>
</html>







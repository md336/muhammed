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

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">

<html>
<head>
    <title>Yeni Kelime Ekle</title>
</head>
<body>
    <h1>Yeni Kelime Ekle</h1>
    
    <form method="post" action="ekle.php">
        <label for="kelime">Kelime:</label>
        <input type="text" id="kelime" name="kelime" required><br><br>

        <label for="tanım">Tanım:</label>
        <textarea id="tanım" name="tanım" rows="4" required></textarea><br><br>

        <label for="örnek">Örnek Cümle:</label>
        <textarea id="örnek" name="örnek" rows="4" required></textarea><br><br>

        <input type="submit" value="Ekle">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Veritabanı bağlantısını burada yapabilirsiniz (örneğin, mysqli kullanarak)

    $kelime = $_POST["kelime"];
    $tanım = $_POST["tanım"];
    $örnek = $_POST["örnek"];

    
    $conn = new mysqli("localhost", "kullanici_adi", "parola", "veritabani_adi");
    
    if ($conn->connect_error) {
        die("Veritabanı bağlantı hatası: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO kelimeler (kelime, tanım, örnek) VALUES ('$kelime', '$tanım', '$örnek')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Yeni kelime başarıyla eklendi.";
    } else {
        echo "Hata: " . $conn->error;
    }
    
    $conn->close();
    
}
?>


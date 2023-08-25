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
<!-- Sayfa içeriği burada gelecek -->
</body>
</html>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Background Color with PHP</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<!-- Sayfa içeriği burada gelecek -->
</body>
</html>
<body style="background-color: #f0f0f0;">
<!-- Sayfa içeriği burada gelecek -->
</body>
<body style="background-color: #f0f0f0;">
    <div class="container">
        
        
    </div>
</body>
<nav class="navbar navbar-bg-custom">
  <div class="container-fluid">
    <a class="navbar-brand navbar-brand-custom">Ne aramıştınız?</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2 search-text" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
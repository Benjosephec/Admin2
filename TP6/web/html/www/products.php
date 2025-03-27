<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WoodyToys - Catalogue</title>
<link rel="stylesheet" href="style.css">
<link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
  <header>
    <h1>Catalogue WoodyToys</h1>
    <nav>
      <a href="https://www.l2-10.ephec-ti.be/index.html">Accueil</a>
      <a href="https://www.l2-10.ephec-ti.be/products.php">Catalogue</a>
      <a href="https://blog.l2-10.ephec-ti.be">Blog</a>
    </nav>
  </header>

  <div class="content">
    <h2>Nos produits</h2>
    <p>Découvrez notre sélection de jouets en bois de qualité.</p>

<?php
$dbname = getenv('MARIADB_DATABASE');
$dbuser = getenv('MARIADB_USER');
$dbpass = getenv('MARIADB_PASSWORD');
$dbhost = getenv('MARIADB_HOST');
$connect = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect to '$dbhost'");
mysqli_select_db($connect,$dbname) or die("Could not open the database '$dbname'");
$result = mysqli_query($connect,"SELECT id, product_name, product_price FROM products");
?>

<table class="rounded-corners">
<tr>
<th>Numéro de produit</th>
<th>Descriptif</th>
<th>Prix</th>
</tr>

<?
while ($row = mysqli_fetch_array($result)) {
  printf("<tr><th>%s</th> <th>%s</th> <th>%s</th></tr>", $row[0], $row[1],$row[2]);
}
?>

</table>

</div>
<footer>
    <p>WoodyToys &copy; 2025 - Groupe L2-10</p>
  </footer>

</body>
</html>

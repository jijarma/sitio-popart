
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTADOS</title>
    <link rel="shorcut icon" href="img/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.typekit.net/wmf8ylq.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <img src="img/logo.png">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <ion-icon name="grid-outline"></ion-icon>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="filosofia.html">filosofia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="imagenes.html">imagenes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><strong><ins>artistas</ins></strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactanos.html">contactanos</a>
              </li>
            </ul>
          </div>
        </div>
</nav>

<?php 
$nombre = $_POST['buscar'];

$mysqli = new mysqli("localhost", "root", "", "pd3");

$sql = "SELECT imagen, nombre, apellido, descripcion FROM artistas WHERE lcase(nombre) like lcase('%" . $nombre . "%') or lcase(apellido) like lcase('%" . $nombre . "%')";
$result = $mysqli->query($sql);

?>

<article style="width:60%;margin:0 auto;border:solid;padding:10px;text-align: center;">
<?php 
	while ($row = $result->fetch_row()){
?>
			<img src="<?php echo $row [0]; ?>" /><br />
			<p><?php echo $row [1]; ?></p>
			<p><?php echo $row [2]; ?></p>
			<?php echo $row [3]; ?><br />
<?php 
	}
?>
</article>
</body>
</html>
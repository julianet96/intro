
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>sense títol</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
</head>

<body>
	<?php
	$usuari= $_POST['usuari'];
	$nom= $_POST['nom'];
	$llinatge1= $_POST['llinatge1'];
	$llinatge2= $_POST['llinatge2'];
	$paswd= $_POST['paswd'];
	?>
	<h1>Benbingut</h1>
	<p>Grasis per registrarta <?php echo $nom; ?>, <?php echo $llinatge1; ?>, <?php echo $llinatge2; ?></p>
	<p>La contrasenya introduida es <?php echo $paswd; ?> </p>
	
	<?php
		$dbc = mysqli_connect('172.16.1.190', 'jcolomr', 'parcou11', 'tbj_db')
		or die('Error connecting to MySQL server.');
		$query = "INSERT INTO usuaris ( nombre, apellido, sec_apellido, usuari, pasword) " .
		"VALUES ('$nom', '$llinatge1', '$llinatge2', '$usuari', '$paswd')";
		$result = mysqli_query($dbc, $query)
		or die('Error querying database.');
		mysqli_close($dbc);
	?>
	<a href="login.html">Inicia la sacio</a></br>
</body>

</html>

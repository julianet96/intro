<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>borrar</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
</head>

<body>
	<?php
		$email = $_POST['mail'];
	?>
	
	
	<h1>el teu correu el cual vols eliminar de la nostra lliste es; <?php echo $email; ?></h1>
	
	
	
	<?php
		$dbc = mysqli_connect('172.16.1.190', 'jcolomr', '123456', 'elvis_store')
		or die('Error connecting to MySQL server.');
		$query = "DELETE FROM email_list WHERE email='$email'";
		$result = mysqli_query($dbc, $query)
		or die('Error querying database.');
		mysqli_close($dbc);
	?>
</body>

</html>

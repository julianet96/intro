
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
</head>

<body>
    
    <?php
    $when_it_happened = $_POST['whenithappened'];
    $how_long = $_POST['howlong'];
    $alien_description = $_POST['aliendescription'];
    $fang_spotted = $_POST['fangspotted'];
    $email = $_POST['email'];
    $primer_nom=$_POST['firstname'];
    $segon_nom=$_POST['lastname'];
    $name=$_POST['firstname'].' '.$_POST['lastname'];
    $numero_aliens=$_POST['howmany'];
    $que_feren=$_POST['whattheydid'];
    $altre=$_POST['other'];
    
    $msg = $name .' was abducted '. $when_it_happened .' and was gone for '. 
    $how_long .' . '.' number of aliens '. $numero_aliens .' alien despcription '. 
    $alien_description .' what they did '. $que_feren .' fang spotted: '. 
    $fang_spotted .'other comments '. $altre ;
    ?>
    <h1>msg:<?php echo $msg;?></h1>
   <h1>'Thanks for submitting the form.'</h1>
   <p> You were abducted <?php echo $when_it_happened;?> and were gone for <?php echo $how_long;?> </p>
    <p>Describe them: <?php echo $alien_description;?></p>
    <p>Was Fang there? <?php echo $fang_spotted;?></p>
    <p>Your email address is  <?php echo $email; ?></p>
	<p>Tu nombre es <?php echo $primer_nom; ?> y tu apellido <?php echo $segon_nom; ?> </p>
	<p>Los aliens que havia eran <?php echo $numero_aliens; ?></p>
	<p>El que varen fer amb jo:  <?php echo $que_feren; ?></p>
	<p>Altres coses:  <?php echo $altre; ?></p>
	
	
	<?php
		$dbc = mysqli_connect('172.16.1.190', 'jcolomr', 'parcou11', 'aliendatabase')
		or die('Error connecting to MySQL server.');
		$query = "INSERT INTO aliens_abduction (first_name, last_name, when_it_happened, how_long, " .
		"how_many, alien_description, what_they_did, fang_spotted, other, email) " .
		"VALUES ('$primer_nom', '$segon_nom', '$when_it_happened', '$how_long', '$numero_aliens', '$alien_description', " .
		"'$que_feren', '$fang_spotted', '$altre', " .
		"'$email')";
		$result = mysqli_query($dbc, $query)
		or die('Error querying database.');
		mysqli_close($dbc);
	?>
	
</body>

</html>

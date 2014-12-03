<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Send Mail</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" /> 
	<meta name="generator" content="Geany 1.22" />
</head>

<body>
	<?php
		$subject = $_POST['subject'];
		$msg = $_POST['elvismail'];
		
		if (!empty($subject) && !empty($msg)){
		
		echo "SUBJECT: $subject MSG: $msg<br/>";
		$dbc = mysqli_connect('172.16.1.190', 'jcolomr', '123', 'elvis_store')
		or die ('Error connecting to MySQL server.');
		$query = "SELECT first_name,last_name,email from email_list ORDER BY last_name,first_name";
		$result = mysqli_query($dbc, $query);
		?>
		<table border="1" cellpadding="0" cellspacing="0">
			<tr>
				<th>First name</th>
				<th>Last name</th>
				<th>mail</th>
				<th>subject</th>
				<th>Missatge</th>
			</tr>
		<?php
		while($row = mysql_fetch_array($result)){
			$i++;
		?>
			<tr>
				<td><?= $row['first_name']?></td>
				<td><?= $row['last_name']?></td>
				<td><?= $row['email']?></td>
				<td><?= $subject?></td>
				<td><?= $msg?></td>
			</tr>
		<?php
	    }
		?>
		</table>
		<?php
		mysqli_close($dbc);
		
	}else{
		echo"no as escrit res"
		?>
		<a href=sendmail.html>torna arrera</a>
</body>

</html>

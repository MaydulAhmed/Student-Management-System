<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title> </title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="style.css">	
		</head>
		
		
	<body>	
		
		
		<header>
				
				<h1> Azubi Management </h1>
		</header>
		
		<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="user_registration.php">Registieren</a></li>
					<li><a href="view.php">Editieren</a></li>
					<li><a href="#">Entschuldigung</a></li>
				</ul>
		</nav>
		
	<section>
	
	
	<center>
		<font color='red' size='6'>
			<?php // To show in the view page that the data has been deleted.
			echo @$_GET ['deleted']; ?>
			<?php // To show in the view page that the data has been updated.
			echo @$_GET ['undated']; ?>
		</font>
	</center>
	
	<table align='center' width= '1050' border='1' style="color:#408f9a;" cellspacing="3">
			<tr>
				<td colspan='20' align='center' bgcolor='#babd5a' style="padding: 2px;"><h1 style="font-size:20px;">Zeigt aller Informationen des Azubis an</h1></td>
			</tr>
	</table>
	
		<br/>
		
	<table align='center' width= '1050' border='2' >
		<tr>
			<th bgcolor=' #e20074' colspan='11' style="color: #dadada; padding: 5px;">Azubi</th>
		</tr>
		<tr align='center' bgcolor=' #feeec6'>
			<th>Serial Nr.</th>
			<th>Vorname</th>
			<th>Nachname</th>
			<th>Strasse</th>
			<th>Haus-Nr</th>
			<th>PLZ</th>
			<th>Ort</th>
			<th>Email</th>
			<th>Beruf</th>
			<th>Löschen</th>
			<th>Editieren</th>
		</tr>
		
		<tr align='center'>
		
		<?php
		//connect database
		$conn = mysql_connect("127.0.0.1","root","");
		//select data from database
		$db = mysql_select_db('azubi',$conn);
		
		$que="SELECT A_ID,Vorname,Nachname,Straße,Hausnummer,PLZ,Ort,Email,Beruf FROM azubi,beruf
			  ORDER BY A_ID
			  WHERE azubi.B_ID=beruf.B_ID";
		$run=mysql_query($que);
		
		while ($row=mysql_fetch_array($run))
		{
			$a_id=$row['A_ID'];
			$a_vorname=$row['Vorname'];
			$a_nachname=$row['Nachname'];
			$a_straße=$row['Straße'];
			$a_hausnummer=$row['Hausnummer'];
			$a_postleitzahl=$row['PLZ'];
			$a_ort=$row['Ort'];
			$a_email=$row['Email'];
			$a_beruf=$row['Beruf'];
		
		?>
			
			<td><?php echo $a_id ?></td>
			<td><?php echo $a_vorname ?></td>
			<td><?php echo $a_nachname ?></td>
			<td><?php echo $a_straße ?></td>
			<td><?php echo $a_hausnummer ?></td>
			<td><?php echo $a_postleitzahl ?></td>
			<td><?php echo $a_ort ?></td>
			<td><?php echo $a_email ?></td>
			<td><?php echo $a_beruf ?></td>
			<td><a href='delete.php?del=<?php echo $a_id; ?>'>Löschen</a></td>
			<td><a href='edit.php?edit=<?php echo $a_id; ?>'>Editieren</td>
		</tr>
		<?php } ?>
	</table>
	
	<br/>
		
	<table align='center' width= '1050' border='2' >
		<tr>
			<th bgcolor=' #e20074' colspan='11' style="color: #dadada; padding: 5px;">Schule</th>
		</tr>
		<tr align='center' bgcolor=' #feeec6'>
			<th>Serial Nr.</th>
			<th>Schulname</th>
			<th>Strasse</th>
			<th>Haus-Nr</th>
			<th>PLZ</th>
			<th>Ort</th>
			<th>Email</th>
			<th>K-Lehrer</th>
			<th>Klasse</th>
			<th>Löschen</th>
			<th>Editieren</th>
		</tr>
		
		<tr align='center'>
		
		<?php
		//connect database
		$conn = mysql_connect("127.0.0.1","root","");
		//select data from database
		$db = mysql_select_db('azubi',$conn);
		
		$que="SELECT azubi.A_ID,Schulname,Straße,Hausnummer,PLZ,Ort,Email,Klasse,Klassenlehrer FROM azubi,schule,klasse
			  ORDER BY azubi.A_ID
			  WHERE schule.S_ID=Klasse.S_ID";
		$run=mysql_query($que);
		
		while ($row=mysql_fetch_array($run))
		{
			$a_id=$row['A_ID'];
			$s_schulname=$row['Schulname'];
			$s_straße=$row['Straße'];
			$s_hausnummer=$row['Hausnummer'];
			$s_postleitzahl=$row['PLZ'];
			$s_ort=$row['Ort'];
			$s_email=$row['Email'];
			$s_klasse=$row['Klasse'];
			$s_klassenlehrer=$row['Klassenlehrer'];
		
		?>
		
			<td><?php echo $a_id ?></td>
			<td><?php echo $s_schulname ?></td>
			<td><?php echo $s_straße ?></td>
			<td><?php echo $s_hausnummer ?></td>
			<td><?php echo $s_postleitzahl ?></td>
			<td><?php echo $s_ort ?></td>
			<td><?php echo $s_email ?></td>
			<td><?php echo $s_klasse ?></td>
			<td><?php echo $s_klassenlehrer ?></td>
			<td><a href='delete.php?del=<?php echo $a_id; ?>'>Löschen</a></td>
			<td><a href='edit.php?edit=<?php echo $a_id; ?>'>Editieren</td>
		</tr>
		<?php } ?>
	</table>
	
	</section>


</body>

</html>
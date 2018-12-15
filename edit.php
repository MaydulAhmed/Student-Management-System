<?php
	//connect database
		$conn = mysql_connect("127.0.0.1","root","");
	//select data from database
		$db = mysql_select_db('azubi',$conn);
		
		$edit_record=$_GET['edit'];
		$query="SELECT* FROM azubi,schule,klasse,beruf
				WHERE a_id='$edit_record'";
		$run=mysql_query($query);
		
		while ($row=mysql_fetch_array($run))
		{
			$edit_id=$row ['A_ID'];
			$a_vorname=$row['Vorname'];
			$a_nachname=$row['Nachname'];
			$a_straße=$row['Straße'];
			$a_hausnummer=$row['Hausnummer'];
			$a_postleitzahl=$row['PLZ'];
			$a_ort=$row['Ort'];
			$a_email=$row['Email'];
			$a_beruf=$row['Beruf'];
			$s_schulname=$row['Schulname'];
			$s_straße=$row['Straße'];
			$s_hausnummer=$row['Hausnummer'];
			$s_postleitzahl=$row['PLZ'];
			$s_ort=$row['Ort'];
			$s_email=$row['Email'];
			$s_klasse=$row['Klasse'];
			$s_klassenlehrer=$row['Klassenlehrer'];
		}
		
?>




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
				
		
		<table align='center' width= '700' border='1' style="color:#408f9a;" cellspacing="3">
			<tr>
				<td colspan='20' align='center' bgcolor='#babd5a' style="padding: 2px;"><h1 style="font-size:20px;">Anmeldeformular aktualisieren</h1></td>
			</tr>
		</table>
		
			<br/>
		
		<form method='POST' action='edit.php?edit_form=<?php echo $edit_id; ?>'>
			<table width='700' border='2' align='center' bgcolor='#feeec6' cellspacing="5">
				<tr>
					<th bgcolor=' #e20074' colspan='2' style="color: #dadada; padding: 5px;">Azubi</th>
				</tr>
				<tr>
					<td align='right'>Vorname:</td>
					<td><input type='text' name='vorname1' value='<?php echo $a_vorname; ?>'></td>
				</tr>
				<tr>
					<td align='right'>Nachname:</td>
					<td><input type='text' name='nachname1' value='<?php echo $a_nachname; ?>'></td>
				</tr>
				<tr>
					<td align='right'>Straße:</td>
					<td><input type='text' name='straße1' value='<?php echo $a_straße; ?>'></td>
				</tr>
				<tr>
					<td align='right'>Hausnummer:</td>
					<td><input type='text' name='hausnummer1' value='<?php echo $a_hausnummer; ?>'></td>
				</tr>
				<tr>
					<td align='right'>Postleitzahl:</td>
					<td><input type='text' name='postleitzahl1'value='<?php echo $a_postleitzahl; ?>'></td>
				</tr>
				<tr>
					<td align='right'>Ort:</td>
					<td><input type='text' name='ort1' value='<?php echo $a_ort; ?>'></td>
				</tr>
				</tr>
				<tr>
					<td align='right'>Email:</td>
					<td><input type='text' name='email1' value='<?php echo $a_email; ?>'></td>
				</tr>
				<tr>
					<td align='right'>Beruf:</td>
					<td>
						<select name='beruf1'>
							<option value=value='<?php echo $a_beruf; ?>'><?php echo $a_beruf; ?></option>
							<option value='FIAE'>FIAE</option>
							<option value='FISI'>FISI</option>
						</select>
					</td>
				</tr>
				
			</table>
		</form>
		
		<br/>
		
		<form method='POST' action='edit.php?edit_form=<?php echo $edit_id; ?>'>
			<table width='700' border='2' align='center'  bgcolor='#feeec6' cellspacing="5">
				<tr>
					<th bgcolor=' #e20074' colspan='2' style="color: #dadada; padding: 5px;">Schule</th>
				</tr>
				<tr >
					<td align='right' >Schulname:</td>
					<td ><input type='text' name='schulname1' value='<?php echo $s_schulname; ?>'></td>
				</tr>
				<tr>
					<td align='right'>Straße:</td>
					<td><input type='text' name='straße1' value='<?php echo $s_straße; ?>'></td>
				</tr>
				<tr>
					<td align='right'>Hausnummer:</td>
					<td><input type='text' name='hausnummer1' value='<?php echo $s_hausnummer; ?>'></td>
				</tr>
				<tr>
					<td align='right'>Postleitzahl:</td>
					<td><input type='text' name='postleitzahl1' value='<?php echo $s_postleitzahl; ?>'></td>
				</tr>
				<tr>
					<td align='right'>Ort:</td>
					<td><input type='text' name='ort1' value='<?php echo $s_ort; ?>'></td>
				</tr>
				<tr>
					<td align='right'>Email:</td>
					<td><input type='text' name='email1' value='<?php echo $s_email; ?>'></td>
				</tr>
				<tr>
					<td align='right'>Klassenlehrer:</td>
					<td><input type='text' name='klassenlehrer1' value='<?php echo $s_klassenlehrer; ?>'></td>
				</tr>
				<tr>
					<td align='right'>Klasse:</td>
					<td>
						<select name='klasse1'>
							<option value=value='<?php echo $s_klasse; ?>'><?php echo $s_klasse; ?></option>
							<option value='ITO7'>ITO7</option>
							<option value='ITM6'>ITM6</option>
						</select>
					</td>
				</tr>
				
		</table>
		</form>
		<br/>
		
		<form>
		<table align='center'>
			<tr>
			<td bgcolor=' #e20074'>
				<input type='submit' name='update' value='Update'>
			</td>
			</tr>
		</table>
		</form>
		
		
		</section>
		
	</body>
	
</html>

<?php
	
	if (isset($_POST['update']))
	
	{
			$edit_record1=$_GET ['edit_form'];
			$azubi_vorname=$_POST['vorname1'];
			$azubi_nachname=$_POST['nachname1'];
			$azubi_straße=$_POST['straße1'];
			$azubi_hausnummer=$_POST['hausnummer1'];
			$azubi_postleitzahl=$_POST['postleitzahl1'];
			$azubi_ort=$_POST['ort1'];
			$azubi_email=$_POST['email1'];
			$azubi_beruf=$_POST['beruf1'];
			$schule_schulname=$_POST['schulname1'];
			$schule_straße=$_POST['straße1'];
			$schule_hausnummer=$_POST['hausnummer1'];
			$schule_postleitzahl=$_POST['postleitzahl1'];
			$schule_ort=$_POST['ort1'];
			$schule_email=$_POST['email1'];
			$schule_klasse=$_POST['klasse1'];
			$schule_klassenlehrer=$_POST['klassenlehrer1'];
			
		$query1="UPDATE azubi,schule,klasse,beruf SET azubi.Vorname='$azubi_vorname', azubi.Nachname='$azubi_nachname',
		azubi.Straße='$azubi_straße', azubi.Hausnummer='$azubi_hausnummer', azubi.PLZ='$azubi_postleitzahl', azubi.Ort='$azubi_ort',
		azubi.Email='$azubi_email', schule.Schulname='$schule_schulname', schule.Straße='$schule_straße', schule.Hausnummer='$schule_hausnummer', 
		schule.Plz='$schule_postleitzahl', schule.Ort='$schule_ort', schule.Email='$schule_email', klasse.Klasse='$schule_klasse', klasse.Klassenlehrer='$schule_klassenlehrer',
		beruf.Beruf='$azubi_beruf' WHERE A_ID='$edit_record1'";
		
		if (mysql_query($query1)){
		echo "<script>window.open('view.php?updated=Die Daten wurden aktualisiert! ','_self)</script>";
	}

		}
		

?>

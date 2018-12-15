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
				<td colspan='20' align='center' bgcolor='#babd5a' style="padding: 2px;"><h1 style="font-size:20px;">Anmeldeformular für Azubi</h1></td>
			</tr>
		</table>
		
			<br/>
		
		<form method='POST' action='user_registration.php'>
			<table width='700' border='2' align='center' bgcolor='#feeec6' cellspacing="5">
				<tr>
					<th bgcolor=' #e20074' colspan='2' style="color: #dadada; padding: 5px;">Azubi</th>
				</tr>
				<tr>
					<td align='right'>Vorname:</td>
					<td><input type='text' name='vorname'>
					<font color='red'><?php echo @$_GET['vorname'];?></font>
					</td>
				
				</tr>
				<tr>
					<td align='right'>Nachname:</td>
					<td><input type='text' name='nachname'>
					<font color='red'><?php echo @$_GET['nachname'];?></font>
					</td>
				
				</tr>
				<tr>
					<td align='right'>Straße:</td>
					<td><input type='text' name='straße'>
					<font color='red'><?php echo @$_GET['straße'];?></font>
					</td>
				
				</tr>
				<tr>
					<td align='right'>Hausnummer:</td>
					<td><input type='text' name='hausnummer'>
					<font color='red'><?php echo @$_GET['hausnummer'];?></font>
					</td>
				
				</tr>
				<tr>
					<td align='right'>Postleitzahl:</td>
					<td><input type='text' name='postleitzahl'>
					<font color='red'><?php echo @$_GET['postleitzahl'];?></font>
					</td>
				
				</tr>
				<tr>
					<td align='right'>Ort:</td>
					<td><input type='text' name='ort'>
					<font color='red'><?php echo @$_GET['ort'];?></font>
					</td>
				
				</tr>
				</tr>
				<tr>
					<td align='right'>Email:</td>
					<td><input type='text' name='email'>
					<font color='red'><?php echo @$_GET['email'];?></font>
					</td>
				
				</tr>
				<tr>
					<td align='right'>Beruf:</td>
					<td>
						<select name='beruf'>
							<option value='null'>Beruf auswählen</option>
							<option value='FIAE'>FIAE</option>
							<option value='FISI'>FISI</option>
						</select>
						<font color='red'><?php echo @$_GET['beruf'];?></font>
					</td>
				</tr>
				
			</table>
		</form>
		
		<br/>
		
		<form method='POST' action='user_registration.php'>
			<table width='700' border='2' align='center'  bgcolor='#feeec6' cellspacing="5">
				<tr>
					<th bgcolor=' #e20074' colspan='2' style="color: #dadada; padding: 5px;">Schule</th>
				</tr>
				<tr >
					<td align='right' >Schulname:</td>
					<td ><input type='text' name='schulname'>
					<font color='red'><?php echo @$_GET['schulname'];?></font>
					</td>
				
				</tr>
				<tr>
					<td align='right'>Straße:</td>
					<td><input type='text' name='straße'>
					<font color='red'><?php echo @$_GET['straße'];?></font>
					</td>
				
				</tr>
				<tr>
					<td align='right'>Hausnummer:</td>
					<td><input type='text' name='hausnummer'>
					<font color='red'><?php echo @$_GET['hausnummer'];?></font>
					</td>
				
				</tr>
				<tr>
					<td align='right'>Postleitzahl:</td>
					<td><input type='text' name='postleitzahl'>
					<font color='red'><?php echo @$_GET['postleitzahl'];?></font>
					</td>
				
				</tr>
				<tr>
					<td align='right'>Ort:</td>
					<td><input type='text' name='ort'>
					<font color='red'><?php echo @$_GET['ort'];?></font>
					</td>
				
				</tr>
				<tr>
					<td align='right'>Email:</td>
					<td><input type='text' name='email'>
					<font color='red'><?php echo @$_GET['email'];?></font>
					</td>
				
				</tr>
				<tr>
					<td align='right'>Klassenlehrer:</td>
					<td><input type='text' name='klassenlehrer'>
					<font color='red'><?php echo @$_GET['klassenlehrer'];?></font>
					</td>
				
				</tr>
				<tr>
					<td align='right'>Klasse:</td>
					<td>
						<select name='klasse'>
							<option value='null'>Klasse auswählen</option>
							<option value='ITO7'>ITO7</option>
							<option value='ITM6'>ITM6</option>
						</select>
						<font color='red'><?php echo @$_GET['klasse'];?></font>
					</td>
				</tr>
				
		</table>
		</form>
		<br/>
		
		<form>
		<table align='center'>
			<tr>
			<td bgcolor=' #e20074'>
				<input type='submit' name='submit' value='Submit'>
			</td>
			</tr>
		</table>
		</form>
		
		
		</section>
		
	</body>
	
</html>

<?php

//connect database
$conn = mysql_connect("127.0.0.1","root","");
//select data from database
$db = mysql_select_db('azubi',$conn);
	
	if (isset($_POST['submit']))
	{
		
		//store the data in variable
		 $a_vorname = $_POST ['vorname'];
		 $a_nachname = $_POST ['nachname'];
		 $a_straße = $_POST ['straße'];
		 $a_hausnummer = $_POST ['hausnummer'];
		 $a_postleitzahl = $_POST ['postleitzahl'];
		 $a_ort = $_POST ['ort'];
		 $a_email = $_POST ['email'];
		 $a_beruf = $_POST ['beruf'];
		 $s_schulname = $_POST ['schulname'];
		 $s_straße = $_POST ['straße'];
		 $s_hausnummer = $_POST ['hausnummer'];
		 $s_postleitzahl = $_POST ['postleitzahl'];
		 $s_ort = $_POST ['ort'];
		 $a_email = $_POST ['email'];
		 $s_klassenlehrer = $_POST ['klassenlehrer'];
		 $s_klasse = $_POST ['klasse'];
		
		 
	if($a_vorname==''){
		//to open the page in same page and get the data through GET 
		echo "<script>window.open('user_registration.php?vorname=Vorname ist erforderlich','_self')</script>";
		exit();
	}

	if($a_nachname==''){
		//to open the page in same page and get the data through GET 
		echo "<script>window.open('user_registration.php?nachname=Nachname ist erforderlich','_self')</script>";
		exit();
	}
	
	if($a_straße==''){
		//to open the page in same page and get the data through GET 
		echo "<script>window.open('user_registration.php?straße=Straße ist erforderlich','_self')</script>";
		exit();
	}
	
	if($a_hausnummer==''){
		//to open the page in same page and get the data through GET 
		echo "<script>window.open('user_registration.php?hausnummer=Geben Sie die Hausnummer ein','_self')</script>";
		exit();
	}
	
	if($a_postleitzahl=='null'){
		//to open the page in same page and get the data through GET 
		echo "<script>window.open('user_registration.php?postleitzahl=Geben Sie die Postleitzahl ein','_self')</script>";
		exit();
	}
	
	if($a_ort==''){
		//to open the page in same page and get the data through GET 
		echo "<script>window.open('user_registration.php?ort=Ort ist erforderlich','_self')</script>";
		exit();
	}

	if($a_email==''){
		//to open the page in same page and get the data through GET 
		echo "<script>window.open('user_registration.php?email=Email ist erforderlich','_self')</script>";
		exit();
	}
	
	if($a_beruf=='null'){
		//to open the page in same page and get the data through GET 
		echo "<script>window.open('user_registration.php?beruf=Wählen Sie einen Beruf aus','_self')</script>";
		exit();
	}
	
	if($s_schulname==''){
		//to open the page in same page and get the data through GET 
		echo "<script>window.open('user_registration.php?schulname=Schulname ist erforderlich','_self')</script>";
		exit();
	}
	
	if($s_straße==''){
		//to open the page in same page and get the data through GET 
		echo "<script>window.open('user_registration.php?straße=Straße ist erforderlich','_self')</script>";
		exit();
	}
	
	if($s_hausnummer==''){
		//to open the page in same page and get the data through GET 
		echo "<script>window.open('user_registration.php?hausnummer=Geben Sie die Hausnummer ein','_self')</script>";
		exit();
	}
	
	if($s_postleitzahl=='null'){
		//to open the page in same page and get the data through GET 
		echo "<script>window.open('user_registration.php?postleitzahl=Geben Sie die Postleitzahl ein','_self')</script>";
		exit();
	}
	
	if($s_ort==''){
		//to open the page in same page and get the data through GET 
		echo "<script>window.open('user_registration.php?ort=Ort ist erforderlich','_self')</script>";
		exit();
	}

	if($s_email==''){
		//to open the page in same page and get the data through GET 
		echo "<script>window.open('user_registration.php?email=Email ist erforderlich','_self')</script>";
		exit();
	}
	
	if($s_klassenlehrer==''){
		//to open the page in same page and get the data through GET 
		echo "<script>window.open('user_registration.php?klassenlehrer=Klassenlehrer ist erforderlich','_self')</script>";
		exit();
	}
	
	if($s_klasse=='null'){
		//to open the page in same page and get the data through GET 
		echo "<script>window.open('user_registration.php?klasse=Wählen Sie die Klasse aus','_self')</script>";
		exit();
	}

$que= "BEGIN;
INSERT INTO azubi (Vorname,Nachname,Straße,Hausnummer,Postleitzahl,Ort,Email)
  VALUES('$a_vorname','$a_nachname','$a_straße','$a_hausnummer','$a_postleitzahl','$a_ort','$a_email');
INSERT INTO beruf (Beruf) 
  VALUES('$a_beruf');
INSERT INTO klasse (Klasse,Klassenlehrer) 
  VALUES('$s_klasse','$s_klasselehrer');
INSERT INTO schule (Schulname,Straße,Hausnummer,Postleitzahl,Ort,Email) 
  VALUES('$s_schulname','$s_straße','$s_hausnummer','$s_postleitzahl','$s_ort','$s_email');
COMMIT";
	

	// Show which data that has been inserted into database
	if(mysql_query($que)){
		echo "<center><b>Die folgenden Daten wurden in die Datenbank eingefügt:</b></center>";
		echo "<table align='center' border='2'>
		<tr>
			<td>$a_vorname</td>
			<td>$a_nachname</td>
			<td>$a_straße</td>
			<td>$a_hausnummer</td>
			<td>$a_postleitzahl</td>
			<td>$a_ort</td>
			<td>$a_email</td>
			<td>$a_beruf</td>
		</tr>
		<tr>
			<td>$s_schulname</td>
			<td>$s_straße</td>
			<td>$s_hausnummer</td>
			<td>$s_postleitzahl</td>
			<td>$s_ort</td>
			<td>$a_email</td>
			<td>$s_klassenlehrer</td>
			<td>$s_klasse</td>
		</tr>
		</table>";
	}
}

?>


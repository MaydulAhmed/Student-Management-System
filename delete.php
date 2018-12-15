<?php
	//connect database
		$conn = mysql_connect("127.0.0.1","root","");
	//select data from database
		$db = mysql_select_db('azubi',$conn);
		
		$delete_record=$_GET['del'];
		$query="DELETE* FROM azubi,schule,klasse,beruf
				WHERE a_id='$delete_record'";
				
	if (mysql_query($query)){
		echo "<script>window.open('view.php?deleted=Die Daten wurde erfolgreich gelöscht! ','_self)</script>";
	}

?>
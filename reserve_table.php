<?php
  include 'conn.php';

   $errors = array();
// contact user
if (isset($_POST['Submit'])) {
  // receive all input values from the form
  $Name = $_POST['Name'];
  $Email = $_POST['Email'];
  $Phone = $_POST['Phone'];
  $Date = $_POST['Date'];
  $Time = $_POST['Time'];
  $Person = $_POST['Person'];

	$query3 = "INSERT INTO reservation(Name, Email, Phone, Date, Time, Person) 
	                VALUES ('".$Name."','".$Email."','".$Phone."','".$Date."','".$Time."','".$Person."')";

	if (mysqli_query($conn,$query3)) {
		echo "
			<script type='text/javascript'>
			alert('success');
			document.location.href='index.php'
			</script>
		";
		
	}
	else{
		echo mysqli_error($conn);
	}
}
?>
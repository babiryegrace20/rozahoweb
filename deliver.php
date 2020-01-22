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
  $Location = $_POST['Location'];
  $Service = $_POST['Service'];

	$query4 = "INSERT INTO delivery(Name, Email, Phone, Date, Time, Location, Service) 
	                VALUES ('".$Name."','".$Email."','".$Phone."','".$Date."','".$Time."','".$Location."','".$Service."')";

	if (mysqli_query($conn,$query4)) {
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
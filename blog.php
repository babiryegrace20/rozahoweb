<?php
  include 'conn.php';

   $errors = array();
// contact user
if (isset($_POST['Submit'])) {
  // receive all input values from the form
  $Name = $_POST['Name'];
  $Email = $_POST['Email'];
  $Subject = $_POST['Subject'];
  $Message = $_POST['Message'];

	$query1 = "INSERT INTO contact(Name, Email, Subject, Message) 
	                VALUES ('".$Name."','".$Email."','".$Subject."','".$Message."')";

	if (mysqli_query($conn,$query1)) {
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
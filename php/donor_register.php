<?php
   $con=mysqli_connect("localhost","svvvnkaj","@abhay8SVVVCP@","svvvnkaj_blood_donation_app");
   $bGroup = $_GET['bGroup'];
   $name = $_GET['name'];
   $contact = $_GET['contact'];
   $email = $_GET['email'];
   $city = $_GET['city'];
   $frequentDonor = $_GET['frequentdonor'];
   $available = $_GET['isavailable'];
	if($available == 'Select one'){
		$available = 'N/A';	
	}
		if($frequentDonor == 'Select one'){
		$frequentDonor = 'N/A';	
	}
	$query = mysqli_query($con, "SELECT * FROM donors WHERE (blood_group='$bGroup' and name='$name' and contact_number='$contact' and email='$email' and city='$city');");
	$num_result_rows = mysqli_num_rows($query);
	if($num_result_rows > 0){
		echo "<h1>Entry already present. Now you can close this window.</h1><br>";
	}else{
		$query = mysqli_query($con, "INSERT INTO donors (blood_group, name, contact_number, email, city, isavailable, frequentdonor) VALUES ('$bGroup', '$name', '$contact', '$email', '$city', '$frequentDonor', '$available')");
		
	}
   mysqli_close($con);
?>

<?php
	$conn = mysqli_connect("localhost", "svvvnkaj", "@abhay8SVVVCP@", "svvvnkaj_blood_donation_app");
	$bGroup = $_GET['bGroup'];
	$city = $_GET['city'];
if(isset($_GET['city']) && $city != ''){

			echo $city;
		$stat = "SELECT name, contact_number, email, city, isavailable, frequentdonor FROM donors where blood_group='$bGroup' and city='$city'";
}else{
		$stat = "SELECT name, contact_number, email, city, isavailable, frequentdonor FROM donors where blood_group = '$bGroup'";

}
	$query = mysqli_query($conn, $stat);
	$rows = array();
//	while ($r = mysqli_fetch_assoc($query)) {
//		$rows[] = $r;
//	}
if (mysqli_num_rows($query) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($query)) {
        echo "id: " . $row["name"]. " - Name: " . $row["email"]. " " . $row["city"]. "<br>";
    }
} else {
    echo "0 results";
}
	print_r($rows);
?>

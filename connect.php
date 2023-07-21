<?php
	$Name = $_POST['Name'];
	$Adhar_No = $_POST['Adhar No'];
	$Phone = $_POST['Phone'];
	$Email = $_POST['Email'];
	$Product_Details = $_POST['Product Details'];
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"freshd");
	mysqli_query($con, "INSERT INTO registration VALUES($Name, $Adhar_No, $Phone, $Email, $Product_Details)" );



	// Database connection
	// $conn = new mysqli('localhost','root','','freshd');
	// if($conn->connect_error){
	// 	echo "$conn->connect_error";
	// 	die("Connection Failed : ". $conn->connect_error);
	// } else {
	// 	$stmt = $conn->prepare("insert into registration(Name, Adhar_No, Phone, Email,  Producr_details) values(?, ?, ?, ?, ?, ?)");
	// 	$stmt->bind_param("siiss", $Name, $Adhar_No, $Phone, $Email, $Product_Details);
	// 	$execval = $stmt->execute();
	// 	echo $execval;
	// 	echo "Registration successfully...";
	// 	$stmt->close();
	// 	$conn->close();
	// }
?>
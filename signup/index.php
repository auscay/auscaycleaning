<?php
include("config.php");

if(isset($_POST['name'])){

$name= filter_var($_POST["name"], FILTER_SANITIZE_STRING);
$email= filter_var($_POST["email"], FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_EMAIL);
$phone= filter_var($_POST["phone"], FILTER_VALIDATE_INT);
$address= filter_var($_POST["address"], FILTER_SANITIZE_STRING, FILTER_VALIDATE_INT);
if($name === false || $email=== false || $phone=== false || $address=== false){
	
	echo "Error in details. Please try again";
	header("Location: /auscaycleaning/signup/index.php");
	exit;
} else {
	$name= htmlspecialchars($name);
	$email= htmlspecialchars($email);
	$phone= htmlspecialchars($phone);
	$address= htmlspecialchars($address);
	
}


$stmt= $conn->prepare("INSERT INTO users(name, email, phone, address)VALUES(?,?,?,?)");
$stmt->bind_param("ssis", $name, $email, $phone, $address);
$stmt->execute();

$stmt->close();
/*$sql="insert into users(name, phone, email, address)
values('$name', '$phone', '$email', '$address')";
$result= mysqli_query($conn, $stmt) or die("Details not saved!");
echo "<p style='color:green;text-align:center;'>Details saved successfully!</p>"; */


$_SESSION['name'] = $name;




if($stmt) {
header("Location: /auscaycleaning/dashboard/index.php");
exit;
} else{
echo "<p style='color:red; text-align:center;'>Please try again</p>";
}


}













?>









<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-grey">
		<div class="container">
			<a class="navbar-brand" href="#"><span class="text-primary">Auscay</span>Cleaning</a> 
			
		</div>
	  </nav>
    <div class="form-area">
        <div class="container">
            <div class="row single-form g-0">
                <div class="col-sm-12 col-lg-6">
                    <div class="left">
                        <h2><span>We need these details</span> <br>To process your orders</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="right">
                       <i class="fa fa-caret-left"></i>
                        <form method="post" action="">
                          <div class="mb-3">
                            <label for="validationCustom01" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="validationCustom01" aria-describedby="emailHelp" required>
                          </div>
                          <div class="valid-feedback">

                          </div>
                          <div class="mb-3">
                            <label for="validationCustom01" class="form-label">Email Address</label>
                            <input type="text" name="email" class="form-control" id="validationCustom01" aria-describedby="emailHelp" required>
                          </div>
                          <div class="mb-3">
                            <label for="validationCustom01" class="form-label">Phone Number</label>
                            <input type="number" name="phone" class="form-control" id="validationCustom01" aria-describedby="emailHelp" required>
                          </div>
                          <div class="mb-3">
                            <label for="validationCustom01" class="form-label">Preferred Delivery Address</label>
                            <input type="text" name="address" class="form-control" id="validationCustom01" aria-describedby="emailHelp" required>
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
include("config.php");

if(!isset($_SESSION['name'])){
	header("Location: /auscaycleaning/signup/index.php");
}
$name= $_SESSION['name'];

if(isset($_POST['submit'])){
	$name= $_POST['Name'];
	$email= $_POST['Email'];
	$message= $_POST['Message'];
	$successMsg= "Message Sent Successfully!";
	
	$_SESSION['successMsg']= $successMsg;
	


	
	
};
if(isset($_SESSION['successMsg'])){
	echo "<div class='success-message'>";
	echo $_SESSION['successMsg'];
	echo "</div>";
	
	unset($_SESSION['successMsg']);
};


	








?>














<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<meta charset="UTF-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../dashboard/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="../dashboard/logo.png" style="width:45%; filter: grayscale(100%); -webkit-filter: grayscale(100%);" class="w3-round"><br><br>
    <h4><b>ORDERS</b></h4>
  </div>
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Place Orders</a> 
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw w3-margin-right"></i>Orders History</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>Contact Us</a>
  </div>
  
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="../dashboard/logo.png" style="width:65px; filter: grayscale(100%); -webkit-filter: grayscale(100%);" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Welcome, <?php echo $name;?> </b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">Filter:</span> 
      <button class="w3-button w3-black">ALL</button>
      <button class="w3-button w3-white"><i class="fa fa-shopping-basket w3-margin-right"></i>Laundry</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-tint w3-margin-right"></i>Cleaning</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-fire-extinguisher w3-margin-right"></i>Fumigation</button>

    </div>
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="../dashboard/laundry dash.jpg" alt="Laundry" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Laundry</b></p>
        <p>Give your clothes professional laundry treatment with our timely laundry services. Take advantage of our free pickup and delivery anywhere around your city. Click the button below to place your order in less than a minute.</p>
        <div style="text-align: center;">
            <a href="../dashboard/laundry-order/index.html"><button class="btn default">Place Order</button></a>
        </div>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="../dashboard/cleaning_dash.jpg" alt="Cleaning" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Cleaning</b></p>
        <p>Cleaning gets better when done in a professional manner. Our professional cleaners utilizes healthy antiseptics to give your houses, offices and environs a clean look. Click the button below to order professional cleaners around you.</p>
        <div style="text-align: center;">
            <button class="btn default">Place Order</button>
        </div>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="../dashboard/fumigation_dash.jpg" alt="Fumigation" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Fumigation</b></p>
        <p>Our fumigation services ensures household pests and rodents are exterminated from your house. Our extensive extermination services keeps your environs free from deadly reptiles. Click to order for fumigation services around you.</p>
        <div style="text-align: center;">
            <button class="btn default">Place Order</button>
        </div>
      </div>
    </div>
  </div>
  




  <!-- Images of Me -->
  
    
   
    
    
  
  <!-- Contact Section -->
  <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Contact Us Directly</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <a href="#"><div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>Mail</p>
      </div></a>
      <a href="#"><div class="w3-third w3-teal">
        <p><i class="fa fa-whatsapp w3-xxlarge w3-text-light-grey"></i></p>
        <p>WhatsApp</p>
      </div></a>
      <a href="#"><div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>Call</p>
      </div>
    </div></a>
    <hr class="w3-opacity">
    <form method="post">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
  </div>

  
  
  <div class="w3-black w3-center w3-padding-24">Powered by <a href="#" title="W3.CSS" target="_blank" class="w3-hover-opacity">Auscay</a></div>

<!-- End page content -->
</div>


<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>

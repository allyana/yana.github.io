<?php

 SESSION_START();

 include("db_config/PDO_connect.php");
 
?>

<!DOCTYPE html>
<html>
<title>Student Home Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {
	
	font-family: "Raleway", sans-serif
	
	}

form {
    width: 35%;
    margin: 35px auto;
    text-align: left;
    padding: 10px; 
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
}

.input-group {
    margin: 10px 0px 10px 0px;
}
.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px; background-size:100%; background-color:#95a5a6;">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-CadetBlue w3-animate-left" style="z-index:3;width:22.5%;background-color:#95a5a6;" id="mySidebar"><br>
  <div class="w3-container" >
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
	
    <img src="images/ump.png" width="190px" height="150px" />
    <br><br><br>
    
  </div >
  <div class="w3-bar-block" >
	<a href="" style="background-color:#2f4f4f" class="w3-bar-item w3-button w3-padding"><i class="fa fa-list-alt w3-margin-right"></i>Menu</a>
	<a href="adminHome.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home w3-margin-right"></i>Home</a>
    <!--<a href="studentProfile.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user w3-margin-right"></i>My Profile</a>-->
	<a href="addProgram.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>Manage Program</a>
	<a href="manageUser.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>Manage User</a>
    <a href="dass21.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-file fa-fw w3-margin-right"></i>Report</a> 
    <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out fa-fw w3-margin-right"></i>Logout</a>
  </div><br>

  
  <div class="w3-panel w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i><br>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">
<header id="portfolio" style="background-color:#95a5a6">
    <!--<a href="#"><img src="studentPic/icon.png" style="width:75px; height:50px;"></a>-->
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">

    <div class="w3-section w3-bottombar w3-padding-16">
	

      <span class="w3-margin-right"></span>
      <!--<button class="w3-button w3-black">ALL</button>-->
      <button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Home</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Program</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>Announcement</button>
    </div>
    </div>
  </header>

</div>
</div>
<br>
<br>

<div align="center">
<form method="POST" action="adminIndex.php">

	<h1> Add an Event </h1>
	
		<div class="input-group">
			<label>Event Name</label>
			<input type="text" name="eventName">
		</div>
		<div class="input-group">
			<label>Date</label>
			<input type="date" name="eventDate">
		</div>
		<div class="input-group">
			<label>Day</label>
			<select name="eventDay">
				<option value="sunday">Sunday</option>
				<option value="monday">Monday</option>
				<option value="tuesday">Tuesday</option>
				<option value="wednesday">Wednesday</option>
				<option value="thursday">Thursday</option>
				<option value="friday">Friday</option>
				<option value="saturday">Saturday</option>
			</select>
		</div>
		<div class="input-group">
			<label>Time</label>
			<input type="Time" name="eventTime">
		</div>
		<div class="input-group">
			<label>Link</label>
			<input type="url" name="eventUrl">
		</div>
		<div class="input-group">
			<label>Description</label>
			<input type="text" name="description">
		</div>
		<div class="input-group">
			<button type="submit" name="addProgram" class="btn">Add Event</button>
		</div>
	</form>
</div>
<?php
		if(isset($_POST['addProgram'])){
			$eventName= $_POST['eventName'];
			$eventDate = $_POST['eventDate'];
			$eventDay = $_POST['eventDay'];
			$eventTime = $_POST['eventTime'];
			$eventUrl = $_POST['eventUrl'];
			$description = $_POST['description'];
			if(!empty($eventName)){
				try{
					$eventData = $con->prepare("INSERT INTO program(eventName, eventDate, eventDay, eventTime, eventUrl, description) VALUES (:eventName, :eventDate, :eventDay, :eventTime, :eventUrl, :description)");
					$eventData->execute(array('eventName'=>$eventName, ':eventDate'=>$eventDate, ':eventDay'=>$eventDay, ':eventTime'=>$eventTime, ':eventUrl'=>$eventUrl, ':description'=>$description));
					header('Location:addProgram.php');
				}catch(PDOException $ex){
					echo $ex->getMessage();
				}
			}else{
				echo "Please input event name";
			}
		}
?>
		
		
</body>
</html>

</div>
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

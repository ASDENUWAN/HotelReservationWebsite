<?php
    include_once'config.php';
?>
<?php
    $fname = $_POST["firstname"];
	$lname = $_POST["lastname"];
	$dob = $_POST["dob"];
	$gen = $_POST["gender"];
	$country = $_POST["country"];
	$passport = $_POST["passport"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$pass = $_POST["password"];
	
	$sql="INSERT INTO
	tourists(T_id,Fname,Lname,DOB,Gender,Country,PassportNo,Email,Phone,Password) VALUES('','$fname','$lname','$dob','$gen','$country','$passport','$email',$phone,'$pass')";
	
	if(mysqli_query($conn,$sql)) //predefine func.. for execute query -> mysqli_query(link,query)
	{
		echo"<script>alert('Your account created successfully!')</script>";
	}else
	{
		echo"<script>alert('Registration failed!')</script>";
	}
	
	//close the connection
	mysqli_close($conn);//predefine func.. for close connection -> mysqli_close(link)
?>
<!DOCTYPE html>
<html>
<head><title>Registration Form</title>
<script src="./js/index.js"></script>
<link rel="stylesheet" href="./css/styles.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>

<!--Header-->
	<img class="blue" src="./images/Home/blue1.jpg" alt="blue">
	<img class="logo" src="./images/Home/logo0.png" alt="logo">
	<img class="user" src="./images/Home/user.png" alt="logo">
	<h1 id="topic"><b>THE  SKY  BLUE</b></h1>

<!--navigation bar-->
	<ul type="none" class="nav">
		<li class="nav-list"><a href="index.php" class="list-a">Home</a></li>
		<li class="nav-list"><a href="accommodation.php" class="list-a">Accommodation</a></li>
		<li class="nav-list"><a href="facilities.php" class="list-a">Facilities</a></li>
		<li class="nav-list"><a href="booking.php" class="list-a">Booking</a></li>
		<li class="nav-list"><a href="about.php" class="list-a">About us</a></li>
		<li class="nav-list"><a href="reviews.php" class="list-a">Reviews</a></li>
		<li class="nav-list"><a href="contact.php" class="list-a">Contact us</a></li>
	</ul>
    <hr style="border:3px solid black">
	
	<center>
	<div class="sub">
	<button type = "button" class = "sub-butt"><a href = "login.php" class="sub-butt-a">Login</a></button><br><br>
	<button type = "button" class = "sub-butt"><a href = "index.php" class ="sub-butt-a">Home page</a></button>
	</div>
	</center>
	
<hr>	
	<!--footer-->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col">
				<h4>company</h4>
				<ul>
					<li><a href="about.php">>about us</a></li>
					<li><a href="#">>privacy policy</a></li>
					<li><a href="#">>Term & Condition</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Contact</h4>
				<ul>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">123 Street,Rathnapura.</a></li>
					<li><a href="#">011-2788856</a></li>
					<li><a href="#">bluesky@gmail.com</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>follow us</h4>
				<div class="social-links">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-linkedin-in"></i></a>
				</div>
			</div>
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15799.272129499186!2d80.37134780364997!3d6.736016323992659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3beeb373e90c7%3A0xcc578e3f0396185!2sThe%20Royal%20Peak%20Resort!5e0!3m2!1sen!2slk!4v1685886884211!5m2!1sen!2slk"
				 width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>

</footer>
<hr>
</body>
</html>

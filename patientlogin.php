<html>
	<head>
		<title>Patient Login</title>
		<link rel = "stylesheet" href = "css/patientlogin.css" />
	</head>
	<body>
		<div id = "patientlogin1">
			<header>
				<img src = "img/logo.png" alt = "Logo" />
   				<h1>NMIT HOSPITALS</h1>
				<h2>A One-Stop Solution To Keep You Healthy</h2>
			</header>
		</div>
		<div id = "patientlogin2">
			<div>
				<img src = "img/patientlogin.jpg" />
				<br />
				<h2>PATIENT LOGIN</h2>
				<br />
				<form action = "patientafterlogin.php" method = "post">
					<p>USERNAME</p>
					<input type = "text" name = "patientusername" placeholder = "Enter Username" autocomplete = "off" />
					<p>PASSWORD</p>
					<input type = "password" name = "patientpassword" placeholder ="Enter Password" autocomplete = "off" />
					<input type = "submit" name = "submit" value = "Log In">
				</form>
			</div>
		</div>
		<div id = "patientlogin3">
			<footer>
				<ul>
					<li>Contact number: 080-23450917, 080-23450918, 080-23450919, 080-23334565</li>
					<li>&copy; NMIT Foundation for Medical Education and Research (NMITMER). All rights reserved.</li>
				</ul>
			</footer>
		</div>
	</body>
</html>

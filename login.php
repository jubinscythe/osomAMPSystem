<!DOCTYPE HTML>

<?php
$invalid = '';
if (isset($_POST['error'])) {
	$invalid = 'show';
}
?>

<html>
	<title>Shopify Auto Tags Generator</title>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/light-bootstrap-dashboard.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

</head>
<body>

<header class="shadow">
	<div class="container">
		<div class="logo"><img src="assets/img/osom-logo.png"></div>
		<div class="system_title"><h3>Attendance Monitoring System</h3></div>
	</div>
</header>

<div class="login_content">
	<div class="login-page">
		<div class="date_time text-center">
			<div class="date_section">Day - Month 99, 9999</div>
			<div class="time_section" id="clock">HH:MM:SS AM</div>
		</div>
		<div class="form">
			<div class="text-center login_error <?php echo $invalid; ?>"><small>Username or password is invalid!</small></div>
			<form class="login-form" action="include/validate.php" method="post">
				<input type="text" placeholder="username"/>
				<input type="password" placeholder="password"/>
				<button>login</button>
			</form>
		</div>
		<div class="pawer text-center">
			<p>Powered by Team Legacy</p>
		</div>
	</div>
</div>

<script>
	window.onload = init;
	function init() {
		window.setInterval(time, 1000);
	}
	function time() {
		var tim = new Date();
		var clockDiv = document.getElementById("clock");

		var d = new Date();
		var weekday = new Array(7);
		weekday[0] = "Sunday";
		weekday[1] = "Monday";
		weekday[2] = "Tuesday";
		weekday[3] = "Wednesday";
		weekday[4] = "Thursday";
		weekday[5] = "Friday";
		weekday[6] = "Saturday";

		var daystring = weekday[d.getDay()];

		clockDiv.innerHTML = tim.toLocaleTimeString() + ' | ' + daystring + ' | ' + tim.toLocaleDateString();
	}
</script>

</body>

</html>
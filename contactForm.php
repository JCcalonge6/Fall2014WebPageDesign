<!DOCTYPE html>
<html>

	<head>
		<title>Fish Creek Animal Hospital Contact Success</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="fishcreek.css">
		<!--<link rel="stylesheet" type="text/css" href="fishcreekmobile.css">
		<meta name=”viewport” content=”width=device-width” initial-scale=”1.0”>-->
	</head>

	<body>
	<div id="wrapper">	
		<div class="logo">
			<h1 id="header"><a id="plain" href="index.html">
				Fish Creek Animal Hospital</a></h1>
		</div>

		<div id="leftcolumn">
			<div class="navigation">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="askvet.html">Ask the Vet</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="shop.html">Shop</a></li>
				</ul>
			</div>
		</div>
		
		<div id="rightcolumn">
			<div class="content">
				<h2>Contact Fish Creek</h2>
				<?
					date_default_timezone_set("America/New_York");
					echo "Thank you, ".$_POST['myName']."<br>";
					echo "We will be contacting you by this address: ".$_POST['myEmail']."<br>";
					echo "Received on: ".date("m-d-Y h:i");
				?>
			</div>
			
			<div id="footer">
				<div class="nav" id="main">
					<a href="index.html"><u>Home</u></a>&nbsp;&nbsp;
					<a href="services.html"><u>Services</u></a>&nbsp;&nbsp;
					<a href="askvet.html"><u>Ask the Vet</u></a>&nbsp;&nbsp;
					<a href="contact.html"><u>Contact</u></a>&nbsp;&nbsp;
					<a href="shop.html"><u>Shop</u></a>
				</div>
				<p>Copyright(c) 2013 Fish Creek Animal Hospital</p>				
				<a href="mailto:JCcalonge@gmail.com">JCcalonge@gmail.com</a>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function validateForm()
		{
			if(document.forms[0].myEmail.value == "")
			{
				alert("Please enter an e-mail address.");
				return false;
			}
			else
				return true;
		}
	</script>
	</body>
</html>
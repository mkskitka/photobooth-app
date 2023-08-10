<html>
<head>
	<title>TOUCHDESIGNER - PHOTOBOOTH - Share</title>

	<style>

		* {
			padding: 0;
			margin: 0;
			color: #FFF;
			font-family: Verdana, Helvetica, Sans-serif;
			font-size: 10px;
		}

		body { 
			background-color: white;
		}

		#MainContainer {
			display: block;
			position: relative;
			width: 95%;
			max-width: 1200px;
			margin: 0 auto 0;
			padding-top: 200px;

		}

		

		#img {
			display: block;
			position: relative;
			width:100%;
			max-width: 1000px;
			margin: 0 auto 0;
		}

		#message {
			display: block;
			width: 100%;
			max-width: 600px;
			font-size: 3em;
			text-align: center;
			margin: 0 auto 0;
			margin-top: 40px;
			margin-bottom: 40px;
			font-weight: bold;
			color: black;
		}

		#kp_logo {
			position: relative;
			bottom: 0px;
			width:90%;
			max-width: 1000px;
			margin: 5%
		}



	</style>
	
</head>
<body>
	<div id="MainContainer">

		
			

		<div id="img">
			<img src="/photos/<?php echo $_GET['id']; ?>.jpg" width="100%" />
		</div>

		<div id="message">Press and hold on the image to save to your phone.</div>
		<div id="img">
			<img id="kp_logo" src="/photos/kp.jpg" width="100%" />
		</div>


		

		
	<div>
<body>
</html>
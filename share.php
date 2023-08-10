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
			font-size: 2em;
			text-align: center;
			margin: 0 auto 0;
			margin-top: 40px;
			margin-bottom: 40px;
			font-weight: bold;
			color: black;
		}



	</style>
	
</head>
<body>
	<div id="MainContainer">

		
			

		<div id="img">
			<img src="/photos/<?php echo $_GET['id']; ?>.jpg" width="100%" />
		</div>

		<div id="message">Press and hold on the image to save to your phone.</div>


		

		
	<div>
<body>
</html>
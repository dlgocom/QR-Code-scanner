
<html>
<head>
	<meta name="description" content="QR Code scanner" />
	<meta name="keywords" content="qrcode,qr code,scanner,barcode,javascript" />
	<meta name="language" content="English" />
	<meta name="copyright" content="Lazar Laszlo (c) 2011" />
	<meta name="Revisit-After" content="1 Days"/>
	<meta name="robots" content="index, follow"/>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Web QR</title>

	<style type="text/css">
		body{
			width:100%;
			text-align:center;
		}
		img{
			border:0;
		}
		#main{
			margin: 15px auto;
			background:white;
			overflow: auto;
			width: 100%;
		}
		#header{
			background:white;
			margin-bottom:15px;
		}
		#mainbody{
			background: white;
			width:100%;
			display:none;
		}

		#v{
			width:320px;
			height:240px;
		}
		#qr-canvas{
			display:none;
		}
		#qrfile{
			width:320px;
			height:240px;
		}
		#mp1{
			text-align:center;
			font-size:35px;
		}
		#imghelp{
			position:relative;
			left:0px;
			top:-160px;
			z-index:100;
			font:18px arial,sans-serif;
			background:#f0f0f0;
			margin-left:35px;
			margin-right:35px;
			padding-top:10px;
			padding-bottom:10px;
			border-radius:20px;
		}
		.selector{
			margin:0;
			padding:0;
			cursor:pointer;
			margin-bottom:-5px;
		}
		#outdiv
		{
			width:320px;
			height:240px;
			border: solid;
			border-width: 3px 3px 3px 3px;
		}
		#result{
			border: solid;
			border-width: 1px 1px 1px 1px;
			padding:20px;
			width:70%;
		}

		.tsel{
			padding:0;
		}

	</style>

	<script type="text/javascript" src="js/llqrcode.js"></script>
	<script type="text/javascript" src="js/plusone.js"></script>
	<script type="text/javascript" src="js/webqr.js"></script>

</head>

<body>
	<div id="main">
		<div id="header">
			<div style="position:relative;top:+20px;left:0px;"><g:plusone size="medium"></g:plusone></div>
			<p id="mp1">
				QR Code scanner
			</p>
		</div>
		<div id="mainbody">
			<table class="tsel" border="0" width="100%">
				<tr>
					<td valign="top" align="center" width="50%">
						<table class="tsel" border="0">
							<tr>
								<td><img class="selector" id="webcamimg" src="img/vid.png" onclick="setwebcam()" align="left" /></td>
								<td><img class="selector" id="qrimg" src="img/cam.png" onclick="setimg()" align="right"/></td></tr>
								<tr><td colspan="2" align="center">
									<div id="outdiv">
									</div></td></tr>
								</table>
							</td>
						</tr>
						<tr><td colspan="3" align="center">
							<img src="img/down.png"/>
						</td></tr>
						<tr><td colspan="3" align="center">
							<div id="result"></div>
						</td></tr>
					</table>
				</div>&nbsp;
			</div>
			<canvas id="qr-canvas" width="800" height="600"></canvas>
			<script type="text/javascript">load();</script>
		</body>

		</html>
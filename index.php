<?php

?>
<html>
	<head>
		<style type="text/css">
			*{
				margin:0;
				padding:0;
				font:14px Arial;
				color:#222;
			}
			body{
				background-color:#DDD;
			}
			#container{
				background-color:rgba(255,255,255,.9);
				width:1000px;
				height:100%;
				margin:0 auto;
				padding:20px 0;
			}
			#emblemns{
				width:auto;
				height:500px;
				margin-bottom:20px;
			}
			#innerEmblemns, #innerOptions, #hideOptions{
				width:75%;
				height:75%;
				margin:0 auto;
				border:1px solid #DDD;
				border-radius:5px;
			}
			#headerEmblemns, #headerOptions{
				background-color:#BBB;
				font-size:20px;
				text-transform:uppercase;
				color:#FFF;
				font-weight:bold;
				padding:20px;
				text-align:center;
				margin-bottom:30px;
				letter-spacing:5px;
				word-spacing:10px;
				text-decoration:underline;
			}
			#options{
				width:auto;
				height:400px;
			}
			#innerOptions{
				text-align:center;
			}
			button{
				padding:20px;
				border:1px solid #888;
				border-radius:5px;
				letter-spacing:3px;
				word-spacing:5px;
				color:#444;
			}
			#hideOptions{
				width:400px;
				height:400px;
				position:absolute;
			}
		</style>
	</head>
	<body>
		<div id="container">
			<div id="emblemns">
				<div id="innerEmblemns">
					<div id="headerEmblemns">Header Emblemns</div>
					<div id="bodyEmblemns">
						
					</div>	
				</div>
			</div>
			<div id="options">
				<div id="innerOptions">
					<div id="headerOptions">Header Options</div>
					<div id="bodyOptions">
						<button onclick="bOptions(0);">Shield</button>
						<button onclick="bOptions(1);">Listras</button>
						<button onclick="bOptions(2);">Color 1</button>
						<button onclick="bOptions(3);">Color 2</button>
					</div>
					<div id="hideOptions">
						
					</div>
				</div>
			</div>
		</div>
	</body>
	<script type="text/javascript">
		var innerTop = (window.innerHeight / 2) - 200;
		var innerLeft = (window.innerWidth / 2) - 200;
		
		document.getElementById('hideOptions').style.top = innerTop;
		document.getElementById('hideOptions').style.left = innerLeft;
		
		var shield = []
	
		function bOptions(opt){
			switch (opt){
				case 0:
					
					break;
				case 1:
				
				 	break;
				case 2:
				
					break;
				case 3:	
				
			}
		}
	</script>
</html>
<!DOCTYPE html>

<!-- Made By Pelochus in colaboration with sharpplusplus -->

<html>
	<head>
		<title>IgnacioLandia Web</title>
		
		<!-- Metadata -->
		<meta charset="UTF-8">
		<meta name="description" content="IgnacioLandia">
		<meta name="author" content="Pelochus & sharpplusplus">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Autoresolution -->
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/jpg" href="images/favicon.jpg">
		
		<!-- CSS Styles File -->
		<link rel= "stylesheet" type="text/css" href="css/styles.css">
	</head>
	
	<!-- Body -->
	
	<body>
		
		<!-- Main Page -->
		<div id="main" class="main">
		
			<!-- Header -->
			
			<div id="header" class="header">
				<div style="text-align:right; width:90%; float:left">
					<p style="color:white; font-size:24px; font-family:helvetica">
						IgnacioLandia: <i>Minecraft Server</i>
					</p>
				</div>
				<div id="logo" class="logo">
					<img src="images/fotoignacio.png" style="height:100%; width:100%">
				</div>
			</div>
			
			<!-- Sidebar -->
			
			<div id="sidebar" class="sidebar">
				<hr>
				<p style="text-align:center; color:white; font-family:consolas; font-size:25px"><b>Server Stats</b></p>
				<hr style="color:af0000">
				<div style="text-align:center">
					<p style="color:white; font-size:20px; font-family:helvetica">Information about the server</p>
					<p style="color:white; font-family:helvetica">
						<?php
							require __DIR__ . '/php/MinecraftPing.php';
							require __DIR__ . '/php/MinecraftPingException.php';
							
							use xPaw\MinecraftPing;
							use xPaw\MinecraftPingException;
							
							try
							{
								$Query = new MinecraftPing( 'localhost', 25565 );
							
								$string = print_r( $Query->Query() , true);
								
								$divided = explode(" ", $string);

								echo "<b>Max Players: </b>";
								echo $divided[64];
								echo "<br>";
								
								echo "<b>Online Players: </b>";
								echo $divided[78];
								echo "<br>";
								
								echo "<b>Fork: </b>";
								echo $divided[114];
								echo "<br>";
								
								echo "<b>Server Version: </b>";
								echo $divided[115];
								echo "<br>";
								
							}
							catch( MinecraftPingException $e )
							{
								echo $e->getMessage();
							}
							finally
							{
								if( $Query )
								{
									$Query->Close();
								}
							}
						?>
					</p>
					<br>
					<p style="color:white; font-family:helvetica">Extra Links</p>
					<hr color=cyan>
					<a href=https://github.com/Pelochus style="color:yellow; font-family:calibri">Pelochus GitHub</a> <br> 
					<br>
					<a href=https://github.com/sharpplusplus style="color:yellow; font-family:calibri">sharpplusplus GitHub</a>
					<br> <hr color=cyan>
					<a href=http://ignaciolandia.ddnsfree.com:8080 style="color:orange; font-family:calibri">This Page</a>
				</div>
			</div>
				
			<!-- Main Body -->
			
			<div id="index" class="index">
				<p style="font-size:40px; font-family:helvetica; text-align:center; color:white">
					<i>IgnacioLandia Extremely Cool Webpage</i>
				</p>
				<hr style="color:af0000">
				<div style="text-align:center; background-color:black; width:12%; height:20px"><p style="color:white; font-size:24px; font-family:helvetica">What is this?</p></div>
				<hr color=red width=12% align=left>
				<p style="font-family:arial; font-size:18px; text-align:justify; margin:30px; color:595959">
					<img src="images/fotoiglesia.png" style="float:right; padding:3px; width:36%; height:80%"> <!-- Añadir una foto de la iglesia -->
					<div style="background-color:rgba(0,0,0,0.6); border-color:black; border-style:solid; color:black; width:35%; padding:3px; text-align:justify">
						<p style="color:white; font-family:sans-serif">
						Welcome to IgnacioLandia main webpage! <br>
						<br>
						This page displays basic information on the Minecraft server on this domain.
						<br>
						<br>
						To join in, just add new server in Minecraft and add <span style="color:red"><u>ignaciolandia.ddnsfree.com:25565</u></span>
						to the server address field.
						</p>
					</div>
				</p>
			</div>
			
			<!-- Footer -->
			
			<div id="footer" class="footer">
				<div style="text-align:center">
					<p style="color:white; font-family:helvetica">
						<i>More information:</i>
					</p>
					<a href=https://github.com/Pelochus/IgnacioLandia-Web style="color:red; font-family:calibri">
						<i>GitHub Repo by Pelochus</i>
					</a>
				</div>
			</div>
			
		</div>
	</body>
</html>
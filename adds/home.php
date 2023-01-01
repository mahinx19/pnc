<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" href="css/mobile.css" media="only screen and (min-width:0px) and (max-width:599px)"/>
	<link rel="stylesheet" href="css/tab.css" media="only screen and (min-width:600px) and (max-width:1279px)"/>
	<link rel="stylesheet" href="css/pc.css" media="only screen and (min-width:1280px)"/>
	<link rel="icon" href="image/home.png"/>
</head>
<body><div id="center">
	<?php include 'tp.php'; ?>
	<?php include 'lp.php'; ?>
	<div id="cp"><h1 align="center" style="font-size:40px">News Feed</h1>
		<table id="ct" align="center">
			<tr>
				<td>
					<h2 id="nhead"><a href="profile.html" id="link1">
						<table>
							<tr>
								<td id="t2h"><img src="image/mahin.jpg" alt="mahin" id="minimgl" align="right;"/></td>
								<td>Mahinur Rahman</td>
							</tr>
						</table>
					
					</a></h2>
					Welcome to "Polytron Network Community" !<br>
					I am Mahinur Rahman is with you.
				</td>
			</tr>
		</table>
		<table id="ct2" align="center" style="text-align:center;">
			<tr>
				<td>
					<button id="pb" >
						<center>
							<table>						
								<tr>						
									<td id="t2h"><img src="image/like.png" alt="like" id="minimg" align="right;"/></td>
									<td id="t2h">Like</td>							
								</tr>
						</table>
						</center>
					</button>
				</td>
				<td>
					<button id="pb1" >
						<center>
							<table>						
								<tr>						
									<td id="t2h"><img src="image/comment.png" alt="comment" id="minimg" align="right;"/></td>
									<td id="t2h">Comment</td>							
								</tr>
						</table>
						</center>
					</button>
				</td>
				<td>
					<button id="pb2" >
						<center>
							<table>						
								<tr>						
									<td id="t2h"><img src="image/share.png" alt="share" id="minimg" align="right;"/></td>
									<td id="t2h">share</td>							
								</tr>
						</table>
						</center>
					</button>
				</td>
			</tr>
		</table><br><br>
	</div>
	<?php include 'rp.php' ?>
	</div>
</body>
</html>
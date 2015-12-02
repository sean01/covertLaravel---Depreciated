<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Covert Ops - Free Voice and Text Chat</title>
	<!-- <link rel="stylesheet" href="node_modules/normalize.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Lato:100,200,400,300,300italic,900italic,900,700italic,700,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="dist/style.min.css">
</head>
<body>

<div class="container">
	
	<div class="wrapper">
		<header class="flex flex-s-between align-c">
			
			<h1>Covert Ops</h1>
			
			<nav>
				<ul class="flex flex-s-between align-c">
					
					<? if(Auth::check()): ?>
						<li><a href="auth/user"><i class="fa fa-user"></i> <?= ucfirst(Auth::user()->name) ?></a></li>
					
						<li><a href="auth/logout"><i class="fa fa-reply"></i>  Log out</a></li>						
					<? else: ?>
						<li><a href="auth/register"><i class="fa fa-user-plus"></i>  Register</a></li>
						<li><a href="auth/login"><i class="fa fa-share"></i>  Login</a></li>
					<? endif ?>
				</ul>
			</nav>
		</header>
	</div>
	
	<div class="roomContainer flex align-c flex-center">
		
		<form action="" class="flex flex-col align-c">
			<input type="text" id="roomName" class="std-input-text" placeholder="Enter a room name">
		
			<button type="submit" id="submitButton" class="btn-standard">Enter</button>
		</form>

	</div>
	


	

	
			
	
	
</div>



	
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
<script type="text/javascript" src="http://cdn.icecomm.io/icecomm.js"></script>  
<!-- <script src="http://cdn.peerjs.com/0.3/peer.js"></script> -->
<script src="assets/js/script.js"></script>
	
</body>
</html>

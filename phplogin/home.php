<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Phone Book</h1>
                
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
		</div>
        
            
      <div class="square">
        <pre class="f"><h2> Contact Name                                                                                     Number </h2> </pre>
    
          
        <div class="a">
          <pre class="f"><h2> Murad                                                                                      0133333333333 </h2> </pre>
          <div class="b">
            <pre class="f"><h2> Tisha                                                                                         01444444444444 </h2> </pre>
            </div>
          <div class="c">
            
            <pre class="j"><h2> Rahat                                                                                         01555555555555 </h2> </pre>
            </div>
        
        </div>          
    </div>  
	</body>
</html>
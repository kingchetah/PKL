<?php


?>
<!Doctype html>
<html lang="en-US">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'>
        <link rel="stylesheet" href="./css/style.css">
	<title>Login</title>




</head>

<body>
<div class="container-login">
        <div class="left-half">
            <img src="images/themis.png">
        </div>
	

	<div class="right-half">
            <h1>HLP Consultant</h1>
            <img src="images/logo.png" class="center">
            <h2>Login</h2>
<!-- cek pesan notifikasi -->

		<form action="logincek.php" method="POST">
				
				<p><input type="username" class="input-form" id="username" name="username" value="username" onBlur="if(this.value=='')this.value='username'" onFocus="if(this.value=='username')this.value=''" required></p>

				<p><input type="password" class="input-form" id="password" name="password" value="password" onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')this.value=''" required></p>

				<p><input type="submit" class="submit-form" name ="login" value="Login"></p>
		</form>
		<br> <br> <br> <br>
	</div> <!-- end login -->
	</div>
    
</body>

</html>

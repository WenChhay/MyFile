<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login_User.php" method="post">
     	<h2>LOGIN_User</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>UserName</label>
     	<input type="text" name="UserName" placeholder="UserName"><br>

     	<label>UserName</label>
     	<input type="password" name="Password" placeholder="Password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>
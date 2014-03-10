<!DOCTYPE html>
<?php 
	$name = "";
	$username = "";
	$password = "";

	if (isset($_POST["name"])) {
		$name = $_POST["name"];
	}
	if (isset($_POST["username"])) {
		$username = $_POST["username"];
	}
	if (isset($_POST["password"])) {
		$password = $_POST["password"];
	}
	

	$show_result = !empty($name) && !empty($username) && !empty($password);

 ?>

<html>
<head>
	<title>"oefening php</title>
		<link rel="stylesheet" type="text/css" href="css\bootstrap.css">
</head>
<body>
<h1>Registratie</h1>

<?php if ($show_result  ){ ?>

<h1>gegevens:</h1>
<p>naam ==> <?php echo $name ?>  </p>
<p>gebruikersnaam ==> <?php echo $username ?>  </p>
<p>gebruikersnaam ==> <?php echo $password ?>  </p>
	

<?php }else{ ?>

<div class="container">
<link rel="stylesheet" type="text/css" href="css\signin.css">
      <form class="form-signin" method="POST" role="form">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name="name" type="name" class="form-control" placeholder="naam" required="" autofocus="">
        <input name="username" type="name" class="form-control" placeholder="gebruikersnaam" required="" >
        <input  name="password"type="password" class="form-control" placeholder="wachtwoord" required="">
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="send" value="verzenden">verzend </button>
      </form>

    </div>




	<!-- <p>naam:<input type="text" value="<?php echo $name ?>" name="name" size="15" maxlength="30">
	</p>
	<p>gebruikersnaam:<input type="text" value="<?php echo $username ?>" name="username" size="15" maxlength="30">
	</p>
	<p>wachtwoord: <input type="password" value="<?php echo $password ?>" name="password" size="15" maxlength="30">
	</p>
<input type="submit" name="send"
value="verzenden" /> -->




<?php } ?>

</body>
</html>
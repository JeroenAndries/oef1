<!DOCTYPE html>
<html>
<head>
	<title>"result post/get</title>
		<link rel="stylesheet" type="text/css" href="css\bootstrap.css">
</head>
<body>
<?php if (isset($_POST["name"])){ ?>
<div class="container">
<link rel="stylesheet" type="text/css" href="css\signin.css">
      <form class="form-signin" method="POST" role="form">
        <h2 class="form-signin-heading">Result POST</h2>
        <input name="name" type="name" class="form-control" value="<?php echo $_POST["name"]?>" disabled >
        <input name="username" type="name" class="form-control" value="<?php echo $_POST["username"]?>" disabled >
        <input name="password"type="input" class="form-control" value="<?php echo $_POST["password"]?>" disabled>
        
        
      </form>
</div>
	

<?php }
if(isset($_GET["g_name"])){ ?>

<div class="container">
<link rel="stylesheet" type="text/css" href="css\signin.css">
      
<form class="form-signin" method="GET" role="form">
        <h2 class="form-signin-heading">Result GET</h2>
        <input name="g_name" type="name" class="form-control" value="<?php echo $_GET["g_name"]?>" disabled >
        <input name="g_username" type="name" class="form-control" value="<?php echo $_GET["g_username"]?>" disabled >
        <input name="g_password"type="input" class="form-control" value="<?php echo $_GET["g_password"]?>" disabled>
        
        
      </form>

    </div>
    <?php } ?>
</body>
</html>

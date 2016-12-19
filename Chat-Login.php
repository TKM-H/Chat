<?php
  session_start();
 
  if (isset($_POST["login"])) {
  
    if ($_POST["userid"] == "hoge" && $_POST["password"] == "hoge") {
      header("Location: Chat.php");
      exit;
    }
    else {
      session_regenerate_id(TRUE);
      $_SESSION["USERID"] = $_POST["userid"];
      $_SESSION["PASSWORD"] = $_POST["password"];
      header("Location: Chat-Error.php");
      exit;
    }
  }

?>
<!doctype html>
<html>
	<head>
	    <meta charset="UTF-8">
	    <title>Chat - Login</title>
	    <style type="text/css">
	    .subtitle{
	    	color: red;
	    }
	    </style>
	</head>
<body>
  <form id="Chat-Login" name="Chat-Login" action="<?php print($_SERVER['PHP_SELF']) ?>" method="POST">
  <h1 align="left">Chat</h1>		
  <label for="userid">Login ID</label><input type="text" id="userid" name="userid" value="">
  <br>
  <label for="password">Password</label><input type="password" id="password" name="password" value="">
  <br>
  &emsp;&emsp;&emsp;&emsp;&emsp;<label></label><input type="submit" id="login" name="login" value="Login">
  </form>	
</body>
</html>

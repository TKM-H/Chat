<?php
session_start();
	if (isset($_SESSION["USERID"]) && isset($_SESSION["PASSWORD"])) {
      //$aaa = "Plese input your id and password.";
      $aaa = "Location: ID or Password is incorrect.";
      //exit;
    }
   else if(!isset($_SESSION["USERID"]) && isset($_SESSION["PASSWORD"]))
   {
      //$aaa = "Not found id.";
     $aaa = "Plese input your id and password.";
      //exit;
    }
   else if(isset($_SESSION["USERID"]) && !isset($_SESSION["PASSWORD"]))
   {
      //$aaa = "Not found id.";
      $aaa = "Plese input your id and password.";;
      //exit;
    }
    /*else if(isset($_SESSION["USERID"]!=="hoge")&&isset($_SESSION["PASSWORD"]!="hoge")) {
      $aaa = "Location: ID or Password is incorrect.";
    }*/
    //echo "ようこそ" . $_SESSION["USERID"] . "さん";
    //echo "ようこそ" . $_SESSION["PASSWORD"] . "さん";
?>
<html>
	<head>
	    <title>Chat - Error101</title>
	    <style type="text/css">
	    .subtitle{
	    	color: red;
			font-size: 24px;
	    }
	    .subtext{
	    color: red;
	    }
	    </style>
	</head>
	<body>
			<h1 align="left">Chat</h1>

			<table>
			<tr>
				<td class="subtitle">Error</td>
			</tr>
			<tr>
				<td class="subtext"><?php echo $aaa; ?></td>
			</tr>
			</table>

	<form action="Chat-Login.php">
	<button type="submit">back</button>
	</form>

	</body>
</html>

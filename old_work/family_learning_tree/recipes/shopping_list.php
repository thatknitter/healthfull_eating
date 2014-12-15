<html>
	<head>
		<link rel="stylesheet" type="text/css" href="shopping_list.css">
<?php
$server="127.0.0.1";
$user_name="root";
$password="";
$database="recipe_db";
mysql_connect($server, $user_name, $password) or die(mysql_error());
	$db_found=mysql_select_db($database);

?>
</head>
<body>
	<div class="title">
		Shopping List
	</div>
	<div class="items">
		
	</div>
</body>
</html>
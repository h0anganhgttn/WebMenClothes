
<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="Assets/css/style.css" />
</head>
<body>
<div class="form">
<strong style="font-size: 25px; background-color: red; " >Welcome to Dashboard.</strong>
<p style="background-color:greenyellow"><a href="indexadmin.php">Home</a><p>
<p style="background-color:greenyellow"><a href="insert.php">Insert New Record</a></p>
<p style="background-color:greenyellow"><a href="view.php">View Records</a><p>
<p style="background-color:greenyellow"><a href="logout.php">Logout</a></p>
</div>
</body>
</html>
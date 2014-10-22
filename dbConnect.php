<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title></title>
</head>
<body>

<h1>How to connect to a MySQL Database</h1>

<?php 
 // Connects to Our Database (deprecated)
 mysql_connect("phpmyadmin.whatever.com", "yoursite.dk", "xxxxx") or die(mysql_error()); 
 mysql_select_db("xxxx_mmd_eal_dk") or die(mysql_error()); 
?> 

</body>
</html>

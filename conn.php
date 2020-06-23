<?php
// Connection variables
/*$dbhost	= "mysqld";	   // localhost or IP
$dbuser	= "php";		  // database username
$dbpass	= "12345678";		     // database password
$dbname	= "miphp";    // database name*/




$host = getenv("MYSQL_SERVICE_HOST");
$port = getenv("MYSQL_SERVICE_PORT");
$user = getenv("databaseuser");
$pass = getenv("databasepassword");
$db =   getenv("databasename");

 

print $host;
print $port;
print $user;
print $pass;
print $db;

$con=mysqli_connect($host,$user,$pass,$db);

if(!$con)
{
	print("Not Connected<br>".mysql_error());

}
else
{
	echo("Connected");
}







?>

<?php
// Connection variables
/*$dbhost	= "mysqld";	   // localhost or IP
$dbuser	= "php";		  // database username
$dbpass	= "12345678";		     // database password
$dbname	= "miphp";    // database name*/



$host = getenv("MYSQL_SERVICE_HOST");
$port = getenv("MYSQL_SERVICE_PORT");
$user = getenv("MYSQL_USER");
$pass = getenv("MYSQL_PASSWORD");
$db =   getenv("MYSQL_DATABASE");

 
echo  $host;
echo  $port;
echo  $user;
echo  $pass;
echo  $db;

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

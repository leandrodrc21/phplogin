<?php
// Connection variables
/*$dbhost	= "mysqld";	   // localhost or IP
$dbuser	= "php";		  // database username
$dbpass	= "12345678";		     // database password
$dbname	= "miphp";    // database name*/



$dbhost = getenv("MYSQL_SERVICE_HOST");
$port = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("MYSQL_USER");
$dbpass = getenv("MYSQL_PASSWORD");
$dbname =   getenv("MYSQL_DATABASE");

echo  $dbhost;
echo  $port;
echo  $user;
echo  $pass;
echo  $db;

$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$con)
{
	print("Not Connected<br>".mysql_error());

}
else
{
	echo("Connected");
}










?>

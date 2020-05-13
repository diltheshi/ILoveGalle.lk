<?php

$db_host="localhost";
$db_username="root";
$db_passsword="";
$db_name="php_contactform";

$db_connect=mysqli_connect($db_host,$db_username,$db_passsword,$db_name);
//check the connection

if(mysqli_connect_error())
{
	echo"Failed to connect to  MySQL:".mysqli_connect_error();
	
}//echo"Connection successful";


?>
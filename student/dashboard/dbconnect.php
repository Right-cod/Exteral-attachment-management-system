<?php
//define
define('host', 'localhost');
define('db_user', 'root');
define('db_password', '');
define('db_name', 'attachment');
//set the parameters

function DBconnect(){
$host = host;
$db_user = db_user;
$db_pass = db_password;
$db_name = db_name;
$conn =mysqli_connect($host,$db_user,$db_pass,$db_name);
if ($conn) {

return$conn;
}else{
	echo "Error connecting with the database";
}

}
// DBconnect();
?>
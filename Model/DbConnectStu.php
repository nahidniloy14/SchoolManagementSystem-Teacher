<?php
function connect(){
$conn=new mysqli("localhost","niloy","1414","wtm");
var_dump($conn);
if($conn->connect_errno)
{

	die("Connection Failed Due To".$conn->connect_error);
}
return $conn;
}

?>
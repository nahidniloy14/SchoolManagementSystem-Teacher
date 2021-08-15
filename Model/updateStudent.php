<?php
$conn=new mysqli("localhost","niloy","1414","wtm");

$sql="INSERT INTO students
VALUES(NULL,3,'Niloy',5,20,3.75,'1998-10-10');"

if ($conn->query($sql))
{

	echo"Updated Successfully";
}

else
{

	echo"Not Interested";
}

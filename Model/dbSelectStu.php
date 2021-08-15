<?php
$conn=new mysqli("localhost","niloy","1414","wtm");
$sql="select * From students";
$result =$conn-->query($sql);
while($row=$result->fetch_assoc())
{

	echo $row['id'].'Name:'.$row.['name'].'<br/>';
}
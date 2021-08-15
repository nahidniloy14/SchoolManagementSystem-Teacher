<?php
include 'DbConnect.php';
function register($name, $email, $username,$password,$dateOfBirth,$gender)
{
$conn = connect();
$stmt=$conn->prepare("INSERT INTO USERS(name, email, username,password,dateOfBirth,gender)VALUES(?,?,?,?,?,?)");
echo "INSERT INTO USERS(name, email, username,password,dateOfBirth,gender)VALUES(?,?,?,?,?,?)";
exit();
$stmt->bind_param($name, $email, $username,$password,$dateOfBirth,$gender);


return $stmt->execute();
}
 ?>
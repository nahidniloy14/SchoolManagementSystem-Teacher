<?php
session_start();

session_destroy();

echo("You are Successfully logged out <br>Click here to <a href='https://localhost/a2/UniversityManagementSystem/Views/login.php'to >try again</a>");
?>
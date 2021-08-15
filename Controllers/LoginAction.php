 <?php 
$myemail="nahidniloy14@gmail.com";
$password="12345";

if(isset($_POST['login'])){
	$email = $_POST['email'];
	$pass = $_POST['password'];
	//$rem=$_POST['remember'];
	if($email == $myemail and $pass ==$password){
	
     if(isset($_POST['remember'])){
    setcookie('email',$email,time()+60*60*7);
}
   	    session_start();
   	 $_SESSION['email']=$email;
    
    header("location:https://localhost/a2/UniversityManagementSystem/Views/welcome.php");
}

else{echo"Email or Password is Invalid .<br> Click here to <a href='https://localhost/a2/UniversityManagementSystem/Views/login.php'to >try again</a>";
}

}
else{header(location:"https://localhost/a2/UniversityManagementSystem/Views/login.php");}





?>
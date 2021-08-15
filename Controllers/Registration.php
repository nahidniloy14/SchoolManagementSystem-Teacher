<?php
  session_start();
  include 'DbConnect.php';
?>

<!DOCTYPE html>
<html>
<style>
.error {color: #FF0000;}
</style>
<?php include '../Controllers/Includes/Header.php'?>
<?php

    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $birthdateErr= $degreeErr = $bloodgroupErr = $newpassErr = $renewpassErr = $usernameErr = "";

    $name = $email = $gender = $birthdate = $degree1 = $degree2 = $degree3 = $degree4= $bloodgroup =$newpass = $renewpass = $username = "";

    $check=0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      
      
      //name validation//name validation//name validation
      if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } 
      else {
        $name = test_input($_POST["name"]);
        //validating alphabet
        if (!preg_match("/^[a-zA-Z][a-zA-Z.\_\-]+ +[a-zA-Z.\-\_]+/",$name)) {
          $nameErr = "Only Can contain a-z, A-Z, period(.) , dash only(-) and at least two words";
        }
        else
          $check++;
          //!preg_match("/^[a-zA-Z-'{2,8} ]*$/",$name  
      }




      //email validation//email validation//email validation
    
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } 
      else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Must be a valid email_address : anything@example.Com";
        }
        else
          $check++;
      }
      
      //username username   
      if (empty($_POST["username"])) {
        $usernameErr = "username is required";
      } 
      else 
      {
          $username = test_input($_POST["username"]);
          //validating alphabet
          if (!preg_match("/^[0-9a-zA-Z-_]{2,}[^\s.]$/",$username)) {
            $usernameErr = "User Name must contain at least two (2) characters and can contain alpha numeric characters, period, dash or underscore only";
          }
          else
            $check++;
      }



      //password validation//password validation//password validation

      if(empty($_POST["newpass"])){
        $newpassErr=" must need to fill password";
      }else
        $newpass=test_input($_POST["renewpass"]);


      if(empty($_POST["renewpass"])){
        $renewpassErr=" must need to fill confirm password";
      }else
        $renewpass=test_input($_POST["renewpass"]);
      

      if (!preg_match("/^[0-9a-zA-Z@%#$]+$/",$newpass)) {
            $newpassErr = "Password must not be less than eight (8) characters and can contain only this special characters (@, #, $, %)";
      }else if($_POST["newpass"]==$_POST["renewpass"]){
          $check++; 
      }
      else
        $renewpassErr="didn't macth the password ";





      //gender validation

      if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } 
      else {
        $gender = test_input($_POST["gender"]);
        $check++;
      }
      

      //date validation 
      if(empty($_POST["birthdate"])){
        $birthdateErr = " select up year, month, date ";
      }
      else{
        $birthdate = test_input($_POST["birthdate"]);
        $check++;//prottek field er porer field//shb gula korsi kina
      }
      

      //form changing 
      if ($check == 6) {
        $conn=connect();
 $name=$_POST['name'];
 $email=$_POST['email'];
 $username = $_POST['username'];
 $password = $_POST['newpass'];
 $dateOfBirth=$_POST['birthdate'];
 $gender=$_REQUEST['gender'];

 //database connection
$sql = "INSERT INTO users(name,email,username,password,dateOfBirth,gender) VALUES ('$name','$password','$username', '$password','$dateOfBirth','$gender')";
echo $sql;

        if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

          $_SESSION['name']=$_REQUEST['name'];//request 
          $_SESSION['email']=$_REQUEST['email'];
          $_SESSION['username']=$_REQUEST['username'];
          $_SESSION['pass']=$_REQUEST['newpass'];
          $_SESSION['dob']=$_REQUEST['birthdate'];
          $_SESSION['gender']=$_REQUEST['gender'];
      
          header('location:http://localhost/a2/UniversityManagementSystem/Controllers/RegistrationAction.php');

      }
  }
  

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>


<body style="background: #2CA49A";>
<fieldset>
  <legend><h1>Registration</h1></legend>

  <p>
<center>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
  <span class="error"> </span><br>
  <b>Name:
		<input type="text" name="name">&nbsp;
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>

  <b>Email :
		<input type="text" name="email">&nbsp;
    <span class="error">* <?php echo $emailErr;?></span>
  <br><br>


 
    <b>Username: 
    <input type="text" name="username">&nbsp;
    <span class="error">* <?php echo $usernameErr;?></span><br>
  <br>


  
    <b>Password :
      <input type="Password" name="newpass" minlength="8">&nbsp;
    <span class="error">* <?php echo $newpassErr;?></span><br><br>
  <br>


   <b>Confirm Password :
    <input type="Password" name="renewpass" minlength="8">&nbsp;
    <span class="error">* <?php echo $renewpassErr;?></span>
  <br><br>


  <b> DATE OF BIRTH:
  	<input type="date" min="1953-01-01" max="1998-12-31" id="birthdate" name="birthdate">&nbsp;
    <span class="error">* <?php echo $birthdateErr;?></span><br><br>
  

  GENDER :
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <span class="error">* <?php echo $genderErr;?></span><br><br>
    <input type="submit" name="submit" value="Register" style="background: gray;">&nbsp;&nbsp;
  <br><br>

 <p>Already have an account?<a href="http://localhost/a2/UniversityManagementSystem/views/login.php">Click Here</a> to log in</p>

</center>  
</p>

</fieldset>
  


</form>

   <script>
        function check(val){
            var name = val.name.value;
            if (name === ""){
                return true;
            }
        }
        function submitForm (pForm){
            var isValid = check(pForm);
            if(isValid) {
                var xhttp = new XMLHttpRequest();
                xhttp.onload = function(){
                    if (this.statuis === 200) {
                        document.getElementById("t1").innerHTML = this.responseText;
                    }
                }
                xhttp.open("POST", "action.php");
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("name" + pForm.name.value);
            }
        }
    </script>

</body>

  <?php include '../Controllers/Includes/Footer.php'?>
</html>
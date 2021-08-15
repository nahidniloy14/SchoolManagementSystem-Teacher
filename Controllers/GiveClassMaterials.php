
<!DOCTYPE html>
<html>
<?php include '../Controllers/Includes/Header.php'?>
<?php include '../Controllers/Includes/Navigation.php'?>  
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body style="background: #2CA49A";>
<fieldset>
  <form action="" method="post">
   <center>
<label for="class">Choose a Course:</label>


<select id="class">
  <option value="sec">WebTech</option>
  <option value="sec">Computer Graphics</option>
  <option value="sec">C#</option>
  <option value="sec">C++</option>
</select><br><br>


<form action="" method="post">
            <center>
          
                         <label for="class">Choose a Section:</label>

<select id="class">
  <option value="sec">A</option>
  <option value="sec">B</option>
  <option value="sec">C</option>
  <option value="sec">D</option>
</select>
              

                     

    
  <form action="" method="post">
   <center>            



<h3>Upload a Lecture:</h3>

  <label for="myfile">Select a file:</label>
  <input type="file" id="myfile" name="myfile"><br><br>
  <br>

 <input type="submit" name="submit" value="Upload" style="background: lightgray;">





</fieldset>


</body>

  <?php include '../Controllers/Includes/Footer.php'?>
</html>

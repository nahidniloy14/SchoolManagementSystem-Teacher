<html>
<?php include '../Controllers/Includes/Header.php'?>
<?php include '../Controllers/Includes/Navigation.php'?> 
    <body style="background: #2CA49A";>
        <form action="" method="post">
            <center>
                <table border=0>
                    <tr>
                        <td>
                            Student Name :
                        </td>
                        <td>
                            <input type=text name="t1">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Course Name :
                        </td>
                        <td>
                            <input type=text name="t2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Marks :
                        </td>
                        <td>
                            <input type=text name="t3">
                        </td>
                    </tr>
                   
                </table>
                <br>
                <br>
                <input type=submit name="s" value="Result">
            </center>
            <?php
if(isset($_POST['s']))////checking whether the input element is set or not
{
    $a=$_POST['t1']; //accessing value from 1st text box
    $a1=$_POST['t2']; //accessing value from 2nd text field
    $a2=$_POST['t3']; //accessing value from 3rd text field
  
    $sum=$a2; //total marks
    //$avg=$sum/3;
    if($sum>=0&&$sum<=50)
        $grade="Fail";
    if($sum>50&&$sum<=70)
        $grade="C";
    if($sum>70&&$sum<=80)
        $grade="B";
    if($sum>80&&$sum<=90)
        $grade="A";
    if($sum>90)
        $grade="A+";
    echo "<br>";
    echo "<font size=4><center>Student name : ".$a."</center><br>"; 
    echo "<font size=4><center>Course name : ".$a1."</center><br>"; 
    
    echo "<font size=4><center>Total marks : ".$sum."</center><br>"; 
    echo "<font size=4><center>Grade : ".$grade."</center>"; 
}
            ?>
        </form>
    </body>
     <?php include '../Controllers/Includes/Footer.php'?>
</html>
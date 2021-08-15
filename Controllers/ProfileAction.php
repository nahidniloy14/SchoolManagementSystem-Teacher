<?php
$sid=$cgpa=$creditcomplete=$dept="";
$profile="";
if($_SERVER['REQUEST_METHOD'] === "POST")
{
	$sid="19-39625-1";
	$cgpa="2011";
	$creditcomplete="45";

	$dept="CSE";
	if($sid===$_POST['sid'] && $cgpa===$_POST['cgpa'] && $creditcomplete===$_POST['creditcomplete']&& $program===$_POST['program'] && $dept===$_POST['dept'])
	{
		if(isset($_POST['profile']))
		{
			setcookie("sid",$sid,time()+60*60*365);
			setcookie("cgpa",$cgpa,time()+60*60*365);
			setcookie("creditcomplete",$creditcomplete,time()+60*60*365);
			setcookie("program",$program,time()+60*60*365);
			setcookie("dept",$dept,time()+60*60*365);
			setcookie("profile",$profile,time()+60*60*365);
			header("location:../view/view_completed_course.php");
		}
	



		if(isset($_COOKIE['profile']))
		{
			$sid=$_COOKIE['sid'];
            $cgpa=$_COOKIE['cgpa'];
           $creditcomplete=$_COOKIE['creditcomplete'];
           $program=$_COOKIE['program'];
           $dept=$_COOKIE['dept'];
           $profile=$_COOKIE['profile'];
           
		}
	}
}
	
 <?php
$servername="localhost";
$username="root";
$password="root";
$con=new mysqli($servername,$username,$password);
if($con->connect_error)
{
	die("connection failed:".$con->connect_error);
}
else  ;

	
{
	$pwd=md5($_POST['pass']);
mysqli_select_db($con,'bookmybus');
$user=$_POST['user'];
$pass=$_POST['pass'];
$result = mysqli_query($con,"SELECT * from reg where user='$user' and pass='$pwd'");
$count = mysqli_num_rows($result);
if($count>0)
{
?>
<script type="text/javascript">
	window.location="home.html"
</script>
<?php
}
else
{
?>
<script type="text/javascript">
	alert("invalid user");
</script>
<?php
}
header("refresh:2;url=login.html");
}
?>


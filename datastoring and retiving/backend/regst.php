 <?php
$servername="localhost";
$username="root";
$password="root";
$con=new mysqli($servername,$username,$password);
if($con->connect_error)
{
	die("connection failed:".$con->connect_error);
}
else
	
{
mysqli_select_db($con,'bookmybus');
$user=$_POST['user'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$dob=$_POST['dob'];
$pwd=md5($_POST['pass']);
$sql = "INSERT INTO reg(user,pass,email,phone,dob) VALUES 
('$user','$pwd','$email','$phone','$dob')";
if(!mysqli_query($con,$sql))
{
?>
<script type="text/javascript">
	alert("This username is already exist");
</script>
<?php
}
else
{
	?>
<script type="text/javascript">
	alert("Register successfully");
</script>
<?php
}
}
header("refresh:2;url=login.html");
?>


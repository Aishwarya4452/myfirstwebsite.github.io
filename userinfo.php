<?php
$con = mysqli_connect('localhost','root');

if($con)
{
	echo "Connection Successful";
}
else
{
	"Connecton faild";
}
mysqli_select_db($con,'phpwebsite');

$uname = $_POST['uname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$query ="insert into userinfodata(uname,email,mobile)values(
'$uname','$email','$mobile')";
mysqli_query($con,$query);

?>
<?php
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$emailid=$_POST['email'];
$gender=$_POST['gender'];
$dateofbirth=$_POST['dob'];
$mobilenumber=$_POST['mobile'];
$username=$_POST['uname'];
$password=$_POST['pwd'];
$retypepassword=$_POST['rpwd'];

$con=mysqli_connect('localhost','root','','egardenstore');
if($con->connect_error){
	die('connection failed:'.$con->connect_error);
}else{
	$stmt=$con->prepare("insert into registration(firstname,lastname,emailid,gender,dateofbirth,mobilenumber,username,password,retypepassword)values(?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("sssssisss",$firstname,$lastname,$emailid,$gender,$dateofbirth,$mobilenumber,$username,$password,$retypepassword);
	$stmt->execute();
	echo"registration successfully ";
	$stmt->close();
	$con->close();
}

?>
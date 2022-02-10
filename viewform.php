<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="design.css"/>
</head>
<body>    
<h1 style="text-align: center;font-weight: bold;color: rgb(235, 148, 90);">Omega</h1>
    <ul>
       
        <li><a href="Home01.html">Home</a></li>
        <li><a href="Registration01.html">Registration form</a></li>
        <li><a href="showform.php">View Form</a></li>
        <li><a href="logout.html">Logout</a></li>
    </ul>
</body>
</html>
<?php

$servername="localhost";
$username="nileshp";
$password="1234";
$dbname="registration1";
$name=$_POST['name'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$email=$_POST['email'];
$pin=$_POST['pin'];
$dob=$_POST['dob'];
$mobile=$_POST['mobile'];

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("Connection failed :".mysqli_connect_error());
}
if($_SERVER['REQUEST_METHOD']=="POST")
{
$sql="INSERT INTO info (name,fname,mname,email,dob,mobile,pin) values('$name','$fname','$mname','$email','$dob','$mobile','$pin')";
if(mysqli_query($conn,$sql))
{
    echo "<h1 style='text-align:center;color:green;'>Your form has been submitted succesfully</h1>";
}
else
{
    // echo"Error:".mysqli_error($conn);
    echo"<h1 style='text-align:center;color:orange;'>This Email is already exist</h1>";
}
}
// else
// {
//     header("location:registration01.html");
// }


?>


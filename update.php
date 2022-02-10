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
        <li><a href="logout.php">Logout</a></li>
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
// if(!$conn)
// {
//     die("Connection failed :".mysqli_connect_error());
// }
if($name!=null)
{
    $sql="UPDATE info SET name='$name' WHERE email='$email'";
    if(mysqli_query($conn,$sql))
    {
         echo"<h2 style='color:green;text-align:center;'>Your Name is Update succesfully";
    }
}
else if($fname!=null)
{
    $sql="UPDATE info SET fname='$fname' WHERE email='$email'";
    if(mysqli_query($conn,$sql))
    {
        echo"<h2 style='color:green;text-align:center;'>Your Father Name is Update succesfully</h2>";
    }
} else if($mname!=null)
{
    $sql="UPDATE info SET mname='$mname' WHERE email='$email'";
    if(mysqli_query($conn,$sql))
    {
         echo"<h2 style='color:green;text-align:center;'>Your Mother Name is Update succesfully";
         header("location:viewform.php");
    }
}
 else if($dob!=null)
{
    $sql="UPDATE info SET dob='$dob' WHERE email='$email'";
    if(mysqli_query($conn,$sql))
    {
         echo"<h2 style='color:green;text-align:center;'>Your Date of birth is Update succesfully";
    }
}else  if($mobile!=null)
{
    $sql="UPDATE info SET mobile='$mobile' WHERE email='$email'";
    if(mysqli_query($conn,$sql))
    {
         echo"<h2 style='color:green;text-align:center;'>Your Mobile Number Update succesfully";
    }
}
else  if($pin!=null)
{
    $sql="UPDATE info SET pin='$pin' WHERE email='$email'";
    if(mysqli_query($conn,$sql))
    {
         echo"<h2 style='color:green;text-align:center;'>Your Pin is Update succesfully";
    }
}
 else if($name==null||$fname==null||$mname==null||$dob==null||$mobile==null)
{
    echo"<h2 style='color:orange;text-align:center;'>Please fill form Correctly!!";
    header("location:update.html");
}
else
{
  
$sql="UPDATE info SET name='$name',fname='$fname',mname='$mname',email='$email',dob='dob',mobile='mobile' where email='$email'";
if(mysqli_query($conn,$sql))
{
    echo"Profile Updated Succesfully";
}
}
?>
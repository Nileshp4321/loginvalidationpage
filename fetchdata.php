
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>

ul
{
    list-style: none;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    background-color: rgb(83, 79, 79);
    padding: 0.9rem;
}
li
{
    text-align: center;
    padding-left: 3rem;
    padding-right: 3rem;
}
li a
{

    text-decoration: none;
    color:rgb(255, 255, 255);
   
}
li a:hover
{
   
    text-decoration:none;
    animation:newnav;
    animation-duration: 0.8s;
    animation-iteration-count: infinite;
    /* background-color: rgb(236, 108, 57); */
    border-bottom:0.2rem solid black;
    border-color: black;
    border-top-color: rgb(83, 79, 79);
    border-left-color: rgb(83, 79, 79);
    border-right-color: rgb(83, 79, 79);
    border-bottom-color: rgb(83, 79, 79);
    border-style:solid;
    border-radius:0.01rem;
    color: rgb(27, 25, 25);
}
@keyframes newnav {
    0%
    {

        border-bottom-color:rgb(240, 120, 51);
    } 
    
    50%
    {
        border-bottom-color:rgb(240, 120, 51);
    }
    75%
    {
        border-bottom-color:rgb(240, 120, 51);
    }
    100%
    {
        border-bottom-color:rgb(240, 120, 51);
    }
    
}
    </style>
</head>
<body>    
    <h1 style="text-align: center;font-weight: bold;color: rgb(235, 148, 90);">Omega</h1>
    <ul>
       
        <li><a href="Home01.html">Home</a></li>
        <li><a href="Registration01.html">Registration form</a></li>
        <li><a href="showform.php">View Form</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
<?php

$servername="localhost";
$username="nileshp";
$password="1234";
$dbname="registration1";
$email=$_POST['email'];
$pin=$_POST['pin'];


$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("Connection failed :".mysqli_connect_error());
}
$sql="SELECT * from info where email='$email'&& pin='$pin'";

$result=mysqli_query($conn,$sql);
if($result)
{
  $num=mysqli_num_rows($result);
  if($num==1)
   {
     session_start();
     $sqls="SELECT name from info where email='$email'";
     $results=mysqli_query($conn,$sqls);
     $rows=mysqli_fetch_row($results);
     $_SESSION['email']=$rows[0];
  echo"'<h1 style='text-align:center;'>Welcome ".$rows[0]; 

  echo"<h2 style='color:grey;text-align:center;'>Details</h2>";  

 
  if($row=mysqli_fetch_row($result))
  {
   
   echo"<table class='table table-dark table-hover'
   <thead>
     <tr>
       <th scope='col'>S.no</th>
       <th scope='col'>Name</th>
       <th scope='col'>Father Name</th>
       <th scope='col'>Mother Name</th>
       <th scope='col'>Dob</th>
       <th scope='col'>Mobile Number</th>
     </tr>
   </thead>
   <tbody>
     <tr class='bg-primary'>
       <th scope='row'>1</th>
       <td>$row[0]</td>
       <td>$row[1]</td>
       <td>$row[2]</td>
       <td>$row[4]</td>
       <td>$row[5]</td>
       <td><a class='btn btn-success' href='updatedetails.php'>Update Profile</a></td>
       
     </tr>
     
   </tbody>
   
 </table>" ;

}
   }
else
{
  echo"<h2 style='color:red;text-align:center;'>This Account is dosen't exist Please create a account</h2>";
  echo"<h3 style='text-align:center; margin:1.5rem; border-radius:0.2rem;'><a style='background-color:orange;color:black;'href='registration01.html'>Click Here</a></h3>";
}
}

// }

?>
</body>
</html>
<!-- // else
// {
//     echo'Error:'.mysqli_error($conn);
// } -->

























<!-- // if($row=mysqli_fetch_row($result))
  // { -->
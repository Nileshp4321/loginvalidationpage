<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2
      {
          text-align: center;
          color:  rgb(247, 116, 40);    
          text-decoration: underline;
      }
      li
      {
          list-style: none;
      }
      button
      {
        
        padding: 0.3rem;
        cursor: pointer;
        color: rgb(240, 134, 72);
        outline: none;
        border-color: black;
        margin:0.5rem;
        border-radius: 0.5rem;
        padding-left: 1rem;
        padding-right: 1rem;
        padding-top:0.4rem;
        padding-bottom: 0.5rem;

      }
      button:hover
      {
          color: rgb(24, 23, 23);          
        background-color: rgb(241, 89, 0);
        transform:scale(1.10);
      }
     
      input
      {
         /* margin:0.5rem;
         display:block;
         position: relative; */
         width: 20rem;
         height: 1.3rem;
         /* left:24rem; */
         padding:0.3rem;
         margin:0.8rem; 
         outline: none;
         border-color: black;
         border-radius: 0.5rem;
      }
      input:hover
      {
        transform:scale(1.05);
      }
      form
      {
          display: flex;
          flex-direction: column;
          align-items: center;
          padding:1.2rem;
          background-color: rgb(68, 66, 66);
      }
      span
      {
          color: rgb(238, 70, 70);
      }
      .button
      {
        display: flex;
        flex-direction: row;
        align-items: center;
      }
      h4
      {
        color:orange;
      }
    </style>
  <link rel="stylesheet" href="design.css"/>
</head>
<body>    
    <h1 style="text-align: center;font-weight: bold;color: rgb(235, 148, 90);">Omega</h1>
    <ul>
       
        <li><a href="Home01.html">Home</a></li>
        <li><a href="Registration01.html">Registration form</a></li>
        <li><a href="showform.php">View Form</a></li>
        <h4>Welcome<?php  echo" ".$_SESSION['email'];  ?></h4>
        <li><a href="logout.php">Logout</a></li>
    </ul>
 
    <form action="update.php" method="post" >
        <h2 >Update Profile</h2>
      <li >          
          <input type="text" name="name" placeholder="Name" />
      </li>
      <li>
            <input type="text" name="fname" placeholder="Father Name"/>
        </li>
        <li>          
          <input type="text" name="mname" placeholder="Mother Name"/>
    </li>
    <li>
        <input type="email" name="email" placeholder="Email" />
      </li>
      <li>          
        <input type="password" name="pin" placeholder="Update Pin" maxlength="20"/>
  </li>
    <li>        
        <input type="date" name="dob" placeholder="Dob" />
        <li>            
    <li>          
        <input type="tel" name="mobile" placeholder="Mobile Number" maxlength="10"/>
  </li>
  
   <div class="button">
    <button type="submit" >Submit</button>
    <button type="reset" >Reset</button>
  </div>  
  </form>
</body>
</html>
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="design.css"/>
  <style>
    h1
    {
      color: rgb(241, 89, 0);;
    }
       input
      {
         margin:0.5rem;
         display:block;
         /* position: relative; */
         width: 20rem;
         height: 1.3rem;
         /* left:32rem; */
         padding:0.3rem;
         margin:0.8rem;
         outline: none;
         border-color: black;
         border-radius: 0.5rem;
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
      form
      {
        padding:1.2rem;
          background-color: rgb(68, 66, 66);
          text-align:center;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          padding:1.2rem;
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
    <form action="fetchdata.php" method="post">

    <h1>Log In </h1>
   <input type="email" name="email" placeholder="Email" required />
   <input type="password" name="pin" placeholder="Pin" required maxlength="20" required/>
    <button type="submit">Show Details</button>
    </form>
   
  
</body>
</html>
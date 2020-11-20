<!DOSTUPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="frm">
<?php
    session_start (); 

   if (!isset ($_POST ['Go'])){
      echo "<form method='POST'>
         Логин:&nbsp&nbsp <input type='text' name='login'><br>
         Пароль: <input type='password' name='passwd'><br>
         <input type='submit' name='go' value='Go'>
     </form>";
   } 
   else { 
      $_SESSION ['Login']=$_POST ['login']; 
      $_SESSION ['Passwd']=$_POST ['passwd']; 
      include "auth.php";
   } 
   ?>
       </div>
   </body>
   </html>